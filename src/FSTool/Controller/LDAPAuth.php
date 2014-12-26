<?php

/**
 * REQ : https://github.com/Alaneor/AD-X
 */

Namespace FSTool\Controller
{
    Class LDAPAuth Extends \SlimController\SlimController
    {
        public function indexAction()
        {
            $this->render('ldap/index', []);
        }
    }
}