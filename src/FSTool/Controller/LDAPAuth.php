<?php

/**
 * REQ : https://github.com/Alaneor/AD-X
 */

Namespace FSTool\Controller
{
    Class Authenticate Extends \SlimController\SlimController
    {
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