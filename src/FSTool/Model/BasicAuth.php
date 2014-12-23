<?php

Namespace FSTool\Model
{
    Class Auth Extends \Slim\Middleware
    {
        public function call()
        {
            die('call');

            //Check URL to see if we need to apply auth
            //If so use getUserIdFromCredentials() or similar
        }

        public function indexAction()
        {
            $this->render('ldap/index', []);
        }

        public function helloAction($name)
        {
            $this->render('home/hello', [
                'name' => $name
            ]);
        }
    }
}