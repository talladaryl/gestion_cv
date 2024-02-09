<?php
session_start();

$_SESSION['typeanon']= $_POST['typeanon'];
$_SESSION['gtegorie']= $_POST['gtegorie'];
$_SESSION['vlle']= $_POST['ville'];


$_SESSION['ttreanon']= $_POST['ttreanon'];
$_SESSION['descrip']= $_POST['descrip'];
$_SESSION['nature']= $_POST['nature'];
$nom =$_SESSION['mailto'];

?>

<?php
// Check if the form was submitted
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
            if(file_exists("upload/" . $filename)){
                echo $filename . " is already exists.";
               


            } else{
                $dosier = "upload/";
                move_uploaded_file($_FILES["photo"]["tmp_name"], $dosier. $filename);
               
                 

               $chaos= mysqli_connect('localhost','root','','aaronna') or die(mysql_error());



$titre=$_SESSION['ttreanon'];

          $date = date('y-m-d');    


               $user = $_SESSION['mailto'];



     $typeanon=$_SESSION['typeanon'];
$gtegorie=$_SESSION['gtegorie'];
$vlle=$_SESSION['vlle'];


$descrip=$_SESSION['descrip'];
$nature=$_SESSION['nature'];
        
            $pchaos ="INSERT INTO `annoncea`( `usnom`, `gategoriea`, `descripa`, `villa`, `titrea`, `datar`, `type`, `nature`, `imgf`) VALUES('". $user ."','". $gtegorie."','". $descrip."','". $vlle."','". $titre."','". $date."','". $nature."','". $typeanon."', '". $dosier . $filename ."')";



  // $reqchaos="INSERT INTO aroim ( `nomuser`, `titre_publication`, `chemiaro`, `datepub`) VALUES('". $user ."', '". $titre ."', '". $dosier . $filename ."' ,'". $date ."')";
  // echo print_r($reqchaos);
  // die('ok');




 
    $toro=mysqli_query($chaos,$pchaos);

    if ($toro and $chaos) {




        require_once 'mesannonce.php';

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
?>