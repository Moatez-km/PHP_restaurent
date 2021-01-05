<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    $username =  $_POST['username'];
    $password = $_POST['password'];
    
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'food';
    $db_host     = 'localhost';
   $dbb = new PDO('mysql:host='.$db_host.';dbname='.$db_name ,$db_username,$db_password); 
    $dbb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if($username !== "" && $password !== "")
    {$statement=$dbb->prepare("select * from users where username = :username and password = :password");
        $statement->bindParam(":username",$username);
        $statement->bindParam(":password",$password);
        $statement->execute();
        if($statement->rowCount()===1){
            echo "correct";
            while($row=$statement->fetch()){
                $_SESSION["id"]=$row["id"];
                $_SESSION["username"]=$row["username"];
                $_SESSION["type"]=$row["type"];
                if($_SESSION["type"]== "admin"){
                    header('Location: login_success.php');
                }elseif($_SESSION["type"]== "partenaire"){
                    header('Location: part_success.php');
                }else{
                    header('Location: client_success.php');
                }
            }
            
        }else{
            header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
        }





    }else{
        header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
    }



}




?>