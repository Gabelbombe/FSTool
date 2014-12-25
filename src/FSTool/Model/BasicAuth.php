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
                  $pass     = false,
                  $user     = null;

        private   $errors   = [],
                  $config   = [],
                  $hash     = [];

        public function __construct($email, $pass)
        {
            $this->getConfig()->makeConnectionString();

            $this->email = $email;
            $this->pass  = $pass;
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

            $dbh = New PDO($this->handler, $this->config->username, $this->config->password, []);
            $res = $dbh->prepare("SELECT id, login, hash FROM users WHERE email = :email");

                $res->exec([
                    ':email' => $this->email
                ]);

            $this->user = $res->fetch(\PDO::FETCH_OBJ);

            if (empty($this->user))
            {
                $this->errors['email'] = "Email is not found.";

                    return false;
            }

            return password_verify($this->pass, $this->user->hash);
        }

        private function getConfig()
        {
            // Set database adapter, or default to DEV
            $yaml = yaml_parse_file(APP_PATH . '/config/default.yaml');
            $this->config = (isset($yaml [getenv('APP_ENV')]))
                ? (object) $yaml [getenv('APP_ENV')]
                : (object) $yaml [self::DEFAULT_ENV];

                return $this;
        }

        /**
         * Return  string in format of: mysql:host=localhost;dbname=test
         *
         * @return string
         */
        private function makeConnectionString()
        {
            $this->handler = "{$this->config->adapter}:host={$this->config->host};dbname={$this->config->database}";

                return $this;
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