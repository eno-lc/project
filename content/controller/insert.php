<?php
require_once('../models/user.php');

if(isset($_POST['save'])){
    $regj = new User();
    $regj->setName($_POST['emri']);
    $regj->setLastname($_POST['mbiemri']);
    $regj->setEmail($_POST['email']);
    $regj->setPassword($_POST['password']);
    $regj->setRole($_POST['role']);

    $regj->insertData();

}
?>

<!DOCTYPE html>
<htm>
    <head>
    <link rel="stylesheet" href="../../style/regjistro.css">
        <title>Formulari i Regjistrimit</title>
    </head>
    <body>
        <div id="formulari">
        <h3>Shto te dhenat ne Formularin e Regjistrimit</h3>
            <form action='' method="POST">
                
                <input type="text" class="inp" name="emri" placeholder="Add Firstname"/>
               
                <input type="text" class="inp" name="mbiemri" placeholder="Add Lastname"/>
               
                <input type="text" class="inp" name="email" placeholder="Add Email"/>
                
                <input type="password" class="inp" name="password" placeholder="Add Password"/>
                
                <input type="text" class="inp" name="role" placeholder="Assign a Role"/>
                <button name='save'>SAVE</button>
            </form>
        </div>
    </body>
</htm>