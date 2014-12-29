<?php
Namespace FSTool\Model
{
    /**
     * Class Auth
     * @package FSTool\Model
     */
    Class BasicAuth Extends \SlimController\SlimController
    {
        USE       \FSTool\Traits\Database;

        const     DEFAULT_ENV = 'development';

        protected $email    = false,
                  $pass     = false,
                  $user     = null;

        protected $PDObject = null; // pdo instance

        private   $errors   = [],
                  $hash     = [];

        public function __construct($email, $pass)
        {
            $this->PDObject = $this->load();
            $this->email    = $email;
            $this->pass     = $pass;
        }

        /**
         * Account exists Y/n]
         * Sets user object
         *
         * PKG REF: https://github.com/ircmaxell/password_compat
         *
         * @return bool
         */
        public function exists()
        {
            if (empty(trim($this->email)) || empty(trim($this->pass)))
            {
                $this->errors[(empty(trim($this->email)) ? 'email' : 'password')] = 'Cannot be empty.';

                    return false;
            }

            $dbh = $this->PDObject;

            $res = $dbh->prepare("SELECT id, login, hash FROM users WHERE email = :email");

                $res->exec([
                    ':email' => $this->email
                ]);

            $this->profile = $res->fetch(\PDO::FETCH_OBJ);

            if (empty($this->profile))
            {
                $this->errors['email'] = "Email is not found.";

                    return false;
            }

            $valid = password_verify($this->pass, $this->profile->hash);

                unset($this->profile->hash); // Let's not tempt fate

            return $valid; // bool
        }


/*
        private function getConfig()
        {
            // Set database adapter, or default to DEV
            $yaml = yaml_parse_file(APP_PATH . '/config/default.yaml');
            $this->config = (isset($yaml [getenv('APP_ENV')]))
                ? (object) $yaml [getenv('APP_ENV')]
                : (object) $yaml [self::DEFAULT_ENV];

                return $this;
        }
*/


        public function getProfile()
        {
            return $this->profile;
        }

        /**
         * Return  string in format of: mysql:host=localhost;dbname=test
         *
         * @return string
         */
/*
        private function makeConnectionString()
        {
            $this->handler = "{$this->config->adapter}:host={$this->config->host};dbname={$this->config->database}";

                return $this;
        }
*/

        /**
         * @return array
         */
        public function getErrors()
        {
            return $this->errors;
        }
    }
}