<?php
require_once('../models/book.php');
$records = new Book();

if(isset($_GET['id'])){
    
$records->setId($_GET['id']);
$bookID = $records->getId();
$records->deleteData($bookID);

}


?>