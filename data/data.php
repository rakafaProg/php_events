<?php
    class Data {
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "northwind4";

        function fetch($sql) {
            try {
                $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $resultsArray = $conn->query($sql);
                return $resultsArray;

            }
            catch(PDOException $e)
            {
                return $e->getMessage();
            }
        }
    }


    class DataToObject {
        static function createUsers($sqlArray) {
            $usersArray = [];

            foreach ($sqlArray as $user) {
                array_push($usersArray,
                    new User ([
                        'id'=>$user['id'],
                        'name'=>$user['name'],
                        'email'=>$user['email'],
                        'password'=>$user['password']
                    ])
                );
            }
            return $usersArray;
        }
        static function createEvents($sqlArray) {
            $eventsArray = [];
          
            foreach ($sqlArray as $event) {
                array_push($eventsArray,
                    new Event ([
                        'id'=>$event['id'],
                        'name'=>$event['name'],
                        'date'=>$event['date']
                     ])
                );
            }
            return $eventsArray;
        }
    }

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


    class Event {
        private $id;
        private $name;
        private $date;

        function __construct ($params) {
            $this->id = $params['id'];
            $this->name = $params['name'];
            $this->email = $params['date'];

        }

        function getId () {
            return $this->id;
        }

        function getName () {
            return $this->name;
        }

        function getDate () {
            return $this->date;
        }

    }


?>
