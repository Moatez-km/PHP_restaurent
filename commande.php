<?php  
require_once "controlleur-commande.php";
session_start();
if(empty($_SESSION["id"])){
    header('Location: login.php');
}
if($_SESSION["type"]!= "client"){
    header('Location: deconnexion.php');
}


if(isset($_GET['id']) && isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['email']) && isset($_GET['addresse']) && isset($_GET['classe']))
{
    $id =  $_GET['id'];
    $nom =  $_GET['nom'];
    $prenom =  $_GET['prenom'];
    $email =  $_GET['email'];
    $addresse = $_GET['addresse'];
    $classe = $_GET['classe'];
    
    
    if($id !== "" && $nom !== "" && $prenom !== ""&& $email !== ""&& $addresse !== ""&& $classe !== "")
    {
      header('Location: commande.php?succées=1');
            
     
            
        }else{
            header('Location: commande.php?erreur=2'); // utilisateur ou mot de passe vide
        }





    



 }

 ?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-comptible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    
    
   
   
    <title>Login</title>
    <style> 
.titre1 {
  width: 100px;
  height: 100px;
  font-family: "Montserrat", sans-serif;
  font-size: 50px;
  font-weight: bold;
  color: #66CDAA;
 
  position: relative;
  animation: mymove 3s infinite;
}

@keyframes mymove {
  0%   {top: 0px; left: 0px;}
  25%  {top: 0px; left: 100px; }
  
  75%  {top: 0px; left: 0px; }
  
}
        .secondary-color {
  color : #96c93d
}
.gradient-text{
  background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
}
.blackdiv{
  background-color: #1e1e26;
}
.symbol1{
      color: white;
  }
  .symbol2{
      color: white;
      font-size:80px;
  }
  .symbol2:hover{
      color: #69bff8;
      transition: all ease 0.5s;
  }
  .links-facebook:hover{
  cursor: pointer;
  color : #4267b2
}
.links-instagram:hover{
  cursor: pointer;
  color :   #C13584
}
.links-youtube:hover{
  cursor: pointer;
  color :  #ff0000
}
.links-twiter:hover{
  cursor: pointer;
  color :  #0000FF
}
.links-linkedin:hover{
  cursor: pointer;
  color :  #008B8B
}
.fouter {

text-decoration: none;
color:rgb(247, 243, 243) ;
font-weight: bold;
font-family: "Montserrat", sans-serif;


}

