<?php 
include_once '../database/databaseConnection.php';

class Repository{

    private $connection;

    function __construct(){
        $conn = new dbConnect;
        $this->connection = $conn->connectDB();
    }


    function insertUser($user){

        $conn = $this->connection;

        $id = $user->getId();
        $name = $user->getName();
        $surname = $user->getLastname();
        $email = $user->getEmail();
        $role = $user->getRole();
        $password = $user->getPassword();

        $sql = "INSERT INTO user (id,name,surname,email,role,password) VALUES (?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$name,$surname,$email,$role,$password]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";

    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateUser($id,$name,$surname,$email,$role,$password){
         $conn = $this->connection;

         $sql = "UPDATE user SET name=?, surname=?, email=?, role=?, password=? WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$name,$surname,$email,$role,$password,$id]);

         echo "<script>alert('update was successful'); </script>";
    } 

    function deleteUser($id){
        $conn = $this->connection;

        $sql = "DELETE FROM user WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 

   function getBookById($id){ 
    $conn = $this->connection;

    $sql = "SELECT * FROM book WHERE id='$id'";

    $statement = $conn->query($sql);
    
    $book = $statement->fetch();

        return $book;    
   }

   function getAllBooks(){
    $conn = $this->connection;

    $sql = "SELECT * FROM books";

    $statement = $conn->query($sql);
    $books = $statement->fetchAll();

    return $books;
}

function insertBook($book){

    $conn = $this->connection;

    $id = $book->getId();
    $emri = $book->getEmri();
    $cmimi = $book->getCmimi();
   

    $sql = "INSERT INTO books (id,name,cmimi) VALUES (?,?,?)";

    $statement = $conn->prepare($sql);

    $statement->execute([$id,$emri,$cmimi]);

    echo "<script> alert('Book has been inserted successfully!'); </script>";

}

function updateBook($id,$emri,$cmimi){
    $conn = $this->connection;

    $sql = "UPDATE book SET emri=?, cmimi=? WHERE id=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$emri,$cmimi,$id]);

    echo "<script>alert('update was successful'); </script>";
}

function deleteBookById($id){
    $conn = $this->connection;

    $sql = "DELETE FROM book WHERE id=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$id]);

    echo "<script>alert('delete was successful'); </script>";
} 



}
?>