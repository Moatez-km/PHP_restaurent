<?php
 require_once "controlleur-produit.php";
                session_start();
                if(empty($_SESSION["id"])){
                    header('Location: login.php');
                }
                if($_SESSION["type"]!= "client"){
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
    width: 50%;
    
    
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
  .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 32%;
  background-color:#404040;
  color: white;
  float:left;
  margin:9px;
}

.card:hover {
  box-shadow: 2px 8px 16px 2px rgba(0,0,0,0.2);
}

.container1 {
  padding: 2px 16px;
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
<li><a href="client_success.php">Menu</a></li>
<li><a href="index.php">About</a></li>

<li><a href="contact.php">Contact</a></li>
<li><a href='deconnexion.php'><h1 class="symbol1"><i class="fa fa-sign-out" aria-hidden="true"></i><h1></a></li>

</ul>
</nav>

</header>
<div >
<?php
            echo '<h1 style="color:white" >'."bienvenue  ".$_SESSION["username"].'</h1>';
            ?>
            
            <!-- tester si l'utilisateur est connecté -->
            </div>    
            
<?php foreach ($produits as $p) : ?>

    <div class="card">
    <center>
    <img src="./image/<?= $p->image ?>" alt="Avatar" style="width:50%" >
    
   
    <div class="container1">
    <p><?= $p->nom ?></p>
    <br>
    <p><?= $p->prix ?> DT</p>
    
    <button class="sub">
    <a href="commande.php?action=edit&id=<?= $p->id ?>">Commander</a>
   
    </button>
    </div>
    </center>
    </div>
    <br>
    <br>
   
    <?php endforeach; ?>            
           
    </body>
</html>