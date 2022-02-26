<?php
require_once('../database/databaseConnection.php"');
class Book extends dbConnect{
    private $id;
    private $emri;
    private $cmimi;

    private $image;
    private $dbConn;

    function __construct($id='',$emri='',$cmimi='', $image=''){
        $this->id = $id;
        $this->emri = $emri;
        $this->cmimi = $cmimi;
        $this->image = $image;


        $this->dbConn=$this->connectDB();
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){ 
        $this->id = $id;
    }

    public function getName(){
        return $this->emri;
    }

    public function setName($emri){
        $this->emri = $emri;
    }

    public function getPrice(){
        return $this->mbiemri;
    }

    public function setPrice($cmimi){ 
        $this->cmimi = $cmimi;
    }

    public function getImage(){
        return $this->image;
    }

    public function setImage($image){ 
        $this->image = $image;
    }

   

    public function insertData(){ 
        $sql = "INSERT INTO books (emri,cmimi,images) VALUES (:emri,:cmimi,:images)";
        $stm = $this->dbConn->prepare($sql);
        $stm->bindParam(':emri', $this->emri);
        $stm->bindParam(':cmimi', $this->cmimi);
        $stm->bindParam(':images', $this->image);

        $stm->execute();
        echo "<script>
                     alert('Book inserted successfully');
                     document.location='../views/displayBooks.php';
              </script>";
     }
 
 
     public function readData(){
 
         $sql = "SELECT * FROM books";
         $stm = $this->dbConn->prepare($sql);
         $stm->execute();
         $result = $stm->fetchAll(PDO::FETCH_ASSOC);
         return $result;
     
     }
 
     public function deleteData($id){ 
         $sql = "DELETE FROM books WHERE id=:id";
 
         $stm = $this->dbConn->prepare($sql);
         $stm->bindParam(':id',$id);
         $stm->execute();
         if($stm == true){
             echo "<script>
                     alert('Book deleted successfully');
                     document.location='../views/displayBooks.php';
              </script>";
         }else{
             return false;
         }
     }
 
     public function readById($id){
         $sql= "SELECT * FROM books where id=:id";
 
         $stm = $this->dbConn->prepare($sql);
         $stm->execute([':id'=>$this->id=$id]);
         $result = $stm->fetch(PDO::FETCH_ASSOC);
         return $result;
     }
 
     public function updateData(){ 
         $sql = "UPDATE books SET emri=?, cmimi=? where id=?";
         $stm=$this->dbConn->prepare($sql);
         $stm->execute([$this->emri, $this->cmimi, $this->id]);
     }

}

    ?>