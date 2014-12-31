<?php
Namespace FSTool\Controller
{
    Class App Extends \SlimController\SlimController
    {
        protected $model = false;

        public function indexAction()
        {
            $apps = New \FSTool\Model\App();
            $sort = $apps->query('applications', ['name', 'id']);
            sort($sort);

            $this->render('filesystem/application/index', [
                'apps'  => json_encode($sort),
            ]);
        }

        public function addAction()
        {
            if ($this->request()->isPost())
            {

            }


        }
    }
}