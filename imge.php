 <?php

if (isset($_SESSION['password'])) {?>
<marquee>   <P>BIENVENUE A VOUS <?php  echo $_SESSION['nom']; ?></P></marquee>




  
 <?php } else {?>


<marquee style="background-color: gray;" direction="left"  >   <P style="font-family: arial black; font-size: 23px;">BIENVENUE A VOUS Pour plus d'option et d'avantage Inscriver vous sur <mark>Aaronna</mark> </P></marquee>
 <?php }

?>
<br><br>
<div> <?php  require_once'bare.php'; ?></div>