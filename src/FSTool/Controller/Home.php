<?php

Namespace FSTool\Controller
{
    Class Home extends \SlimController\SlimController
    {
        public function indexAction()
        {
            $this->render('home/index', [
                'someVar' => date('c')
            ]);
        }

        public function helloAction($name)
        {
            $this->render('home/hello', [
                'name' => $name
            ]);
        }
    }
}
