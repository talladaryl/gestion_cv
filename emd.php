
<?php
session_start();
require_once'cnp.php';
?>
<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><link href="https://fonts.googleapis.com/css2?family=Pacifico&amp;family=Vibur&amp;display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.O">  
       </head>
<body>
<?php   require_once'header.php';  ?>



<br><br>

<div class="section1">

	<style type="text/css">
		


.section1, .section2{
    text-align: center;
    /*font-size: 2em;*/
}
.grid-wrapper {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    grid-gap: 10px;
    color:#fff;
 
}
.card {
    background-color: #444;
    margin: 50px;
    border-radius: 10px;
     
}
.card > .ingo {
    width: 120%;
    height: 120px;border-radius: 10px 10px 0 0;
     
}
.card h2 {
    font-size: 29px;
    width: 40%;
}
.card b {
    font-size: 1rem;
}
.card > .text {
    padding: 0 20px 20px;
}
.button {
    cursor: pointer;
    background: gray;
    border: 0;
    font-size: 1rem;
    color: white;
    padding: 10px;
    width: 50%;
}
button:hover {
    background-color: #e0d27b;
}
	</style>
    <center><h2 style="color: goldenrod;background-color: green; border-radius: 12px; width: 80%!important; text-align: center;">AUTOMOBILE</h2></center>
      
        <br><br> 
        <div class="section2">
  <div class="zone blue grid-wrapper">
        <?php 

$po =$_SESSION['mailto'];
                $q =  "SELECT `idan`, `usnom`, `gategoriea`, `descripa`, `villa`, `titrea`, `datar`, `type`, `nature`, `imgf` FROM `annoncea`  WHERE gategoriea ='Électroménager Maison Déco'  ORDER BY `annoncea`.`idan` DESC ";
              $r = $db -> query($q) ;
              while ($co = $r -> fetch())
              {
              ?> 

      <div class="card zone">
           
          <img src="<?php  echo $co['imgf'] ?>" class="ingo">
          <div class="text"><center>
              <h2 style="text-decoration: underline; text-align: center;"><?php  echo $co['titrea'] ?></h2></center>
              <p><?php  echo $co['descripa'] ?></p>
               <a class="button" href="
      <?php  echo " consulter.php?id=".$co['idan'];"" ?>" >CONSULTER</a>



  

                  </div>
      </div>

    <?php    }
             
              ?>

        </div>
        </div>

     <?php 
require_once'footer.php';

?>