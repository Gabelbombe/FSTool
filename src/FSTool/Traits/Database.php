<?php
Namespace FSTool\Traits
{
    USE \FSTool\Model\PDP AS PDO;

    Trait Database
    {
        private $yaml = null;

        /**
         * Generic loader for db connection, non-singleton
         *
         * @param array $settings
         * @return PDO
         */
        protected function load(array $settings = [])
        {
            // Set database adapter, or default to DEV
            $yaml   = yaml_parse_file(APP_PATH . '/config/default.yaml');

            $this->yaml = (isset($yaml [getenv('APP_ENV')]))
                ? (object) $yaml [getenv('APP_ENV')]    // load app environment YAML
                : (object) $yaml [DEFAULT_ENV];         // or load default YAML...

            // returns instance of hybrid PDO...
            return New PDO($this->stringify(), $this->yaml->username, $this->yaml->password, $settings);
        }

        /**
         * Return  string in format of: mysql:host=localhost;dbname=test
         *
         * @return string
         */
        private function stringify()
        {
            return "{$this->yaml->adapter}:host={$this->yaml->host};dbname={$this->yaml->database}";
        }
    }
}