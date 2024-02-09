
<?php 

	
    

               $chaos= mysqli_connect('localhost','root','','aaronna') or die(mysql_error());
$comme = $_POST['comme'];

if (isset($_SESSION['mailto'])) {
	$mailto = $_SESSION['mailto'];
	# code...
}else{
	$mailto ='visiteur';
}
            $pchaos ="INSERT INTO `commentaire`( `comment`, `contact`) VALUES('$comme','$mailto')";


    $toro=mysqli_query($chaos,$pchaos);

    if ($toro and $chaos) {




        require_once 'aide.php';

             }
else{
    echo "<center> <p> UNE ERREUR ES SURVENU RESSAYER S'IL VOUS PLAIT MERCI!!!!! </p></center>";
        // require_once 'enrefil.php';
    }




?>