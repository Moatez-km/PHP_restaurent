<?php
require_once "model.php";
$action = isset($_GET['action']) ? $_GET['action'] :'';
$client = (object)['id' => -1 ,'username' => '','password' => '','type' => ''];
$form_action ='add';
switch($action){
    case 'add' :
        $username =$_GET['username'];
        $password =$_GET['password'];
        $type=$_GET['type'];
        ajouterClient($username,$password,$type);
    break;

    case 'del' :
        $id =$_GET['id'];
        
        supprimerClient($id);
    break;
    case 'edit' :
        $id =$_GET['id'];
        
        $client = getClient($id);
        $form_action ='update';
    break;
    case 'update' :
        $id =$_GET['id'];
        $username =$_GET['username'];
        $password =$_GET['password'];
        $type=$_GET['type'];
        modifierClient($id,$username,$password,$type);
    break;
}
 $clients= getAllClient();













?>