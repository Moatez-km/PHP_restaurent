<?php
require_once "model-contact.php";
$action = isset($_GET['action']) ? $_GET['action'] :'';
$contact = (object)['id' => -1 ,'email' => '','message' => ''];
$form_action ='add';
switch($action){
    case 'add' :
        $email =$_GET['email'];
        $message =$_GET['message'];
        
        ajouterContact($email,$message);
    break;

    case 'del' :
        $id =$_GET['id'];
        
        supprimerContact($id);
    break;
    case 'edit' :
        $id =$_GET['id'];
        
        $client = getContact($id);
        $form_action ='update';
    break;
    case 'update' :
        $id =$_GET['id'];
        $email =$_GET['email'];
        $message =$_GET['message'];
        
        modifierContact($id,$email,$message);
    break;
}
 $contacts= getAllContact();













?>