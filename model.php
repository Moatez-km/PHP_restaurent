<?php

$pdo = new PDO("mysql:host=localhost;dbname=food","root","");

function ajouterClient($username,$password,$type)
{
    global $pdo;
    $sql ="INSERT INTO users VALUES(null,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindvalue(1,$username,PDO::PARAM_STR);
    $stmt->bindvalue(2,$password,PDO::PARAM_STR);
    $stmt->bindvalue(3,$type,PDO::PARAM_STR);
    return $stmt->execute();


}
function supprimerClient($id)
{
    global $pdo;
    $sql ="DELETE FROM users WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindvalue(1,$id,PDO::PARAM_INT);
    
    return $stmt->execute();


}
function modifierClient($id,$username,$password,$type)
{
    global $pdo;
    $sql ="UPDATE users SET username=:username,password=:password,type=:type WHERE id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindvalue(":id",$id,PDO::PARAM_INT);
    $stmt->bindvalue(":username",$username,PDO::PARAM_STR);
    $stmt->bindvalue(":password",$password,PDO::PARAM_STR);
    $stmt->bindvalue(":type",$type,PDO::PARAM_STR);
    return $stmt->execute();


}
function getClient($id)
{
    global $pdo;
    $sql ="SELECT * FROM users Where id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindvalue(1,$id,PDO::PARAM_INT);
    
     $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ);


}
function getAllClient()
{
    global $pdo;
    $sql ="SELECT * FROM users ";
    $stmt = $pdo->prepare($sql);
    
    
     $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);


}



?> 