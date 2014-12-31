<?php
Namespace FSTool\Model
{
    USE FSTool\Traits\Database;

    /**
     * Class Group
     * @package FSTool\Model
     */
    Class App Implements \FSTool\Interfaces\Controls
    {
        USE Database;

        protected $PDObject = null; // pdo instance

        protected $routes   = [],
                  $errors   = [];

        public function query($table, array $names = [], array $where = [])
        {
            $col = (! empty($names)) ? implode(', ', $names) : '*';

            $sql = "SELECT {$col} FROM {$table}";

            if (! empty($where))
            {
                $sql .= " WHERE";

                foreach (array_keys($where) AS $key)

                    $sql .= " {$key} = :{$key} AND";

                $sql = rtrim($sql, ' AND');
            }

            $dbh = $this->PDObject = $this->load();
            $res = $dbh->prepare($sql);
            $res->exec();

            return $res->fetchAll(\PDO::FETCH_OBJ);
        }

        private function put($object)
        {

        }

        public function add()
        {
            if ($this->request()->isGet())
            {
                $this->render('admin/filesystem/application/add', [
                    'apps' => $this->query('applications', ['name', 'id']),
                ]);
            }

            else if ($this->request()->isPost())
            {
                print_r($this->request()->getBody()); die;
            }

            else
            {
                $this->errors['method'][] = "Method of type: {$this->request()->getMethod()} is disallowed.";
            }
        }

        public function pkg($object)
        {
            // ....
        }

        protected function setRoutes()
        {
            $routes = explode('/', preg_replace('~^/~','',strtolower($this->request()->getPathInfo())));

            $this->routes['referrer'] = $routes[0];
            $this->routes['action']   = $routes[1];

            if (2 < count($routes))
            {
                die;
            }

                return $this;
        }
    }
}