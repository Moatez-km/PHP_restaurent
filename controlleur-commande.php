<?php
require_once "model-commande.php";
$action = isset($_GET['action']) ? $_GET['action'] :'';
$commande = (object)['id_cmd' => -1 ,'id'=>'','nom'=>'','prenom'=>'','email' => '','addresse' => '','classe'=>''];
$form_action ='add';
switch($action){
    case 'add' :
        $id =$_GET['id'];
        $nom =$_GET['nom'];
        $prenom =$_GET['prenom'];
        $email =$_GET['email'];
        $addresse =$_GET['addresse'];
        $classe =$_GET['classe'];
        
        ajouterCommande($id,$nom,$prenom,$email,$addresse,$classe);
    break;

    
   
    
}
 $commandes= getAllCommande();













?>