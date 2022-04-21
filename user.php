<?php
include_once('dbConnect.php');
class User{
    public $conn;
    function __construct($conn){
       $this->conn = $conn;
    }
    public function signup(){
        // var_dump('ksdjkwjdiwjiwdnhwihndiuwhdiuwdw');
        if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password2']));
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        $date = date('Y-m-d');
        $time = date('h:i:sa');
        $siup_log = $date." ".$time;

        $query= $this->conn ->prepare("INSERT INTO `user`(`username`, `password`, `last_signup`) VALUES (?,?,?)"); 
        $query->bindParam(1,$username , PDO::PARAM_STR);
        $query->bindParam(2,$password , PDO::PARAM_STR);
        $query->bindParam(3,$siup_log , PDO::PARAM_STR);
        if($query->execute()){
            $row = $query->fetch(PDO::FETCH_ASSOC);
            $_SESSION['id_user'] = $row['iduser'];
            $_SESSION['username'] = $username;
            $_SESSION['last_signup'] = $row['last_signup'];



            header('location:contact.php');
        }


 }
 public function signin($username,$password){
    $query= $this->conn ->prepare("SELECT * FROM `user` WHERE `username` = ? AND `password` = ?"); 
    $query->bindParam(1,$username , PDO::PARAM_STR);
    $query->bindParam(2,$password , PDO::PARAM_STR);
    $query->execute();
    if($query->execute()){
        $row = $query->fetch();
        // session_start();
        $_SESSION['id_user'] = $row['iduser'];
        $_SESSION['username'] = $row['username'];

        echo $row['iduser'];
        $date = date('Y-m-d');
        $time = date('h:i:sa');
        $sign_log = $date." ".$time;
        $_SESSION['signin'] = $sign_log;
        header('location:contact.php');
    }
    }

    public function get_user_data($username){
        $sql = "SELECT * FROM user WHERE username=?";
        $stmt = $this->conn ->prepare($sql);
        $stmt -> bindParam(1,$username, PDO::PARAM_STR);
        $stmt ->execute();
        $result = $stmt ->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

}