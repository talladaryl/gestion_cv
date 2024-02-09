<?php 

if(!isset($_SESSION)) { 
  session_start(); 
} 

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
     <meta charset="utf-8">
     
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" rel="stylesheet"><script type="text/javascript"src='res/centre.js'></script>
    <link rel="stylesheet" type="text/css" href="styo.css">
        
<style type="text/css">
/*	*{
		margin: 0;
		padding: 0;
	}*/
	/*body{
		background-color: skyblue;
	}*/
	.contente{
		width: 90%;
		margin: 10px auto;
		float: right;

	}
	.contente h1{
		/*padding: -60px 0;*/
		color: #ABBABF;
		font-size:44px;
		text-align: center;
	}
	.row{
		display: flex;
		align-items: center;
		flex-wrap: wrap;
	}
	.col{min-width: 250px;
		margin-right: 13x;
		float: right;
		/*flex-basis: 50%;
		*/
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

	/*
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
<br><br>
<div  style="margin-top: -145px!important;"><?php 
require_once'header2.php';

?></div>




<blockquote><blockquote><blockquote>
<div class="contente">
	
	


<h1>Votre Historiques d'annonces de Aaronna</h1>
<div class="row">
	<!-- <div class="col">
		<div class="feature-img">
			<img src="arronna.jpg" width="40%" height="100%">

				 <img src="patnar.jpg" class="play-b"> -->
			
		<!-- </div>
		
	</div> --> 
	<?php 

$po =$_SESSION['mailto'];
                $q =  "SELECT `idan`, `usnom`, `gategoriea`, `descripa`, `villa`, `titrea`, `datar`, `type`, `nature`, `imgf` FROM `annoncea`  WHERE usnom ='$po'  ORDER BY `annoncea`.`idan` DESC ";
              $r = $db -> query($q) ;
              while ($co = $r -> fetch())
              {
              ?>

	<div class="col">
		<div class="small-img-row"data-tourne>
			<div class="small-img">
				<img src="<?php  echo $co['imgf']; ?>" height="130">
				
			</div><p>
	<?php 
      
  
      echo "<a href=\"consulter2.php?id=".$co['idan']."\" >CONSULTER" ;

      echo "<p><a href=\"nage.php?id=".$co['idan']."\" >+ de photos" ;

  
      echo "<p><a href=\"supprimer.php?id=".$co['idan']."\">Supprimer" ;
    
   
              ?></p></b><div class="div" style="margin-top: 52px; float: left!important;">
	<p><b style="color: grey;">TITRE:  </b><b class="h1"><?php  echo $co['titrea'] ?></b></p>

			<!-- <p > <b style="color: grey;">description:  </b><b><?php  echo $co['descripa'] ?></b>
				
				 
			
			</p> -->

 </div>
		
		</div>
		
</div><br><br><br>


	<?php    }
             
              ?>	
</div>

</div>
</blockquote></blockquote></blockquote>
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

<div style="height: 500px!important; width: 70%;"></div>
<div class="footer-containero" style="margin-top: 623px;">
	<CENTER><img src="arronna.jpg" style="width: 20%;height: 95px;"></CENTER>
  <div class="footer">
		<div class="footer-heading footer-1">
			<h2>Nos offres</h2>
			<a href="http://localhost/era/" target="bank">Katalima</a>
			<a href="http://localhost/emploi/" target="bank">cvpro</a>
			<a href="http://localhost/kalara/chaos" target="bank">Signature</a>
			<a href="http://localhost/flore" target="bank">Flore</a>
			<a href="http://localhost/flore" target="bank">Terms of service</a>
			<a href="http://localhost/flore" target="bank"">NOUS</a>
			
		</div>

		<div class="footer-heading footer-2">
			<h2>Partenaire</h2>
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
			<h2>Subjection (aidez nous a nous améliorer) &#128565;</h2>
			<input type="text" name="subjection" placeholder="Enter your message" id="footer-email" >
			<input type="submit" name="btne" value="Envoyer" id="footer-email-btn">
		</div>
  </div>
</div>
</body>
</html>