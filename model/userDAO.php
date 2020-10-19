<?php
//require_once 'user.php';
class UserDao{
    private $pdo;

    public function __construct(){
        include 'connection.php';
        $this->pdo=$pdo;
    }

    public function login($user){
        $query = "SELECT * FROM users WHERE Email=? AND Pass=?";
        $sentencia=$this->pdo->prepare($query);

        $email=$user->getEmail();
        $psswd=$user->getPasswd();
        // El bindParam sirve para asignar los interrogantes de la consulta
        $sentencia->bindParam(1,$email);
        $sentencia->bindParam(2,$psswd);
        $sentencia->execute();

        $result=$sentencia->fetch(PDO::FETCH_ASSOC);
        $numRow=$sentencia->rowCount();

        if(!empty($numRow) && $numRow==1){
            $user->setName($result['Name']);
            $user->setId_user($result['Id']);
            session_start();
            $_SESSION['user']=$user; // Pasamos el objeto user
            return true;
        }else {
            return false;
        }
    }
}

?>