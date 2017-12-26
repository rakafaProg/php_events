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



?>
