<?php
                require_once "controlleur.php";
                session_start();
                if(empty($_SESSION["id"])){
                    header('Location: login.php');
                }
               if($_SESSION["type"]!= "admin"){
                    header('Location: deconnexion.php');
               }
            ?>
<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <link rel="stylesheet" type="text/css" href="./fonts/font-awesome/css/font-awesome.css">
        <style>
     .blackdiv{
    background-color: #1e1e26;
  }
          .input1 {
    width: 17%;
    padding: 12px 20px;
    margin: 8px 5px;
    box-sizing: border-box;
    border: 2px solid #0088a9;
    border-radius: 4px;
    background-color: #1e1e26;
    color:rgba(226,226,226);
  }
  .lab{
    font-family: "Montserrat", sans-serif;
    font-weight: bold;
    color:rgba(226,226,226);
  
  }
  .sub{
    width: 10%;
    
    
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #0088a9;
    border-radius: 4px;
    background-color: #0088a9;
    color: rgba(226,226,226);
    font-weight: bold;
    font-family: "Montserrat", sans-serif;
  
  
  }
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  .tit{
    color: #0088a9;
    font-family: "Montserrat", sans-serif;
    text-align: "center";
    }
    table {
  border-collapse: collapse;
  border-spacing: 0;
  width:100%;
 
  border: 1px solid #ddd;
  background-color: black;
  color:white;
  overflow-x:none;
  
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #1e1e26;
  color:white;
}
.symbol1{
      color: white;
  }
  .tab{
    overflow-y:auto;
    height:400px;
    overflow-x:none;



  }
  
        </style>
    </head>
    <body class="blackdiv" >
    <header>

<nav>
     
<div class="logo">
 
    <h4 class="titre">TEK-UP FOOD </h4>
</div>
<ul class="nav_links">
<li><a href="index.php">Home</a></li>
<li><a href="">Menu</a></li>
<li><a href="index.php">About</a></li>
<li><a href="login_success.php">Dashboard</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href='deconnexion.php'><h1 class="symbol1"><i class="fa fa-sign-out" aria-hidden="true"></i><h1></a></li>

</ul>
</nav>

</header>
        <div >
            
            
            <?php
            echo '<h1 style="color:white" >'."bienvenue ".$_SESSION["username"].'</h1>';
            ?>
            
            <!-- tester si l'utilisateur est connecté -->
            </div>
<h1 class="tit">Gestion des Clients</h1>
            <form method="get" action="#">
            <input type="hidden"  name="action" value="<?= $form_action ?>" >
            <input type="hidden"  name="id" value="<?= $client->id ?>" >
  <input type="text"  name="username"class="input1" placeholder="Login" value="<?= $client->username ?>">
 
  <input type="text" name="password"class="input1"placeholder="Password" value="<?= $client->password ?>">

  <select name="type"class="input1" value="<?= $client->type ?>">
  <option>admin</option>
  <option>partenaire</option>
  <option>client</option>



  </select> 

  
  
   
    <button class="sub">
    <?php if($client->id ==-1) :?>
    Ajouter
    <?php else :?>
    Modifier
    <?php endif;?>
    
    
    
    </button>
</form><br><br>
<div   class="tab">
<table>

<tr>

<th>Id</th>
<th>Name</th> 
<th>Password</th>  
<th>type</th> 

<?php foreach ($clients as $c) : ?>
<tr>

    <td><?= $c->id ?></td>
    <td><?= $c->username ?></td>
    <td><?= $c->password ?></td>
    <td><?= $c->type ?></td>
    <td><a href="?action=del&id=<?= $c->id ?>"><h1 class="symbol1" ><i class="fa fa-trash" aria-hidden="true"></i><h1></a></td>
    <td><a href="?action=edit&id=<?= $c->id ?>"><h1 class="symbol1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></h1></a></td>
    </tr>

<?php endforeach; ?>
</table>
</div>

    </body>
</html>