.col-1{
      float:left;
      width: 33.33%;
      
      
  }
  .col-3{
      float:left;
      width: 33.33%;
      
      
  }
  .lab{
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
  color:rgba(226,226,226);
 
  text-justify: auto;
  

}
.input1 {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 5px;
  box-sizing: border-box;
  border: 2px solid #0088a9;
  border-radius: 4px;
  background-color: #1e1e26;
  color:rgba(226,226,226);


}
.input2 {
  width: 80%;
  padding: 12px 20px;
  margin: 10px 10px;
  box-sizing: border-box;
  border: 2px solid #0088a9;
  border-radius: 4px;
  background-color: #1e1e26;
  color:rgba(226,226,226);
}
.sub{
  width: 20%;
  
  
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
.box1{
    width: 700px;
    height: 610px;
    background:  #A9A9A9 ;
    border-radius: 10px;
    box-shadow: 2px 10px 12px rgba(0,0,0,0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    justify-content: space-between;
    box-sizing: border-box;
    margin: 20px 10px;
}
.tit{
    color: #0088a9;
    font-family: "Montserrat", sans-serif;
    }
    .padding-bottom-small{
  padding-bottom: 25px
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 50%;
  
  background-color:#0F0F13;
  color: white;
  
  margin:9px;
}

.card:hover {
  box-shadow: 2px 8px 16px 2px rgba(0,0,0,0.2);
}

.container1 {
  padding: 2px 16px;
}
.h2{
  font-size: 40px
  
} 
.center {
  text-align: center;
  color: rgba(226,226,226); 
}
.h5{
  font-size :20px
}
.h2:hover{
    color:  #0088a9; 

}

</style>
</head>
<body class="blackdiv">
<header>

<nav>
     
<div class="logo">
 
    <h4 class="titre">TEK-UP FOOD </h4>
</div>
<ul class="nav_links">
<li><a href="index.php">Home</a></li>
<li><a href="">Menu</a></li>
<li><a href="index.php">About</a></li>
<li><a href="index.php">Contact</a></li>
<li><a href='deconnexion.php'><h1 class="symbol1"><i class="fa fa-sign-out" aria-hidden="true"></i><h1></a></li>



</ul>
</nav>

</header>
<br><br><br>
<center>

<div class="card">
<p class="h2 center padding-small ">it's time to place your order!</p><br><br>
<form method="get" action="#">

            <input type="hidden"  name="action" value="<?= $form_action ?>" >
            <input type="hidden"  name="id_cmd" value="<?= $commande->id_cmd ?>" >
<?php 

echo ' <label for="fname"class="lab">ID_prdt :</label><input type="text" name="id" class="input1" value="'.$_GET['id'].'">';

?><br>
 <label class="lab">Nom:</label><input type="text" name="nom" class="input1" ><br>
 <label class="lab">Prenom :</label><input type="text" name="prenom" class="input1" ><br>
 <label class="lab">Email :</label><input type="email" name="email" class="input1" ><br>
 <label class="lab">Adresse:</label><input type="text" name="addresse" class="input1" ><br>
 <label class="lab">Classe:</label><select name="classe"class="input1" ><br>
  <option>TIC-A</option>
  <option>TIC-B</option>
  <option>TIC-C</option>
  <option>TIC-D</option>
  <option>TIC-F</option>
  <option>TIC-G</option>
  <option>TIC-H</option>
</select> <br>
<div class="container1">
<button class="sub">
Acheter
</button>
<?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:#A52A2A'>champ invalide</p>";
                }
                if(isset($_GET['succées'])){
                  $suc = $_GET['succées'];
                  if($suc==1 )
                  echo "<p style='color:green'>envoyer avec succées</p>";
                }
                ?>
</div>
  </form>
</center>
<br><br><br><br><br><br>
<div class="col-1 padding center line ">
<h2 class="tit padding-bottom-small">Navigations</h2>
<div class="fouter">
 <b><a href="index.php" class="fouter">Home</a><br>
<a href=""class="fouter">Menu</a><br>
<a href="index.php"class="fouter">About</a><br>
<a href="index.php"class="fouter">Contact</a></b><br>
</div>
 </div>
 <div class="col-1 padding center line ">
<h2 class="tit padding-bottom-small">INFO</h2>
<div class="tit"><h3><i class="fa fa-map-marker" aria-hidden="true"></i>  Address :</h3></div>
 <div class="fouter"><b>Rue Errihane, Ariana</b></div>
 <div class="tit"><h3><i class="fa fa-phone" aria-hidden="true"></i>  Phone : </h3></div>
 <div class="fouter"><b>+216 25 953 685</b></div><br>
 
 </div>
 <div class="col-1 padding center line ">
 <h2 class="tit padding-bottom-small">TEK-UP FOOD</h2>
 <h1 class="symbol1"><a class="links-facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
 <a class="links-youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
 <a class="links-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
 <a class="links-twiter"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
 <a class="links-linkedin"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
</h1>
<div class="tit"><h3><i class="fa fa-clock-o" aria-hidden="true"></i> Work Time : </h3></div>
 <div class="fouter"><b>09h -- 21h</b></div><br>
 
 </div>

    <link rel="stylesheet" type="text/css" href="./fonts/font-awesome/css/font-awesome.css">
   
    <script type="text/javascript" src="./Js/script.js"></script>
</body> 
</html>
</body>
</html>