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

      public static function tryLogin ($email, $password) {
          $res = DataToObject::getUsers([
            'email' => $email,
            'password' => MD5($password)
          ]);

          if ($res) {
            setUser($res[0]->getId(), $res[0]->getName());
            return [
              'state' => true,
              'msg' => getSuccessMssage (
                  'Wellcome back '.$res[0]->getName(),
                  'You will be aoutomaticly redirected to the main page.',
                  ' Go to Events Page',
                  'events.php'
                )
              ];
          } else {
            return [
              'state' => false,
               'msg' => getErrorMssage(
                  'Login Failed',
                  'You might have misspelled your email or password!',
                  'Try again',
                  'login.php'
                )
              ];
          }
      }

    }



 ?>
