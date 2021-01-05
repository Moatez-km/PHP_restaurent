<?php

$pdo = new PDO("mysql:host=localhost;dbname=food","root","");

function ajouterCommande($id,$nom,$prenom,$email,$addresse,$classe)
{
    global $pdo;
    $today =date("F j, Y, g:i a");
    $sql ="INSERT INTO commande VALUES(null,?,?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindvalue(1,$id,PDO::PARAM_INT);
    $stmt->bindvalue(2,$nom,PDO::PARAM_STR);
    $stmt->bindvalue(3,$prenom,PDO::PARAM_STR);
    $stmt->bindvalue(4,$email,PDO::PARAM_STR);
    $stmt->bindvalue(5,$addresse,PDO::PARAM_STR);
    $stmt->bindvalue(6,$classe,PDO::PARAM_STR);
    $stmt->bindvalue(7,$today,PDO::PARAM_STR);
   
    return $stmt->execute();


}
function supprimerCommande($id_cmd)
{
    global $pdo;
    $sql ="DELETE FROM commande WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindvalue(1,$id_cmd,PDO::PARAM_INT);
    
    return $stmt->execute();


}

function getCommande($id_cmd)
{
    global $pdo;
    $sql ="SELECT * FROM commande Where id_cmd = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindvalue(1,$id_cmd,PDO::PARAM_INT);
    
     $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ);


}
function getAllCommande()
{
    global $pdo;
    $sql ="SELECT * FROM commande ";
    $stmt = $pdo->prepare($sql);
    
    
     $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);


}



?> 