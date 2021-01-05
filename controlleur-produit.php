<?php
require_once "model-produit.php";
$action = isset($_GET['action']) ? $_GET['action'] :'';
$produit = (object)['id' => -1 ,'nom' => '','image' => '','prix' => ''];
$form_action ='add';
switch($action){
    case 'add' :
        $nom =$_GET['nom'];
        $image=$_GET['image'];
        $prix=$_GET['prix'];
        ajouterProduit($nom,$image,$prix);
    break;

    case 'del' :
        $id =$_GET['id'];
        
        supprimerProduit($id);
    break;
    case 'edit' :
        $id =$_GET['id'];
        
        $client = getProduit($id);
        $form_action ='update';
    break;
    case 'update' :
        $id =$_GET['id'];
        $nom =$_GET['nom'];
        $image =$_GET['image'];
        $prix=$_GET['prix'];
        modifierProduit($id,$nom,$image,$prix);
    break;
}
 $produits= getAllProduit();













?>