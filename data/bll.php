<?php

    require_once '../data/dal.php';
    require_once '../models/event-model.php';

    class DataToObject {

      private static $data;
      static function init() {
        self::$data = new Data();
      }

      static function getUsers($where) {
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


        static function getEvents($userId) {
          if (!isset($userId))
            $userId = 'null';

          $sql =
              'SELECT `ls32_events`.* ,`id_user`
              FROM `ls32_events`
              LEFT JOIN `ls32_user_events`
              ON `id_event` = `id`
              AND `id_user`='.$userId.'
              WHERE `date` >= DATE_SUB(NOW(), INTERVAL 3 HOUR)
              ORDER BY `id_user` DESC, `date` ASC';

          $sqlArray = self::$data->fetch($sql);

          $eventsArray = [];

          foreach ($sqlArray as $event)
            $eventsArray[$event['id']] = new Event ($event);

          // get participations:

          $sql =
              'SELECT COUNT(`id_user`) AS "cnt", `id_event`
              FROM `ls32_user_events`
              GROUP BY `id_event`';

          $sqlArray = self::$data->fetch($sql);

          foreach ($sqlArray as $eventkey) {
              if (array_key_exists($eventkey['id_event'], $eventsArray)) {
                $eventsArray[$eventkey['id_event']]->setUserCount($eventkey['cnt']);
              }
          }

          return $eventsArray;
        }
    }

    DataToObject::init();

 ?>