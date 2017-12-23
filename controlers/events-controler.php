<?php

    class eventControler {

      public static function getJoinedUsersString($event) {
          $users = $event->getUserCount();

          if ($users == 0)
              return 'No one is going to this event.';

          if ($users == 1)
              return 'One person is going to this event.';

          if ($users > 1)
              return $users.' users are going to this event.';

      }

      public static function getRating($event) {
          $users = $event->getUserCount();

          if($users == 0) return 0;
          if ($users < 4)  return 1;
          if ($users < 7)  return 2;
          if ($users < 10)  return 3;
          if ($users < 13)  return 4;
          if ($users >= 13)  return 5;
      }

    }


?>
