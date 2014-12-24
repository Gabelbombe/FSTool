<?php
Namespace FSTool\Model
{
    // replace Builtin PDO with Built-out PDP
    USE FSTool\Model\PDP AS PDO;

    /**
     * Class Auth
     * @package FSTool\Model
     */
    Class BasicAuth Extends \SlimController\SlimController
    {
        protected $email    = false,
                  $pass     = false;

        private   $errors   = [];

        public function __construct($email, $pass)
        {
            $this->email = $email;
            $this->pass  = $pass;
        }

        /**
         * @return bool
         */
        public function exists()
        {
            if (empty(trim($this->email)) || empty(trim($this->pass)))
            {
                $this->errors[(empty(trim($this->email)) ? 'email' : 'password')] = 'Cannot be empty.';

                    return false;
            }

            print_r(yaml_parse_file(APP_PATH . '/config/default.yaml'));
die;
//            $pdo = New PDO(            );

            return true;
        }

        /**
         * @return array
         */
        public function getErrors()
        {
            return $this->errors;
        }
    }
}