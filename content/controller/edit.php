<?php
session_start();

require_once('../models/user.php');

$dhenat= new User();
$myId=$_GET['id'];
$data=$dhenat->readByID($myId);

 if (isset($_POST['edit'])){
     if ($myId==$dhenat->getId()){

          $dhenat->setName($_POST['emri']);
          $dhenat->setLastname($_POST['mbiemri']);
          $dhenat->setEmail($_POST['email']);

         echo $dhenat->updateData();
    echo 
    "<script>
        alert('User data updated successfully');
        document.location='../views/display.php'
    </script>";
     }



 }
  
?>
<!DOCTYPE html>
<htm>
    <head>
        <link rel="stylesheet" href ="../../style/regjistro.css" />
        <title>Update data</title>
    </head>
    <body>
        <div style="height:330px;" id="formulari">
        <h3>Update user data</h3>
            <form action='' method="POST">
            <input type="text" class="inp" name="emri"
            placeholder ="Update name here"/>
            <input type="text" class="inp" name="mbiemri"
            placeholder ="Update last name here"/>
            <input type="text" class="inp" name="email"
            placeholder ="Update email here"/>
            <button style="width: 150px; font-size:17px;" name='edit'>Save changes</button>
            </form>
        </div>
    </body>
</html>