<?php 



if(!isset($_SESSION)) { 
  session_start(); 
} 


?>
<script type="text/javascript"src='res/centre.js'></script>
    <?php 
require_once'cnp.php';
if(isset($_SESSION['mailto']) && isset($_SESSION['passa']))
{
   $nom = $_SESSION['mailto'];
     $q =  "SELECT `noma`, `mailto`, `cheminuser`, `tel`, `sex`, `passa` FROM `user`  WHERE mailto='$nom'";
              $r = $db -> query($q) ;
              if($co = $r -> fetch())
              {
                $SESSI=$co['mailto'];

                        $SESS=$co['passa'];
              }
    
            }


    ?>

        
       <style type="text/css">
         

         * {
    text-decoration: none;
    list-style: none;
    margin: 0px;
    padding: 0px;
    outline: none;
  }
   
/*  body {
    margin: 0px;
    padding: 0px;
    font-family: arial;
    background: url('bg.png');
    background-size: cover;
  }
   */
  .section {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    display: table;
    position: relative;
  }
   .section:after, .section:visible{
    color: red;
    background-color: yellow;
   }
  h1 {
    margin:150px auto;
    display: table;
    font-size: 26px;
    padding: 40px 0px;
    text-align: center;
  }
   
  h1 span { font-weight: 500;
 }
   
  header {
    width: 100%;
    display: table;/*
  background: linear-gradient(goldenrod, turquoise , darkgray,whitesmoke, darkblue,cyan);*/
  background-color: whitesmoke;
    margin-bottom: 50px;
     
  }
   
  #logo {
    float: left;
    font-size: 24px;
    text-transform: uppercase;
    color: #002e5b;
   /* font-weight: 600;
    padding: 20px 0px;*/
  }
   
  nav {
    width: auto;
    float: center;
  }
   
  nav ul {
    display: table;
    float: right;
  }
   
  nav ul li { float: left; 
}
   
  nav ul li:last-child { padding-right: 0px; 
}
   
  nav ul li a {
    color: #002e5b;
    font-size: 16px;
    padding: 25px 20px;
    display: inline-block;
    transition: all 0.5s ease 0s;
    text-transform: uppercase;
    font-weight: bold;
  }
   
  nav ul li a:hover {
   /* background-color: #002e5b;*/
  border-bottom: 2px groove black;
    color: black;
    transition: all 0.5s ease 0s;
  }
   
  nav ul li a:hover i {
    color: black;

    transition: all 0.5s ease 0s;
  }
   
  nav ul li a i {
    padding-right: 10px;
    color: #002e5b;
    transition: all 0.5s ease 0s;
  }
   
  .toggle-menu ul {
    display: table;
    width: 25px;
  }
   
  .toggle-menu ul li {
    width: 100%;
    height: 3px;
    background-color: #002e5b;
    margin-bottom: 4px;
  }
   
  .toggle-menu ul li:last-child { margin-bottom: 0px; 
}
   
  input[type=checkbox], label { display: none; 
}
   @media only screen and (max-width: 1440px) {
   
  .section { max-width: 95%; 
}
  }
   
   @media only screen and (max-width: 980px) {
   
  header { padding: 20px 0px; 
}
   
  #logo { padding: 0px; 
}
   
  input[type=checkbox] {
    position: absolute;
    top: -9999px;
    left: -9999px;
    background: none;
  }
  input[type=checkbox]:fous {
  background:none;
  }
   
  label {
    float: right;
    padding: 8px 0px;
    display: inline-block;
    cursor: pointer;
  }
   
  input[type=checkbox]:checked ~ nav { display: block;
 }
   
  nav {
    display: none;
    position: absolute;
    right: 0px;
    top: 53px;
      background: linear-gradient( whitesmoke,gray,whitesmoke);
    padding: 0px;
    z-index: 99;
  }
   
  nav ul { width: auto; 
}
   
  nav ul li {
    float: none;
    padding: 0px;
    width: 100%;
    display: table;
  }
   
  nav ul li a {
    color: #FFF;
    color:  linear-gradient(goldenrod, turquoise , darkgray,whitesmoke, darkblue,cyan);
    font-size: 15px;
    padding: 10px 20px;
    display: block;
    
    border-bottom: 1px solid rgba(225,225,225,0.1);
  }
   
  nav ul li a i {
   color:  linear-gradient(goldenrod, turquoise , darkgray,whitesmoke, darkblue,cyan);
    padding-right: 23px;
    /* display: block;
     background-color: dodgerblue;*/

  }
   
  }



 @keyframes neon {
       from {
             text-shadow: 0 0 6px rgba(202, 228, 225, 0.92),
                      0 0 30px rgba(202, 228, 22, 0.234), 
                      0 0 12px rgba(30, 132, 242, 0.52), 
                      0 0 21px rgba(30, 132, 242, 0.92), 
                      0 0 34px rgba(30, 132, 242, 0.78), 
                      0 0 54px rgba(30, 132, 242, 0.92);
      }
       to {
             text-shadow: 0 0 6px rgba(202, 228, 225, 0.98),
                      0 0 30px rgba(202, 228, 225, 0.42), 
                      0 0 12px rgba(30, 132, 242, 0.58),
                      0 0 22px rgba(30, 132, 242, 0.84), 
                      0 0 38px rgba(30, 132, 242, 0.88), 
                      0 0 60px rgba(30, 132, 242, 1);
      }
}




      </style>
    
    
    </head>



        <header>
            <div class="section">
          
