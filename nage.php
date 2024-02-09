
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
	<link rel="stylesheet" type="text/css" href="master.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!--   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><link href="https://fonts.googleapis.com/css2?family=Pacifico&amp;family=Vibur&amp;display=swap" rel="stylesheet"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="stylesheet" type="text/css" href="master.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.O">  
       </head>

         <?php


if(isset($_POST['btn1']))
{
	 $idan = $_GET['id'];


 $user = $_SESSION['mailto'];


  if(empty($_POST['photo']))
 {


 	if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png", "PNG" => "image/PNG", "JPEG" => "image/JPEG", "GIF" => "image/GIF" , "JPG" => "image/JPG");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];



     
 $_SESSION['fil']=$filename ;


        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 185 * 2024 * 2024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("suplement/" . $filename)){
                echo $filename . " is already exists.";
               


            } else{
                $dosier = "suplement/";
                move_uploaded_file($_FILES["photo"]["tmp_name"], $dosier. $filename);
               
                 

               $chaos= mysqli_connect('localhost','root','','aaronna') or die(mysql_error());



          $date = date('y-m-d');    


              

        
            $pchaos ="INSERT INTO `suplement`(`idua`, `chemin`, `user`)  VALUES('".  $idan ."', '". $dosier . $filename ."','".  $user ."')";





 
    $toro=mysqli_query($chaos,$pchaos);

    if ($toro and $chaos) {




        require_once 'nage.php';

             }
else{
    echo "<center> <p> UNE ERREUR ES SURVENU RESSAYER S'IL VOUS PLAIT MERCI!!!!! </p></center>";
        // require_once 'enrefil.php';
    }







                
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}
        
 }else
 {


      
      $q2 = 'update dossier set tel= "'.$_POST['tel'].'" where tel="'.$_GET['id'].'" ';
      $r2 = $db ->query($q2); 
 header('location:modifier_dosc.php?id='.$_GET['id'].'');   
echo '<div class="alert bg-success" role="alert">
          <svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Votre contact a été bien modifié! <a href="#" class="pull-right"></a>
        </div>'; 
 } 
}

?><div style="margin-top: -45px!important;"><?php   require_once'header2.php';  ?></div>

<body>

	<br><br>
<center><form method="post" action="" enctype="multipart/form-data">
	 <label style="color: black; font-size: 19px; font-family: Arial black;"> AJOUTER UNE IMAGE: </label>  <input type="file" name="photo"> <input type="submit" name="btn1" style="color:whitesmoke; font-size: 19px;background-color: lightgreen;height: 53px;width: 23%;">
	

</form></center>


<center>

 <?php
     
 


              $q =  "SELECT `idan`, `usnom`, `gategoriea`, `descripa`, `villa`, `titrea`, `datar`, `type`, `nature`, `imgf`  from annoncea Where idan='".$_GET['id']."'";
              $r = $db -> query($q) ;
              while ($c = $r -> fetch())
              {


              ?>
	
<div class="container"><nav style="text-align: center; color: blue; font-size: 19px;font-family: roboto;">
    <a href="<?php  echo " photo.php?id=".$_GET['id'];"" ?>"style="text-align: center; color: blue; font-size: 19px;font-family: roboto;">Plus de photos</a>
    
  </nav><br><br>
  <h2 style="text-align: center;text-decoration: underline; color: black; font-size: 19px;font-family: Arial black">TITRE:  <?php echo $c['titrea'];?>.</h2><br><br>
  <img src="<?php echo $c['imgf'];?>" style="width: 80%; float: center;margin-right: -9px; height: 390px;" alt=""> <br>    </br>
  <p style="width: 90%;margin-left: 4%;font-size: 19px;font-family: Arial black; text-align: left; color: black;"><?php echo $c['descripa'];?></p>
</div>




  <?php
              }
              ?></center>

              <br><br>

<style type="text/css">
  

*{
  padding: 0;
  margin:0;
box-sizing: border-box;
font-family: Arial, Helvetica, sans-serif ;

}
  .footer-containero{

  background-color: #212329;
  padding:4rem  0 4rem 0;

}
.footer{
  width: 100%;
  height: 40vh;
  background-color:#212329; 
color: whitesmoke;
display: flex;
justify-content: center;
flex-wrap: wrap;
margin:0 auto;

}

.footer-heading{
  display: flex;
  flex-direction: column;
  margin-right: 4rem;

}
.footer-heading h2{

  margin-bottom: 2rem
}

.footer-heading a{

  color: whitesmoke;
  text-decoration: none;
  margin-bottom: 0.5rem;
}
.footer-heading a:hover{
color: red;
transition: 0.3s ease-out; 
}

.footer-email-form h2{
margin-bottom: 2rem;  
}

#footer-email{
  width: 250px;
  height: 40px;
  border-radius: 4px;
  outline: none;
  border:none;
  padding-left: 0.5rem;
  font-size: 1rem;
  margin-bottom: 1rem;
}

#footer-email::placeholder{
color: #b1b1b1;/* lightgray*/



}
#footer-email-btn{
width: 100px;
height: 40px;
border-radius: 4px;
background-color: #F9423D;
outline: none;
  border:none;
  color:whitesmoke;
  font-size: 1rem;


}
#footer-email-btn:hover{
  cursor: pointer;
  background-color:#337AF1;
  transition:  all 0.4s ease-out;
}

 @media screen and (max-width: 1150px){
  .footer{
    height: 50vh;
  }
  .footer-email-form{
    margin-top: 4rem;
  }
 } 

 @media screen and (max-width:820px){
  .footer{
padding-top: 2rem;
  }

 }


/* @media screen and (max-width: 720px){
  .footer-3{
    display: none;
  }
  .footer-email-form{
    margin-top: 2rem;
  }
 }*/ 



</style>
<!--  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->


<div class="footer-containero" style="margin-top: 323px;">
  
  <div class="footer">
    <div class="footer-heading footer-1">
      <h2>About US</h2>
      <a href="#">Blog</a>
      <a href="#">Demo</a>
      <a href="#">Customers</a>
      <a href="#">Investors</a>
      <a href="#">Terms of service</a>
      <a href="#">NOUS</a>
      
    </div>

    <div class="footer-heading footer-2">
      <h2>Contact Us</h2>
      <a href="#">Jobs</a>
      <a href="#">Support</a>
      <a href="#">Contact</a>
      <a href="#">Partenaire</a>
      
      
    </div>
    <div class="footer-heading footer-3">
      <h2>Social Media</h2>
      <a href="#"><i class="fa fa-facebook"></i> Facebook</a>
      <a href="#"><i class="fa fa-whatsapp"></i>wathsapp</a>
      <a href="#"><i class="fa fa-twitter"></i>twiter</a>
      <a href="#"><i class="fa fa-youtube"></i> Youtube</a>
      <a href="#"><i class="fa fa-instagram"></i> Instagram</a>
      
      
    </div>
    
    <div class="footer-email-form">
      <h2>Join our newsletter</h2>
      <input type="email" name="" placeholder="Enter your email address" id="footer-email" >
      <input type="submit" name="" value="Sign Up" id="footer-email-btn">
    </div>
  </div>
</div>
</body>
</html>