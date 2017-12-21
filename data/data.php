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

        function insertData($sql) {
            try {
                $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $result = $conn->query($sql);

                if($result)
                  return true;
                else
                  return false;


            }
            catch(PDOException $e)
            {
                return $e->getMessage();
            }
        }
    }


    class DataToObject {
        static function createUsers($sqlArray) {
            if($sqlArray->rowCount()==0)
              return false;
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
          if($sqlArray->rowCount()==0)
            return false;

            $eventsArray = [];

            foreach ($sqlArray as $event) {
                array_push($eventsArray,
                    new Event ($event)
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
        private $description;

        function __construct ($params) {
            $this->id = $params['id'];
            $this->name = $params['name'];
            $this->date = $params['date'];
            $this->description = $params['description'];
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

        function getDescription () {
            return $this->description;
        }

    }


?>
