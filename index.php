<?php 
 /*require_once "controlleur-contact.php";
if(isset($_GET['email']) && isset($_GET['message']))
{
    $email =  $_GET['email'];
    $message = $_GET['message'];
    
    
    if($email !== "" && $message !== "")
    {
      header('Location: index.php?succées=1');
            
     
            
        }else{
            header('Location: index.php?erreur=2'); // utilisateur ou mot de passe vide
        }





    



 }
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-comptible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./fonts/font-awesome/css/font-awesome.css">
    
    <style>
    .blackdiv{
  background-color: #1e1e26;
}
.symbol1{
      color: white;
     
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
.tit{
    color: #0088a9;
    font-family: "Montserrat", sans-serif;
    }
    .padding-bottom-small{
  padding-bottom: 25px
}

.col-1{
      float:left;
      width: 33.33%;
      
      
  }
    body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("./image/back2.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: white;
  background-color: #0088a9;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #6495ED;
  color: white;
}
    
.sub1{
  width: 25%;
  
  
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
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 32%;
  background-color:#0F0F13;
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
.padding-small{
  padding-bottom: 25px
}
.lab{
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
  color:rgba(226,226,226);

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
  width: 50%;
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
.btn-secondairy{
  display: inline-block;
  font-size: 14px;
  font-weight: 600;
  padding: 0 12px;
  margin-top : 15px;
  color: #ffffff;
  letter-spacing: 2px;
  text-align: center;
  width: 160px;
  height: 46px;
  line-height: 45px;
  border-radius: 5px;
  background: transparent;
  cursor: pointer;
  border: 2px solid ;
  border-radius: 5px;
  border-width: 2px;
  border-image-source:linear-gradient(135deg, #00b09b, #0088a9); 
  border-image-slice: 1;   
  background-color: rgba(0,0,0,0.3)
 
}
.max-margin{
  margin-top:45%
}
.light {
  color: #fff
}
.center {
  text-align: center; 
}
.mid{
  position: relative;
  top:50%;
  bottom: 50%
}
.padding-large {
    padding: 10px
  }
  .show-on-hover{
  display: none;
}
.height{
  height: 375px
}
.hov-black:hover{
  background:rgba(0,0,0,0.7) 
}
.hov-black:hover .show-on-hover{
  display: block;
}
.no-margin{
  margin: 0px;
  padding: 0px;
  cursor: pointer;
}
.border{
  border: 1.5px solid #000;
}
.part1{
  background-image: url("./image/kfc.jpg");
  background-size: cover
}
.part2{
  background-image: url("./image/tacos.jpg");
  background-size: cover
}
.part3{
  background-image: url("./image/baguette.jpg");
  background-size: cover
}
.part4{
  background-image: url("./image/papajohns.jpg");
  background-size: cover
}
.col-3 {width: 25%;
float:left;}
.parallax {
  background-image: url("./image/back1.jpg");
  min-height: 500px; 
  max-height: 3000px;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
    </style>
    
   
   
    <title>Accueil</title>
    
</head>
<body class="blackdiv">
<header>

<nav>
     
<div class="logo">
 
    <h4 class="titre">TEK-UP FOOD </h4>
</div>
<ul class="nav_links">
<li><a href="#1">Home</a></li>
<li><a href="client_success.php">Menu</a></li>
<li><a href="#2">About</a></li>
<li><a href="#3">Contact</a></li>
<li><a href="login.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a><li>
</ul>
</nav>


<div id="1">
</header>
<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:60px">Delicious Recipes</h1><br>
    <p>inappropriate behavior is often laughed off as "boys will be boys",women face higher conduct standards especially in the workplace.
    That's why it's crucial that ,as women  </p>
    
    <button class="sub1" >Check our menu</button>
  </div>
</div>
<br>

<div class="card">

  <img src="./image/card3.jpg" alt="Avatar" style="width:100%">
  <div class="container1">
    <h1><b>Vins au prix de la SAQ</b></h1> 
    <p>une séélection de vins au prix de la SAQ accompagnée d'un menu divers</p> 
  </div>
</div>
<div class="card">
  <img src="./image/card2.jpg" alt="Avatar" style="width:100%">
  <div class="container1">
    <h1><b>Groupe</b></h1> 
    <p>Réservez pour vos réunions familiales ou d'affaire afin de profiter d'un repas inoubliable !</p> 
  </div>
</div>
<div class="card">
  <img src="./image/card1.jpg" alt="Avatar" style="width:100%">
  <div class="container1">
    <h1><b>Table d'hôte </b></h1> 
    <p>Venez goûter à nos tables d'hôte du midi ou du soir ansi qu'à notre fameux menu 5 services</p> 
  </div>
</div>
</div>

<div id="2">

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="parallax">
</div>
<p class="h2 center padding-small ">ABOUT US !</p>
<p class="h5 center padding-small"> Lorem, ipsum dolor sit amet, Doloremque quos ipsum, ipsa molestiae adipisci optio facere nihil distinctio tenetur.</p>

<div class="row">
        <div class="col-3 part1 height border no-margin">
            <div class="hov-black height">
                <div class="show-on-hover">
                    <div class="padding-large mid">
                        <div class="light center">
                            <div class="max-margin">
                                <a class="btn-secondairy"> LEARN MORE </a>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 part2 height border no-margin">
            <div class="hov-black height">
                <div class="show-on-hover">
                    <div class="padding-large mid">
                        <div class="light center">
                            <div class="max-margin">
                                <a class="btn-secondairy"> LEARN MORE </a>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 part3 height border no-margin">
            <div class="hov-black height">
                <div class="hov-black height">
                    <div class="show-on-hover">
                        <div class="padding-large mid">
                            <div class="light center">
                                <div class="max-margin">
                                    <a class="btn-secondairy"> LEARN MORE </a>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 part4 height border no-margin">
            <div class="hov-black height">
                <div class="show-on-hover">
                    <div class="padding-large mid">
                        <div class="light center">
                            <div class="max-margin">
                                <a class="btn-secondairy"> LEARN MORE </a>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div id="3">
<div class="parallax">
</div>
<p class="h2 center padding-small ">IT'S NEVER LATE TO CONTACT US !</p>
<p class="h5 center padding-small"> Lorem, ipsum dolor sit amet, Doloremque quos ipsum, ipsa molestiae adipisci optio facere nihil distinctio tenetur.</p>
<center>
<form method="get" action='#'>
<input type="hidden"  name="action" value="<?= $form_action ?>" >
<label for="fname"class="lab">Email :</label>
  <input type="email"  name="email"class="input1"><br>
  <textarea  name="message" rows="4" cols="50"class="input2" placeholder="Your message.."></textarea>
  <div class="row">
    <input type="submit" value="Envoyer" class="sub">
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

</div>
<br>
<br>
<br>
<br>
<br>
<br>

<br>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51051.21991895879!2d10.155111391330651!3d36.89749472142614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd34cc25bd5aff%3A0x495e852ae57f3ff5!2sTEK-UP%20University!5e0!3m2!1sfr!2stn!4v1591055373278!5m2!1sfr!2stn" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

 
   
  <br><br>
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
</body> 
</html>