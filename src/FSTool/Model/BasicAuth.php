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
        const     DEFAULT_ENV = 'development';

        protected $email    = false,
                  $pass     = false;

        private   $errors   = [],
                  $config   = [];

        public function __construct($email, $pass)
        {
            // Set database adapter, or default to DEV
            $yaml = yaml_parse_file(APP_PATH . '/config/default.yaml');
            $this->config = (isset($yaml [getenv('APP_ENV')]))
                ? (object) $yaml [getenv('APP_ENV')]
                : (object) $yaml [self::DEFAULT_ENV];

            $this->makeConnectionString();

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

            $pdo = New PDO($this->handler, $this->config->username, $this->config->password, []);

            $stmt = $pdo->prepare("SELECT login FROM users WHERE email = :email AND password = :pass");

                $stmt->bindParam(':email', $this->email);
                $stmt->bindParam(':pass',  $this->pass);    //cleartext for now

            return true;
        }

        /**
         * Return  string in format of: mysql:host=localhost;dbname=test
         *
         * @return string
         */
        private function makeConnectionString()
        {
            return $this->handler = "{$this->config->adapter}:host={$this->config->host};dbname={$this->config->database}";
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