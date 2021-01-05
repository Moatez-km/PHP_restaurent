<?php

$pdo = new PDO("mysql:host=localhost;dbname=food","root","");

function ajouterProduit($nom,$image,$prix)
{
    global $pdo;
    $sql ="INSERT INTO produit VALUES(null,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindvalue(1,$nom,PDO::PARAM_STR);
    $stmt->bindvalue(2,$image,PDO::PARAM_STR);
    $stmt->bindvalue(3,$prix,PDO::PARAM_INT);
    return $stmt->execute();


}
function supprimerProduit($id)
{
    global $pdo;
    $sql ="DELETE FROM produit WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindvalue(1,$id,PDO::PARAM_INT);
    
    return $stmt->execute();


}
function modifierProduit($id,$nom,$image,$prix)
{
    global $pdo;
    $sql ="UPDATE produit SET nom=:nom,image=:image,prix=:prix WHERE id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindvalue(":id",$id,PDO::PARAM_INT);
    $stmt->bindvalue(":nom",$username,PDO::PARAM_STR);
    $stmt->bindvalue(":image",$password,PDO::PARAM_STR);
    $stmt->bindvalue(":prix",$type,PDO::PARAM_INT);
    return $stmt->execute();


}
function getProduit($id)
{
    global $pdo;
    $sql ="SELECT * FROM produit Where id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindvalue(1,$id,PDO::PARAM_INT);
    
     $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ);


}
function getAllProduit()
{
    global $pdo;
    $sql ="SELECT * FROM produit ";
    $stmt = $pdo->prepare($sql);
    
    
     $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);


}



?> 