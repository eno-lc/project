<?php

require_once('../database/databaseConnection.php"');
class User extends dbConnect{
    private $id;
    private $emri;
    private $mbiemri;
    private $email;
    private $roli;
    private $password;
    private $dbConn;

    function __construct($id='',$emri='',$mbiemri='',$email='',$roli='',$password=''){
        $this->id = $id;
        $this->emri = $emri;
        $this->mbiemri = $mbiemri;
        $this->email = $email;
        $this->roli = $roli;
        $this->password = $password;

        $this->dbConn=$this->connectDB();
    }

    public function getId(){
        return $this->id;
    }
    public function setID($id){
        $this->id = $id;
    }

    public function getName(){
        return $this->emri;
    }

    public function setName($emri){
        $this->emri = $emri;
    }

    public function getLastname(){
        return $this->mbiemri;
    }

    public function setLastname($mbiemri){ 
        $this->mbiemri = $mbiemri;
    }

    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($email){ 
        $this->email = $email;

    }
    public function getRole(){
        return $this->roli;
    }

    public function setRole($roli){ 
        $this->roli = $roli;
    }

    function getPassword(){
        return $this->password;
    }
    function setPassword($password){
        $this->password = $password;
    }


    public function insertData(){ 
       $sql = "INSERT INTO user (emri,mbiemri,email,password) VALUES (:emri,:mbiemri,:email,:password)";
       $stm = $this->dbConn->prepare($sql);
       $stm->bindParam(':emri', $this->emri);
       $stm->bindParam(':mbiemri', $this->mbiemri);
       $stm->bindParam(':email', $this->email);
       $stm->bindParam(':password', $this->password);


       $stm->execute();
       echo "<script>
                    alert('Data inserted successfully');
                    document.location='../views/display.php';
             </script>";
    }


    public function readData(){

        $sql = "SELECT * FROM user";
        $stm = $this->dbConn->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    
    }

    public function deleteData($id){ 
        $sql = "DELETE FROM user WHERE id=:id";

        $stm = $this->dbConn->prepare($sql);
        $stm->bindParam(':id',$id);
        $stm->execute();
        if($stm == true){
            echo "<script>
                    alert('Data deleted successfully');
                    document.location='../views/display.php';
             </script>";
        }else{
            return false;
        }
    }

    public function readById($id){
        $sql= "SELECT * FROM user where id=:id";

        $stm = $this->dbConn->prepare($sql);
        $stm->execute([':id'=>$this->id=$id]);
        $result = $stm->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function updateData(){ 
        $sql = "UPDATE User SET emri=?, mbiemri=?, email=? where id=?";
        $stm=$this->dbConn->prepare($sql);
        $stm->execute([$this->emri, $this->mbiemri,$this->email, $this->id]);
    }

}

?>