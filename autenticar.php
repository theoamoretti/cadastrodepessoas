<?php
session_start();
print_r($_POST);
include "dataBase.php";
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $senha=($_POST['senha']);

        $sql="SELECT id, nome, email
        FROM usuario
        WHERE 
            email='$email' AND senha='$senha'";
        
        $resultado=$con->query($sql);

        if($resultado){
            var_dump($resultado);
            if($resultado->num_rows>0){
                $user=$resultado->fetch_array();

                $_SESSION['user']=$user;

                $_SESSION['msg']="Sucesso";
            }
        }
        else{
            $_SESSION['msg']="Falha";
        }
    }
    //var_dump($_SESSION);
    header("location:index.php");
?>