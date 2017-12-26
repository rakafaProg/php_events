<?php

    class UsersController {
      public static function createUser($params) {
        $res = DataToObject::createUser($params);

        if ($res['recordId'] > -1) {
          setUser($res['recordId'], $params['username']);
          return [
            'msg' => getSuccessMssage(
                'Wellcome '.$params['username'].'!',
                'Your have successfully registered.',
                'To the events page.',
                'events.php'
              ),
            'state' => true
          ];
        }
        if (isset($res['errorCode'])) {
          if ($res['errorCode'] == '23000') {
            return [
              'msg' => 'There is allrady an account with that email.',
              'state' => false
            ];
          } else {
            return [
              'msg' => 'Unknown error. Please try again.',
              'state' => false
            ];
          }
        }
      }

    }



 ?>
