<?php

/**
 * REQ : https://github.com/briannesbitt/Slim-ContextSensitiveLoginLogout
 */

Namespace FSTool\Controller
{
    Class BasicAuth Extends \SlimController\SlimController
    {
        public function indexAction()
        {
            die('index');
        }
        public function routerAction()
        {
            die('router hit');
        }

        /**
         * SlimController does not the ability to separate GET/POST requests
         * at the minute, so until then it will need a delegate until we can
         * turn loginAction() and authAction() into Public methods. ~jd
         */
        public function delegateAction()
        {
            if (! $this->app->request()->isPost())
            {
                $this->login();     //loginAction()
            }

            $this->authenticate();  //authAction()
        }

        private function login()
        {
            $error = '';
            $flash = $this->app->view()->getData('flash');

            $redirect = '/';
            if (isset($flash['error'])) $error = $flash['error'];

            if ($this->request()->get('r') && $this->request()->get('r') != '/logout' && $this->request()->get('r') != '/login')

                $_SESSION['urlRedirect'] = $this->request()->get('r');

            if (isset($_SESSION['urlRedirect'])) $redirect = $_SESSION['urlRedirect'];

            $emailVal = $emailErr = $passErr = '';

            if (isset($flash['email']))              $emailVal = $flash['email'];
            if (isset($flash['errors']['email']))    $emailErr = $flash['errors']['email'];
            if (isset($flash['errors']['password'])) $passErr  = $flash['errors']['password'];

            $this->render('basicauth/login', [
                'error'          => $error,
                'email_value'    => $emailVal,
                'email_error'    => $emailErr,
                'password_error' => $passErr,
                'urlRedirect'    => $redirect
            ]);
        }

        public function logoutAction()
        {
            unset($_SESSION['user']);
            $this->app->view()->setData('user', null);
            $this->render('basicauth/logout');
        }

        private function authenticate()
        {
            $email      = $this->request()->post('email');
            $password   = $this->request()->post('password');
            $errors     = [];

            if ($email != "dodomeki@gmail.com")
            {
                $errors['email'] = "Email is not found.";
            }

            else if ($password != "aaaa")
            {
                $this->app->flash('email', $email);
                $errors['password'] = "Password does not match.";
            }

            if (count($errors) > 0)
            {
                $this->app->flash('errors', $errors);
                $this->redirect('/login');
            }

            $_SESSION['user'] = $email;

            if (isset($_SESSION['urlRedirect']))
            {
                $tmp = $_SESSION['urlRedirect'];
                unset($_SESSION['urlRedirect']);
                $this->redirect($tmp);
            }

            $this->redirect('/');
        }
    }
}