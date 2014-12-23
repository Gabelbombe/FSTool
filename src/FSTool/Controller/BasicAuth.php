<?php

/**
 * REQ : https://github.com/briannesbitt/Slim-ContextSensitiveLoginLogout
 */

Namespace FSTool\Controller
{
    Class BasicAuth Extends \SlimController\SlimController
    {
        public function loginAction()
        {
            header('Content-type: text/plain');
            print_r($this->app); //die;

            $error = '';
            $flash = $this->app->view()->getData('flash');

            $redirect = '/';

            if (isset($flash['error'])) $error = $flash['error'];

            if ($this->app->request()->get('r') && $this->app->request()->get('r') != '/logout' && $this->app->request()->get('r') != '/login')

                $_SESSION['urlRedirect'] = $this->app->request()->get('r');

            if (isset($_SESSION['urlRedirect'])) $redirect = $_SESSION['urlRedirect'];

            $emailVal = $emailErr = $passErr = '';

            if (isset($flash['email']))              $emailVal = $flash['email'];
            if (isset($flash['errors']['email']))    $emailErr = $flash['errors']['email'];
            if (isset($flash['errors']['password'])) $passErr  = $flash['errors']['password'];

            $this->app->render('basicauth/login', [
                'error'          => $error,
                'email_value'    => $emailVal,
                'email_error'    => $emailErr,
                'password_error' => $passErr,
                'urlRedirect'    => $redirect
            ]);
        }
    }
}