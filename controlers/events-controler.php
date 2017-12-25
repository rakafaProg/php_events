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

      public static function JoinOrLeaveEvent($params, $userId){
        if (isset($params['join'])) {
          $tryJoin = DataToObject::joinEvent($userId, $params['join']);
          if ($tryJoin)
            return getSuccessMssage(
              '',
              'You successfuly joind this event.',
              'Go back to Events Page',
              $_SERVER['PHP_SELF']
            );
        }

        if (isset($params['leave'])) {
          $tryLeave = DataToObject::leaveEvent($userId, $params['leave']);

          if ($tryLeave)
            return getSuccessMssage(
              '',
              'You will not be registered to this event any more.',
              'Go back to Events Page',
              $_SERVER['PHP_SELF']
            );
        }

        return getErrorMssage(
          '',
          'Something went wrong. Please try again.',
          'Back to Events Page',
          $_SERVER['PHP_SELF']
        );

      }

    }


?>
