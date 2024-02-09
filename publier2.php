
          
<?php
if(!isset($_SESSION)) { 
  session_start(); 
} 
require_once'cnp.php';
?>
<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&amp;family=Vibur&amp;display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><link href="https://fonts.googleapis.com/css2?family=Pacifico&amp;family=Vibur&amp;display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.O"> 
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




      :root {
  --size: 60vh;
  --borderS: calc(var(--size) / 10);
  --ballSize: calc(var(--size) / 5);
  --rightCorrected: calc(var(--size) / 13.33);
} 
* {
    box-sizing: border-box; 
}
  body {
    font-family: Arial, Helvetica, sans-serif;
    color: #333;
    font-size: 13px;
    margin: 0; 
  } /*  
  
  
  */
  input, textarea, select, button {
    font-family: arial;
    color: #333;
    font-size: 14px; }
  
  p, h1, h2, h3, h4, h5, h6, ul {
    margin: 0; 
}
  
  img {
    max-width: 80%;
 }
  
  ul {
    padding-left: 0;
    margin-bottom: 0;
 }
  
  a:hover {
    text-decoration: none;
 }
  
  :focus {
    outline: none; 
}
  
  .wrapper {
    min-height: 100vh;
    background-size: cover;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
   
    background-color: lightgreen;

} 
  .inner {
    padding: 10px;
    background: whitesmoke;
    max-width: 850px;
    margin: auto;
    display: flex;
    border-radius: 13px;
 }
    .inner .image-holder {
      width: 50%; 
}
    .inner form {
      width: 50%;
      padding-top: -36px;
      padding-left: 45px;
      padding-right: 45px; 
      border-radius: 123px;
}
    .inner h3 {
      text-transform: uppercase;
      font-size: 25px;
      text-align: center;
      margin-bottom: 28px;
 }
  
  .form-group {
    display: flex; 
}
    .form-group input {
      width: 50%; 
}
      .form-group input:first-child {
        margin-right: 25px; 
}
  
  .form-wrapper {
    position: relative; 
}
    .form-wrapper i {
      position: absolute;
      bottom: 9px;
      right: 0;
 }
  
  .form-control {
    border: 1px solid #333;
    border-top: none;
    border-right: none;
    border-left: none;
    display: block;
    width: 100%;
    height: 30px;
    padding: 0;
    margin-bottom: 25px; 
}
    .form-control::-webkit-input-placeholder {
      font-size: 14px;
      color: gray;
      font-family: arial;
 }
    
  select {
    font-size: 14px;
    font-family: arial;
    cursor: pointer;
    padding-left: 20px; 
    color: gray;
}
    select option[value=""][disabled] {
      display: none; 
}
  
  button {
    border: none;
    width: 164px;
    height: 51px;
    margin: auto;
    margin-top: 40px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    background: #333;
    font-size: 15px;
    color: #fff;
  }
  button:hover{
    background: orange;
  }
  
  @media (max-width: 767px) {
    .inner {
      display: block;
 }
      .inner .image-holder {
        width: 100%; 
}
      .inner form {
        width: 100%;
        padding: 40px 0 30px; 
}
  
    button {
      margin-top: 60px; 
} 
a:hover{border-color: cyan;
  border:2px;

}
    </style> 
       </head>
<body>
   <?php 
require_once'header2.php';

?>



<!--  -->

<center>
  






<style type="text/css">
  

</style>

<div class="wrapper" >
<div class="inner">
<div class="image-holder" ><a href="index.php" title="retoure" alt="retour">
  
<?php 

               

              //       if () {
              //          $nome = $_SESSION['mailto'];

              //           $tery = $db->query("SELECT mailto FROM `user` WHERE nom ='$nome' " );
              // while($donnees = $tery->fetch()){

              //   $noml=$donnees['mailto'] ; 

$po =$_SESSION['mailto'];
                $q =  "SELECT `noma`, `mailto`, `cheminuser`, `tel`, `sex`, `passa` FROM `user` WHERE mailto='$po'";
              $r = $db -> query($q) ;
              while ($c = $r -> fetch())
              {
              ?>
<img src="<?php  echo $c['cheminuser']; ?>" alt="image" height="610" width="623"><?php    }  ?></a>
</div>
<form action="plier.php" method="post" enctype="multipart/form-data">

<h3 style="text-decoration: underline green;">PUBLIER VOTRE ANNONCE</h3>

<center> <h2 style="background-color: red;border-radius: 123px;">Lieu + Gatégorie + type d'annonce</h2></center><br><br>

<div class="form-group">
 <select name="typeanon"style="width: 53%;height: 19px;"><option>TYPE D'ANNONCE</option><option>Offre ( vous proposez )</option> <option>Demande ( vous recherchez )</option></select>
<select name="gtegorie" style="width: 53%;height: 19px;">
  <option>Gatégorie</option>
     <option data-icon='icon16 electronics'>Électroniques - Multimédia </option><option data-icon='icon16 houses'  >Immobilier Location - Vente </option><option data-icon='icon16 household'  >Électroménager Maison Déco </option><option data-icon='icon16 cars'   >Véhicules - Motos - Auto - Camions </option><option data-icon='icon16 fashion'   >Mode - Accessoires de mode </option><option data-icon='icon16 beauty_health'  >Beauté, Santé & Bien-être </option><option data-icon='icon16 jobs'   >Offres Emploi, Travail - Recrutement </option><option data-icon='icon16 courses'  >Formations - Cours - Éducation </option><option data-icon='icon16 services' >Entreprises - Services Professionnels </option><option data-icon='icon16 supermarket'   value="13">Supermarché </option><option data-icon='icon16 industry'   >Quincaillerie - Industrie </option><option data-icon='icon16 leisure'  >Loisirs - Communauté - Sports </option><option data-icon='icon16 afritude'  >Afritude </option><option data-icon='icon16 divers'   >Divers </option><option data-icon='icon16 jobs_search'   value="10">CVthèque - Chercheurs Emploi </option> 
</select>

</div>
<div class="form-wrapper">

<input type="text" placeholder="ville**" class="form-control" name="ville" required="">
</div>
<h2 style="background-color: red; border-radius: 123px;">Détail de l'annonce</h2>
<div class="form-wrapper">
<input type="text" placeholder="titre de l'annonce" class="form-control" name="ttreanon"  required="">
<p>description***</p>
<textarea name="descrip" placeholder="description de l'annonce" style="width: 89%;" value="" required="">
  
  
</textarea>

</div>
<br><br>
<h2 style="background-color: red;"> charger les Photos </h2>
<div class="form-group">
  
  
    <input type="file" name="photo"><!-- 

    <input type="file" name="photo1">
    <input type="file" name="photo2">
    <input type="file" name="photo3">
    <input type="file" name="photo4">
    <input type="file" name="photo5">
    <input type="file" name="photo6"> -->
 
</div>

<div class="form-wrapper">
<select name="nature"  class="form-control">
<option>nature de l'annonce</option>
<option >prenium</option>
<option >Simple</option>
</select>
</div>

<button type="submit">PUBLIER</button>
</form>
</div>
</div>
</center>








<style type="text/css">

  footer {
    text-align: center;
    padding: 3px;
    background-color: #30336b;
    color:#fff;
    height: 36%;
}

body{
  animation: transition 0.75s;

}
@keyframes transition{
  from{
    opacity: 0;
    transform: rotateX(-10deg);
  }
  to{
    opacity: 1;
    transform: rotateY(0);
  }
}
#klo:hover, #klo::after, #klo::visible, #klo:active{
  border:3px solid darkblue;
  height: 123px;
  width: 23%;
}
#in:hover{
background-color: goldenrod;
color: black;
border:2px solid green;
}
</style><center>
<?php 
require_once'footer.php';

?>
