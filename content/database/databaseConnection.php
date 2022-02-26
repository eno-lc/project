
<?php
    class dbConnect{
        private $conn =null;
        private $host = 'localhost';
        private $dbname = 'projekti';
        private $username = 'root';
        private $password = '';
    
         public function connectDB(){
    
            try {
                $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", 
                                        $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) . "<br/>";
                $this->conn->setAttribute(PDO::FETCH_BOUND, PDO::FETCH_BOTH);
            //   echo "test";
            } catch (PDOException $pdoe) {
                die("fail {$this->dbname} :" . $pdoe->getMessage());
            }
            return $this->conn;
         }
    }




    ?>
