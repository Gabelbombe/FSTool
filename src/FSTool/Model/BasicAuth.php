<?php

Namespace FSTool\Model
{
    Class Auth Extends \SlimController\SlimController
    {
        protected $email    = false,
                  $pass     = false;

        private   $errors   = [];

        public function __construct($email, $pass)
        {
            $this->email = $email;
            $this->pass  = $pass;
        }

        public function exists()
        {
            if (empty(trim($this->email)) || empty(trim($this->pass)))
            {
                $this->errors[(empty(trim($this->email)) ? 'email' : 'password')] = 'Cannot be empty.';

                    return false;
            }

            $pdp = New \FSTool\Model\PDP();

        }

        public function getErrors()
        {
            return $this->errors;
        }
    }
}