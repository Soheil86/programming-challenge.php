<?php 

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "to_do_list";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}















// <?php
// class Database {
//     private $host = 'localhost';
//     private $db_name = 'todo_list';
//     private $rootname = 'root';
//     private $password = '';
//     private $conn;

//     public function connect(){
//         $this->conn = null;

//         try{
//             $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name,
//             $this->username,$this->password);
//             $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//         }catch(PDOException $e) {
//                 echo 'Connection Error: ' . $e->getMessage();
//         }

//         return $this->conn;
//     }
// }