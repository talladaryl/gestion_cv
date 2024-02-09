  
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
     <meta charset="utf-8">
     
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <script type="text/javascript"src='res/centre.js'></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" rel="stylesheet">
    <?php 
    		require_once'header2.php';

    ?>



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
<div class="bg">
  <img src="<?php  echo $c['cheminuser']; ?>"data-tourne ><br><br><center>
<h1 style="color: black;font-size: 29px; font-family: arial;;text-decoration: underline;">
<?php echo $_SESSION['mailto'] ; ?></h1></center>
</div>

<?php    }  ?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php    require_once'footer.php';  ?>
