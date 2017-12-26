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

                $lastId = $conn->lastInsertId();


                return [
                  'recordId' => $lastId,
                  'insertResult' => $result,
                  'errorMassage' => 'success'
                ];

                if($result)
                  return true;
                else
                  return false;


            }
            catch(PDOException $e)
            {
                return [
                  'recordId' => -1,
                  'insertResult' => false,
                  'errorMassage' => $e->getMessage(),
                  'errorCode' => $e->getCode()
                ];

            }
        }
    }


    class DataToObject2 {
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
              $eventsArray[$event['id']] = new Event ($event);

            }
            return $eventsArray;
        }
    }

?>
