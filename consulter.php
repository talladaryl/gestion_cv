
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
    <!--   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><link href="https://fonts.googleapis.com/css2?family=Pacifico&amp;family=Vibur&amp;display=swap" rel="stylesheet"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="stylesheet" type="text/css" href="master.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.O">  
       </head>
<body>
<?php   require_once'header.php';  ?>



 <?php
     
 


              $q =  "SELECT `idan`, `usnom`, `gategoriea`, `descripa`, `villa`, `titrea`, `datar`, `type`, `nature`, `imgf`  from annoncea Where idan='".$_GET['id']."'";
              $r = $db -> query($q) ;
              while ($c = $r -> fetch())
              {

$mail =$c['usnom'];
              ?>
	
<div class="container"><nav style="text-align: center;">
   <?php
     

 


              $l =  "SELECT `noma`, `mailto`, `cheminuser`, `tel`, `sex`, `passa` FROM `user` WHERE mailto='$mail'";
              $re = $db -> query($l) ;
              while ($cj= $re -> fetch())
              { 


              ?> <b>  <center>
              <h2 style="text-decoration: underline; text-align: center;"><?php  echo $cj['mailto']; ?></h2></center><br><br><p>CONCTACT:  <?php echo $cj['tel'];?></p></b><?php } ?>
    <a href="<?php  echo " photo.php?id=".$_GET['id'];"" ?>">Plus de photos</a>
    
  </nav>
	<h2 style="text-align: center;text-decoration: underline;"><?php echo $c['titrea'];?></h2><br><br>
	<img src="<?php echo $c['imgf'];?>" style="width: 40%; float: left;margin-left: 9px; height: 290px;" alt=""data-tourne> <b>    </b>
	<p style="width: 90%;margin-left: 4%;font-size: 18px;font-family: Arial;"><?php echo $c['descripa'];?></p>
</div>





  <?php
              }
              ?>



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