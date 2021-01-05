

<?php
if(isset($_POST['username']) && isset($_POST['password']))
{
    $username =  $_POST['username'];
    $password = $_POST['password'];
    $type = $_POST['type'];
    
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'food';
    $db_host     = 'localhost';
    $dbb = new PDO('mysql:host='.$db_host.';dbname='.$db_name ,$db_username,$db_password); 
    $dbb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    if($username !== "" && $password !== "" && $type !== "")
    {
        $statement=$dbb->prepare("INSERT INTO users (username,password,type) VALUES(:username, :password, :type)");
        $statement->execute(['username'=> $username,'password'=> $password,'type'=> $type]);
    }else{
        echo " le chmp vide";
    }





}










/*
$mysqli = new mysqli('localhost','root','','food') or die(mysqli_error($mysqli));

if (isset($_POST['ajouter'])){
    $username= $_POST['username'];
    $password= $_POST['password'];
    $type= $_POST['type'];



    $mysqli->query("INSERT INTO users (username, password, type) VALUES('$username','$password','$type')") or die($mysqli->error);



}*/
?>




















