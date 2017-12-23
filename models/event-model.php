<?php

    class Event {
        private $id;
        private $name;
        private $date;
        private $description;
        private $paticipation;
        private $userCount;

        function __construct ($params) {
            $this->id = $params['id'];
            $this->name = $params['name'];
            $this->date = $params['date'];
            $this->description = $params['description'];
            $this->paticipation = $params['id_user'];
            $this->userCount = 0;
        }

        function getId () {
            return $this->id;
        }

        function getName () {
            return $this->name;
        }

        function getDate () {
            return date_create($this->date)->getTimestamp();
        }

        function getDescription () {
            return $this->description;
        }

        function getParticipation () {
            return $this->paticipation;
        }

        function setUserCount($value) {
            $this->userCount = $value;
        }

        function getUserCount () {
            return $this->userCount;
        }

    }


?>
