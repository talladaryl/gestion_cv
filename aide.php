

<?php
if(!isset($_SESSION)) { 
  session_start(); 
} 
require_once'cnp.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&amp;family=Vibur&amp;display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">   <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><link href="https://fonts.googleapis.com/css2?family=Pacifico&amp;family=Vibur&amp;display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.O">  
       </head>

       <style type="text/css">
         

    



 @keyframes neon {
       from {
             text-shadow: 0 0 6px rgba(202, 228, 225, 0.92),
                      0 0 30px rgba(202, 228, 22, 0.234), 
                      0 0 12px rgba(30, 132, 242, 0.52), 
                      0 0 21px rgba(30, 132, 242, 0.92), 
                      0 0 34px rgba(30, 132, 242, 0.78), 
                      0 0 54px rgba(30, 132, 242, 0.92);
      }
       to {
             text-shadow: 0 0 6px rgba(202, 228, 225, 0.98),
                      0 0 30px rgba(202, 228, 225, 0.42), 
                      0 0 12px rgba(30, 132, 242, 0.58),
                      0 0 22px rgba(30, 132, 242, 0.84), 
                      0 0 38px rgba(30, 132, 242, 0.88), 
                      0 0 60px rgba(30, 132, 242, 1);
      }
}

.accordionMenu{
    width: 500px;
    margin: 0 auto;
    float: center;
}
.accordionMenu input[type=radio]{
    display: none;
}
.accordionMenu label{
    display: block;
    height: 50px;
    line-height: 47px;
    padding: 0 25px 0 10px;
    background: #2c97de;
    font-size: 20px;
    font-weight: bold;
    color: #fff;
    position: relative;
    cursor: pointer;
    border-bottom: 1px solid #e6e6e6;
}
.accordionMenu label::after{
    display: block;
    content: "";
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 5px 0 5px 10px;
    border-color: transparent transparent transparent #ffffff;
    position: absolute;
    right: 10px;
    top: 20px;
    z-index: 10;
    transition: all 0.3s ease-in-out;
}
.accordionMenu .content{
    max-height: 0;
    height: 0;
    overflow: hidden;
    transition: all 2s ease-in-out;
}
.accordionMenu .content .inner{
    font-size: 1.2rem;
    color: #2c97de;
    line-height: 1.5;
    background: white;
    padding: 20px 10px;
}
.accordionMenu input[type=radio]:checked + label:after{
    
    transform: rotate(90deg);
}
  
.accordionMenu input[type=radio]:checked + label + .content{
    max-height: 2000px;
    height: auto;
}


      </style>
<body>

 <?php 
require_once'header.php';

?>

<div class="accordionMenu">
        
        <input type="radio" name="trg1" id="acc1" checked="checked">
        <label for="acc1">Creation d'un compte &#128585;</label>
        <div class="content">
            <div class="inner">
                Pour créer un compte dans <b style="color: red;">le circuit </b> bien vouloir Cliquer  sur Signin en suit sur Sign UP remplir les champs et bienvenue dans <b style="color: red;">le circuit &#128525;</b>    et pour la connection Cliquer sur log in
            </div>
        </div>
        
        <input type="radio" name="trg1" id="acc2">
        <label for="acc2">Publication(s) &#128565;</label>
        <div class="content">
            <div class="inner">
                Pour pouvoir publier dans le circuit il vaut avoir un compte car cella garantira la fiabilité &#128562; de votre publication ainsi pour publier rien très fatoche  cliquer sur publier ensuite remplissez le formulaire et cliquer sur publier ainsi si vous diéserez insérer plus d’image cliquer sur plus d’image.
            </div>
        </div>
       
        <input type="radio" name="trg1" id="acc3">
        <label for="acc3">Gestion de compte &#128588;</label>
        <div class="content">
            <div class="inner">
              Le circuit met à votre disposition un espace membres vous pouvez gérer vos publications et dans les votre clientèle et qui s’est dans le futur plus que sa
            </div>
        </div>
        
        <input type="radio" name="trg1" id="acc4">
        <label for="acc4">Sécurité && Garantie</label>
        <div class="content">
            <div class="inner">
                Bien que la sécurité sois au maximum nous vous conseillons vivement de n’effectuer aucune transaction en espèce virtuellement car nous ne garantissons pas l’état des produit et la disponibilité des produit publier ainsi chers membres du circuit nous protégeons vos données vous aidez-nous et ne vous faite pas arnaquer  car si cella arrivais l’équipe de LA MEUTE se décline de toute responsabilité dans l’escroquerie alors ne payer que pour ce que vous avez vue et apprécier.
            </div>
        </div>
        
        <input type="radio" name="trg1" id="acc5">
        <label for="acc5">BUT DU CIRCUIT</label>
        <div class="content">
            <div class="inner">
               -Notre but est de créer la plus grande communauté de libre échange qui existe <br>
-  de permettre a plus d’un de se lancée dans le E-commerce<br>
-créer une zone de bazar ou l’on peut tous trouver
.
            </div>
        </div>
        
        <input type="radio" name="trg1" id="acc6">
        <label for="acc6">Signaler un problème</label>
        <div class="content">
            <div class="inner">
               <form  method="post">
                 
                   <textarea  name="pb"></textarea>
                   <input type="submit" name="btn10" value="Soumetre">
               </form>
            </div>
        </div>
    </div>

 <?php 
require_once'footer1.php';

?>
