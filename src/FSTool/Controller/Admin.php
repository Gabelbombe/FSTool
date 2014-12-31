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
            if (in_array('add', $this->setPath()->requests))

                $this->groupAddAction();

            else

                $this->render('admin/auth/group/index');

        }


        private function groupAddAction()
        {

die('add');
            $this->render('admin/auth/group/add');
        }


        /**
         * Handles switching of Groups and Users
         */
        public function appAction()
        {
            $controller = New App($this->app);
            $controller->decide();


//            $model = New Applications();

//            $model->generate();

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