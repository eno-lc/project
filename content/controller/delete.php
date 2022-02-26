<?php
require_once('../models/user.php');
$records = new User();

if(isset($_GET['id'])){
    
$records->setId($_GET['id']);
$userID = $records->getId();
$records->deleteData($userID);

}


?>