<?php

require_once('../models/book.php');
$dhenat= new Book();
$myId=$_GET['id'];
$data=$dhenat->readByID($myId);

 if (isset($_POST['edit'])){
     if ($myId==$dhenat->getId()){

          $dhenat->setName($_POST['emri']);
          $dhenat->setPrice($_POST['cmimi']);
         

         echo $dhenat->updateData();
    echo 
    "<script>
        alert('User data updated successfully');
        document.location='../views/displayBooks.php'
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
        <h3>Update User Data</h3>
            <form action='' method="POST">
            <input type="text" class="inp" name="emri"
            placeholder ="Update name here"/>
            <input type="text" class="inp" name="cmimi"
            placeholder ="Update last name here"/>
            <button style="width: 150px; font-size:17px;" name='edit'>Save changes</button>
            </form>
        </div>
    </body>
</html>