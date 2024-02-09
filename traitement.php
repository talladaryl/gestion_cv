<?php
session_start();

$_SESSION['mailto']=$_POST['mailto'];
$_SESSION['passa']=$_POST['password'];

?>




<!-- 

             ,;;;;;;;,;,
            ;;;;;;;;;;;,;
           ;;;;;'_¤___¤_;
           ;;;(/))))|((\
           _;;((((((|))))
          / |_\\\\\\\\\\\\
     .--~(  \ ~))))))))))))
    /     \  `\-(((((((((((\\
    |    | `\   ) |\       /|)
    |chaos|  `. _/  \_____/ |
     |    , `\~            /
      |    \  \  /CHAOS*  /
     |.   `\|            /
     | ~-   `\          /\
      \____~._/~ -_,_""_((\___~~~~~~~~~~~~~~~~~~~~~~~~~~~^^/
      \                        CHAOS   /\/\/\/\/\/\/\     /
        |-----|\   \____';;_____________________________ /
       |      | :;;;'     \
      |  /    |            |
      |       |            |   -->




<?php


if(isset($_POST['mailto']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'aaronna';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username =  htmlspecialchars($_POST['mailto']); 
    $password =htmlspecialchars(sha1($_POST['password']));
    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM user where 
              mailto = '".$username."' "and "passa = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['mailto'] = $username;
           header('Location: index.php');
        }
        else
        {
           header('Location: count.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: count.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: count.php');
}
mysqli_close($db); // fermer la connexion
?>
