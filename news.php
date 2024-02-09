
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><link href="https://fonts.googleapis.com/css2?family=Pacifico&amp;family=Vibur&amp;display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.O"> 
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&amp;family=Vibur&amp;display=swap" rel="stylesheet"><script type="text/javascript"src='res/centre.js'></script>
<style type="text/css">
  
  .contente{
    width: 90%;
    margin: 10px 30;
    float: center;

  }
  .contente h1{
    padding: -60px 0;
    color: #ABBABF;
    font-size:44px;
    text-align: center;
  }
  .row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
  }
  .col{
    flex-basis: 50%;
    min-width: 250px;
    margin-right: 3x;
    float: right;
  }
  .feature-img{
    width: 93%;
    margin-top: 1%;
    position: top;
    border-radius: 126px;
    overflow: hidden;


  }
  .small-img-row{
    display: flex;
    background-color: #efefef;
    margin: 20px 0;
    align-items: center;
    border-radius: 6px;
    overflow: hidden;
width: 110%;
  }






  .small-img{
    position: relative;
  }
  .small-img img{
    width: 150px;
  }
  .small-img-row p{
    margin-left: 5%;
    color: #707070;
    line-height: 22px;
    font-size: 15px;


  }
  h2{

font-family: arial;
font-size: 19px;
text-align: center;

  }
  b{


    text-align: center;

  }
  a{


    text-decoration:blink;
    color: blue;

  }

  
  .play-b{
    width: 60px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    cursor: progress;

  }



  footer {  height: 220%;
    text-align: center;
  padding: 100px;
    background-color: gray;
    color:#fff;
  
}
  .small-img{
    position: relative;
  }
  .small-img img{
    width: 150px;
  }
  .small-img-row p{
    margin-left: 20px;
    color: #707070;
    line-height: 22px;
    font-size: 15px;


  }
  .play-b{
    width: 60px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    cursor: progress;

  }
</style> 
       </head>
<body>
  
<?php   require_once'header.php';  ?>



<center>
<div class="contente" style="text-align: center; float: center;">
  
  


<h1>Bandes d'annonces de Aaronna</h1>
<div class="row">
  <!-- <div class="col">
    <div class="feature-img">
      <img src="arronna.jpg" width="40%" height="100%">

         <img src="patnar.jpg" class="play-b"> -->
      
    <!-- </div>
    
  </div> --> 
  <?php 
                $q =  "SELECT `idan`, `usnom`, `gategoriea`, `descripa`, `villa`, `titrea`, `datar`, `type`, `nature`, `imgf` FROM `annoncea`  ORDER BY `annoncea`.`idan` DESC  LiMIT 34";
              $r = $db -> query($q) ;
              while ($co = $r -> fetch())
              {
              ?>

  <div class="col">
    <div class="small-img-row">
      <div class="small-img">
        <img src="<?php  echo $co['imgf']; ?>" height="130" >
        
      </div><p>
  <?php 
      
  
      echo "<a href=\"consulter.php?id=".$co['idan']."\" >CONSULTER" ;

      

  
      // echo "<p><a href=\"supprimer.php?id=".$co['idan']."\">Supprimer" ;
    
   
              ?></p><div class="div" style="margin-top: 52px; float: left;">
  <p><b style="color: grey;">TITRE:  </b><b class="h1"><?php  echo $co['titrea'] ?></b></p>

      <p > <b style="color: grey;">description:  </b><b><?php  echo $co['descripa'] ?></b>
        
         
      
      </p>

 </div>
    
    </div>
    
</div><br><br><br>


  <?php    }
             
              ?>  
</div>

</div></center>


<?php 
require_once'footer.php';

?>