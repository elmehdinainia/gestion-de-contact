<?php
session_start();
include_once('dbConnect.php');


class contact{
        public $id;
        public $name;
        public $email;
        public $phone;
        public $address;
      
        function add_con($name , $email , $phone , $address){
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
            $this->address = $address;



               $insert =connect()->prepare("INSERT INTO contact(iduser, Name, email, phone, adresse)VALUES (?,?,?,?,?)"); 
               $insert ->execute(array($_SESSION['id_user'],$this->name, $this->email, $this->phone,$this->address));
               header('Location: listabl.php');

               
               
          
        }
        function select(){
            $id = $_SESSION['id_user'];
            $insert =connect()->prepare("SELECT * FROM contact WHERE iduser=?"); 
            $insert -> bindParam(1, $id, PDO::PARAM_INT );
            $insert -> execute();
            $stmt = $insert ->fetchAll(PDO::FETCH_ASSOC);
         return $stmt;
        }

        public function delit($id){
                        $dell = connect()->prepare("DELETE FROM `contact` WHERE id=?");
                        $dell -> bindParam(1, $id, PDO::PARAM_INT );
                        $dell -> execute();
                        header('Location: listabl.php');

        }

        
        
        public function affichagepost($id){
                $sql= "SELECT * FROM contact WHERE id=?";   
                $stmt= connect()->prepare($sql); 
                $stmt -> bindParam(1, $id, PDO::PARAM_INT);
                $stmt->execute();  
                $results =$stmt->fetchAll(); 
                return $results;                                                                          
        }

        
        public function editpost($Name,$email,$phone,$address,$id){
                echo $Name;
                echo $email;
                echo $phone;
                echo $address;
                echo $id;
                $sql= "UPDATE contact SET Name='$Name', email='$email' ,phone='$phone',adresse='$address' WHERE id = $id ";   
                $stmt = connect()->prepare($sql); 
                $stmt->execute();
                header('Location: listabl.php');
                

        

        }
        
        
}

$a = new contact();
?>