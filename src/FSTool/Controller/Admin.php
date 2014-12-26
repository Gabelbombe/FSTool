<?php

/**
 * REQ : https://github.com/briannesbitt/Slim-ContextSensitiveLoginLogout
 */

Namespace FSTool\Controller
{
    Class Admin Extends \SlimController\SlimController
    {
        public function indexAction()
        {
            $this->render('admin/index');
        }

        public function adminAction()
        {

        }
    }
}