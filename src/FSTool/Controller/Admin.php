<?php

/**
 * REQ : https://github.com/briannesbitt/Slim-ContextSensitiveLoginLogout
 */

Namespace FSTool\Controller
{
    Class Admin Extends \SlimController\SlimController
    {
        protected $requests    = [],
                  $resource    = '';

        public function indexAction()
        {
            $this->render('admin/index');
        }

        /**
         * Handles switching of Groups and Users
         */
        public function groupAction()
        {
            $group = New Group();

            if (in_array('add', $this->setPath()->requests))

                $this->groupAddAction();

            else
            {
                $this->render('admin/auth/group/index');
            }
        }


        private function groupAddAction()
        {
            $this->render('admin/auth/group/add');
        }


        /**
         * Handles switching of Groups and Users
         */
        public function appAction()
        {
            if (in_array('add', $this->setPath()->requests))    $this->appAddAction();

            else if (2 == count($this->requests))               $this->appViewAction();

            else
            {
                $this->render('admin/filesystem/application/index');
            }
        }

        private function appViewAction()
        {
            print_r($this->requests);
        }

        private function appAddAction()
        {
            $this->render('admin/filesystem/application/add');
        }




        /**
         * Set path, remove admin from route
         *
         * @return $this
         */
        private function setPath()
        {
            $this->requests = explode('/', preg_replace('~^/~','',strtolower($this->request()->getPathInfo())));
            $this->resource = '';

            unset($this->requests [0]);

                return $this;
        }
    }
}