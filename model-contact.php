<?php

$pdo = new PDO("mysql:host=localhost;dbname=food","root","");

function ajouterContact($email,$message)
{
    global $pdo;
    $sql ="INSERT INTO contact VALUES(null,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindvalue(1,$email,PDO::PARAM_STR);
    $stmt->bindvalue(2,$message,PDO::PARAM_STR);
   
    return $stmt->execute();


}
function supprimerContact($id)
{
    global $pdo;
    $sql ="DELETE FROM contact WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindvalue(1,$id,PDO::PARAM_INT);
    
    return $stmt->execute();


}

function getContact($id)
{
    global $pdo;
    $sql ="SELECT * FROM contact Where id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindvalue(1,$id,PDO::PARAM_INT);
    
     $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ);


}
function getAllContact()
{
    global $pdo;
    $sql ="SELECT * FROM contact ";
    $stmt = $pdo->prepare($sql);
    
    
     $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);


}



?> 