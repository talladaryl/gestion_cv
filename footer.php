
<style type="text/css">
	

*{
	padding: 0;
	margin:0;
box-sizing: border-box;
font-family: Arial, Helvetica, sans-serif ;

}
	.footer-container{

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
<!-- 	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->


<div class="footer-container">
	<center><!-- <b style="color: white; font-size: 19px; font-family: arial black;">LA MEUTE présente:</b> --> <img src="arronna.jpg" style="width: 20%;height: 95px;"></center>
	<div class="footer">
		<div class="footer-heading footer-1">
			<h2>Nos offres</h2>
			<a href="http://localhost/era/" target="bank">chercher un logement au cameroun</a>
			<a href="http://localhost/emploi/" target="bank"> votre cv pro</a>
			<a href="http://localhost/kalara/chaos" target="bank"> gestion des contrats de travail</a>
			<a href="http://localhost/flore" target="bank">gérer vos courier </a>
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
			<h2>Subjection (aidez nous a nous améliorer) &#128565;</h2><form method="post">
			<input type="text" name="subjection" placeholder="Enter your message" id="footer-email" >
			<input type="submit" name="btne" value="Envoyer" id="footer-email-btn"></form>
			
		</div>
	</div>
</div>
</body>
</html>