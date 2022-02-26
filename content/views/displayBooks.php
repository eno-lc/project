<?php
require_once('../models/book.php');
$records = new Book();
$data = $records->readData();
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../../style/dis.css">
        <title>Books panel</title>
    </head>
    <body>
        <div style="width:40%" id="a1">
            <header>
                <h3>Books panel</h3>
                <a href="../controller/insertBooks.php"><Button id='r'>Add books</Button></a>
            </header>
            <table>
            <hr>
            <p>Books:</p>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                    </tr>
                    <tr>
                      <?php 
                      foreach($data as $key=>$value){
                      ?>
                        <td><?php echo $value['emri'] ?></td>
                        <td><?php echo $value['cmimi'] ?></td>
                        <td><?php echo $value['images'] ?></td>
                        <td id='de'><a href="../controller/deleteBooks.php?id=<?php echo $value['id']?>"><button id="d">DELETE</button></a>
                           <a href="../controller/editBooks.php?id=<?php echo $value['id']?>"><button id='e'>EDIT</button></td></a>
                    </tr>
                          <?php 
                            }
                          ?>
            </table>
        </div>
    </body>
</html>