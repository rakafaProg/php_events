<?php

    class User {
        private $id;
        private $name;
        private $email;
        private $password;

        function __construct ($params) {
            $this->id = $params['id'];
            $this->name = $params['name'];
            $this->email = $params['email'];
            $this->password = $params['password'];
        }

        function getId () {
            return $this->id;
        }

        function getName () {
            return $this->name;
        }

        function getEmail () {
            return $this->email;
        }

        function getPassword () {
            return $this->password;
        }
    }


?>
