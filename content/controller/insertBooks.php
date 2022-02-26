
<?php
require_once('../models/book.php');

if(isset($_POST['save'])){
    $libri = new Book();
    $libri->setName($_POST['emri']);
    $libri->setPrice($_POST['cmimi']);
    $libri->setImage($_POST['images']);

    $libri->insertData();

}
?>

<!DOCTYPE html>
<htm>
    <head>
    <link rel="stylesheet" href="../../style/regjistro.css">
        <title>Book panel</title>
    </head>
    <body>
        <div  style="height:330px;" id="formulari">
        <h3>Add new books</h3>
            <form action='' method="POST">
                <input type="text" class="inp" name="emri" placeholder="Add Name"/>
                <input type="text" class="inp" name="cmimi" placeholder="Add Price"/>
                <input type="text" class="inp" name="images" placeholder="Add Image"/>

                <button style="width: 150px;" name='save'>Add book</button>
            </form>
        </div>
    </body>
</htm>