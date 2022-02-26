<?php

include_once '../database/databaseConnection.php';


class auditLogs{ 

    private $connection;

    function __construct(){
        $conn = new dbConnect;
        $this->connection = $conn->connectDB();
    }

    function log($user, $log, $action){
        $conn = $this->connection;

        $date = date("d/m/Y h:i");
        $sql = "INSERT INTO logs (user,log,action,time) values (?,?,?,?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$user, $log, $action,$date]);
    }

    function getLogs(){ 
        $conn = $this->connection;

        $sql = "SELECT * FROM logs";
        $statement = $conn->query($sql);
        $logs = $statement->fetchAll();

        return $logs;
    }


}



?>