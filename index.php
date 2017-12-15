<!DOCTYPE html>
<html>
    <head>

        <style>
            table  {
                background-color: lightblue;
                border: 1px solid black;
                border-collapse: collapse;
            }
            td , th{
                border: 1px solid black;
                border-collapse: collapse;
            }
            th {
                font-weight: 800;
            }
        </style>
    </head>
    <body>
        <?php
            include "data/data.php";
            $data = new Data();
            $myUsers = DataToObject::createUsers($data->fetch('SELECT * FROM ls32_users'));
            
           echo '<h1>Users</h1>';
           echo '<table><thead><tr><th>Id</th>
           <th>Name</th>
           <th>Email</th>
           <th>Password</th>
           </tr></thead><tbody>';
            foreach ($myUsers as $user) {

                echo '<tr><td>'.$user->getId().'</td>'.
                '<td>'.$user->getName().'</td>'.
                '<td>'.$user->getEmail().'</td>'.
                '<td>'.$user->getPassword().'</td></tr>';
                
            }

            echo '</tbody></table>';

            $myEvents = DataToObject::createEvents($data->fetch('SELECT * FROM ls32_events'));
            

            echo '<h1>Events</h1>';
            foreach ($myEvents as $event) {
                echo $event->getId().' ';
                echo $event->getName().' ';
                echo $event->getDate().' ';
                
                echo '<br />';
            }
         ?>

    </body>
</html>