<!--   <div class="wrap">
  <span class="word"> --> <!-- <i class="fa fa-home"></i>  --><a href="" id="logo" target="_blank"class="block moving-glow"><b style="color: darkgreen;font-family: arial black; font-size: 63px;"><span></span><span></span><span></span><span></span><img src="arronna.jpg" style="width: 20%;height: 95px;"></b><b style="font-family: Rage Italic;font-size: 22px;color:  linear-gradient(goldenrod, turquoise , darkgray,whitesmoke, darkblue,cyan);text-shadow: 0 0 6px rgba(202, 228, 225, 0.98),
                      0 0 30px rgba(202, 228, 225, 0.42), 
                      0 0 12px rgba(30, 132, 242, 0.58),
                      0 0 22px rgba(30, 132, 242, 0.84), 
                      0 0 38px rgba(30, 132, 242, 0.88), 
                      0 0 60px rgba(30, 132, 242, 1);">Le Circuit </b></a><!-- </span>

  
     </div> -->

            <label for="toggle-1" class="toggle-menu" class="content">
            <ul>
              <li></li>
              <li></li>
              <li></li>
            </ul>
            </label>
            <input type="checkbox" id="toggle-1">
            <nav  class="ball">
              <ul>   <li><a href="index.php"><i class="fa fa-home"></i><span></span> Home</a></li>

                <li><a href="news.php"><i class="fa fa-newspaper-o"></i>News</a></li>

                <li><a href="aide.php"><i class="fa fa-users"></i>aide</a></li>
<?php

            if (isset($SESSI)  and isset($SESS)) { ?>
   <li><a href="espace.php"><i class="fa fa-plus"></i>Mon espace</a></li>
   
<!-- 
                 <li><a href="gate.php"><i class="fa fa-ship"></i>gategorie</a></li> -->
                <li><a href="publier.php"><i class="fa fa-edit"></i>Publier</a></li>

                <li><a href="dec.php"><i class="fa fa-wifi"></i>Déconnection</a></li>
             <?php  }else { ?>   <li><a href="count.php"><i class="fa fa-user"></i>SIgnin</a></li><?php } ?>
             
             <!-- 
                <li><a href="#gallery"><i class="fa fa-picture-o"></i>boutique</a></li> -->
              
              </ul>
            </nav>
          </header>
          </div><hr style="color: darkgreen; border: double;  width: 100%;margin-top: -59px;">

<mark><marquee style="height: 34px;">les subjection et une page pour les voirs visible que par toi</marquee></mark>
