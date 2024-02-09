<?php
	 $db=new PDO('mysql:host=localhost;dbname=aaronna','root','',
  array(
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	


	$q1 = "DELETE FROM annoncea WHERE idan = '".$_GET['id']."'";
	$r1 = $db->query($q1);

    


	

	header('location:mesannonce.php');
?>