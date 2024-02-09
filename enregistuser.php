<?php

session_start();

$_SESSION['User']= $_POST['Username'];
$_SESSION['mailto']= $_POST['mailto'];
$_SESSION['sexe']= $_POST['sexe'];
$_SESSION['passa']= $_POST['password'];


// $_SESSION['photo']= $_POST['photo'];

$_SESSION['tel']= $_POST['tel'];
?>

<?php
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png","JPG" => "image/JPG", "JPEG" => "image/JPEG", "GIF" => "image/GIF", "PNG" => "image/PNG");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];



     
 $_SESSION['fil']=$filename ;


        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 85 * 2024 * 2024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("uploaduser/" . $filename)){
                echo $filename . " is already exists.";
               


            } else{
                $dosier = "uploaduser/";
                move_uploaded_file($_FILES["photo"]["tmp_name"], $dosier. $filename);
               
                     




              $user= $_SESSION['User'];
               $mailto= $_SESSION['mailto'];
               $sexe= $_SESSION['sexe'];
                // $photo=$_SESSION['photo'];
                $telo=$_SESSION['tel'];
                $passa=$_SESSION['passa'];

               $chaos= mysqli_connect('localhost','root','','aaronna') or die(mysql_error());

  $reqchaos="INSERT INTO `user`( `noma`, `mailto`, `cheminuser`, `tel`, `sex`, `passa`) VALUES( '". $user ."', '". $mailto ."',  '". $dosier . $filename ."' ,'". $telo ."', '". $sexe ."', '". $passa ."')";
    $toro=mysqli_query($chaos,$reqchaos);

    if ($toro and $chaos) { $_SESSION['nf'] = $filename;
        // echo "bravo";
        
        require_once 'index.php';


             }
else{
    echo "<center> <p> UNE ERREUR ES SURVENU RESSAYER S'IL VOUS PLAIT MERCI!!!!!</p></center>";
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