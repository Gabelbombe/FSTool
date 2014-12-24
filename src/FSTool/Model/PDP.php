<?php
/**
 * PHP Document Object plus
 *
 * PHP Document Object plus is library with functionality of PDO, entirely written
 * in PHP, so that developer can easily extend it's classes with specific functionality,
 * such as providing database usage statistics implemented in v1.0b.
 *
 * Classes have properties with original PDO and PDOStatement objects, which are providing
 * the functionality to PDP and PDPStatement. From outside, PDP and PDPStatement look like
 * PDO and PDOStatement, but also are providing wanted info.
 *
 * ~jd
 */
Namespace FSTool\Model
{
    Class PDP
    {
        public      $numExecutes    = false,
                    $numStatements  = false;

        protected   $pdo;

        public function __construct($dsn, $user = null, $pass = null, $driverOptions = null)
        {
            $this->pdo = New \PDO($dsn, $user, $pass, [ // REF: http://stackoverflow.com/a/23482353/411141
                \PDO::ATTR_PERSISTENT => true,
            ] + $driverOptions);

            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $this->numExecutes   = 0;
            $this->numStatements = 0;
        }

        public function __call($func, $args)
        {
            return call_user_func_array([
                &$this->pdo, $func
            ], $args);
        }

        public function prepare()
        {
            $this->numStatements++;

            $args = func_get_args();
            $pds = call_user_func_array([
                &$this->pdo, 'prepare'
            ], $args);

            return New PDPStatement($this, $pds);
        }

        public function query()
        {
            $this->numExecutes++;
            $this->numStatements++;

            $args = func_get_args();
            $pds = call_user_func_array([
                &$this->pdo, 'query'
            ], $args);

            return New PDPStatement($this, $pds);
        }

        public function exec()
        {
            $this->numExecutes++;

            $args = func_get_args();
            return call_user_func_array([
                &$this->pdo, 'exec'
            ], $args);
        }
    }

    Class PDPStatement Implements \IteratorAggregate
    {
        protected $pds;
        protected $pdp;

        public function __construct($pdp, $pds)
        {
            $this->pdp = $pdp;
            $this->pds = $pds;
        }

        public function __call($func, $args)
        {
            return call_user_func_array([
                &$this->pds, $func
            ], $args);
        }

        public function bindColumn($column, &$param, $type = null)
        {
            if (null === $type)
            {
                $this->pds->bindColumn($column, $param);
            }

            else
            {
                $this->pds->bindColumn($column, $param, $type);
            }
        }

        public function bindParam($column, &$param, $type = null)
        {
            if (null === $type)
            {
                $this->pds->bindParam($column, $param);
            }

            else
            {
                $this->pds->bindParam($column, $param, $type);
            }
        }

        /**
         * Shortname for execute()
         */
        public function exec()
        {
            $this->pdp->numExecutes++;

            $args = func_get_args();

            return call_user_func_array([
                &$this->pds, 'execute'
            ], $args);
        }

        public function execute()
        {
            $this->pdp->numExecutes++;

            $args = func_get_args();

            return call_user_func_array([
                &$this->pds, 'execute'
            ], $args);
        }

        public function __get($property)
        {
            return $this->pds->$property;
        }

        public function getIterator()
        {
            return $this->pds;
        }
    }
}