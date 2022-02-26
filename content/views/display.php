<?php
require_once('../models/user.php');
$records = new User();
$userData = $records->readData();
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../../style/dis.css">
        <title>Control panel</title>
    </head>
    <body>
        <div id="a1">
            <header>
                <h3>Users Panel</h3>
                <a href="../controller/insert.php"><Button id='r'>Register users</Button></a>
            </header>
            <table>
            <hr>
            <p>Users:</p>
                    <tr>
                        <th>Name</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                    <tr>
                      <?php 
                      foreach($userData as $key=>$value){
                      ?>
                        <td><?php echo $value['Emri'] ?></td>
                        <td><?php echo $value['Mbiemri'] ?></td>
                        <td><?php echo $value['Email'] ?></td>
                        <td><?php echo $value['Roli'] ?></td>
                        <td id='de'><a href="../controller/delete.php?id=<?php echo $value['id']?>"><button id="d">DELETE</button></a>
                           <a href="../controller/edit.php?id=<?php echo $value['id']?>"><button id='e'>EDIT</button></td></a>
                    </tr>
                          <?php 
                            }
                          ?>
            </table>
        </div>
    </body>
</html>