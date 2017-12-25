<?php

    function getErrorMssage ($title, $msg, $linkTitle, $linkAddress) {
        return '
        <div class="ui ten column grid">
          <div class="row">
            <div class="column"></div>
            <div class="twelve wide column">
              <div class="ui red message huge">
                <div class="header">
                  '.$title.'
                </div>
                <p>'.$msg.'</p>
                <p><a href="'.$linkAddress.'">'.$linkTitle.'</a></p>
              </div>
            </div>
          </div>
        </div>
        ';
    }

    function getSuccessMssage ($title, $msg, $linkTitle, $linkAddress) {
      return '
      <div class="ui ten column grid">
        <div class="row">
          <div class="column"></div>
          <div class="twelve wide column">
            <div class="ui success message huge">
              <div class="header">
                '.$title.'
              </div>
              <p>'.$msg.'</p>
              <p><a href="'.$linkAddress.'">'.$linkTitle.'</a></p>
            </div>
          </div>
        </div>
      </div>
      ';
    }

    function setUser($userid, $username) {
      $_SESSION['user-name'] = $username;
      $_SESSION['user-id'] = $userid;
    }

 ?>
