<?php 
session_start();
require_once'cnp.php';




if (isset($_POST['q']) && isset( $_POST['gories'] )&& isset( $_POST['lieuq'])) {

	$q = $_POST['q'];
	$gories = $_POST['gories'];
	$lieuq = $_POST['lieuq'];
	
?>
	



<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><link href="https://fonts.googleapis.com/css2?family=Pacifico&amp;family=Vibur&amp;display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.O">  
       </head>
<body>
  



<center>
<div style="margin-top: -12%;">
 <h1 style="color:blue;">
         les meilleurs annonces        <strong><i class="fa fa-africa"></i>en  Afrique</strong>
      </h1>
    </div>
<form action="recher.php" method="GET" data-toggle="validator" id="search-xs" role="form" style="margin-top: -12%;">
   <input id="search_input" type="text" class="form-control col-12 col-sm-4 col-md-4" name="q" value="" placeholder="Que recherchez vous?" style="width: 30%; border:2px solid gray;height:42px; border-radius: 123px; "  list="kio" /> <b style="width: 12px;">  </b><datalist id="kio">
      <?php 


                $q =  "SELECT  `titrea` FROM `annoncea`";
              $r = $db -> query($q) ;
              while ($coz = $r -> fetch())
              {
              ?>
              <option><?php echo $coz['titrea'];  ?></option>  <?php } ?>
   </datalist>


   <input id="search_input" type="text" class="form-control col-12 col-sm-4 col-md-4" name="gories" value="" placeholder="Cat&eacute;gories" style="width: 20%; border:2px solid gray;height:42px; border-top-right-radius: 123px;  " list="ki" /><datalist id="ki">
      <?php 


                $q =  "SELECT  `gategoriea` FROM `annoncea`";
              $r = $db -> query($q) ;
              while ($cr = $r -> fetch())
              {
              ?>
              <option><?php echo $cr['gategoriea'];  ?></option>  <?php } ?>
   </datalist><b style="width: 23px;">  </b><input id="search_input" type="text" class="form-control col-12 col-sm-4 col-md-4" name="lieuq" value="" placeholder="Lieu?" list="lieu" style="width: 20%; border:2px solid gray;height:42px; " /><datalist id="lieu">
      <?php 


                $q =  "SELECT  `villa` FROM `annoncea`";
              $r = $db -> query($q) ;
              while ($cr = $r -> fetch())
              {
              ?>
              <option><?php echo $cr['villa'];  ?></option>  <?php } ?>
   </datalist>

       <button type="submit" class="btn btn-outline-success col" title="Chercher"> <svg class="bi bi-search-freq "  width="1.4em" height="1.4em"  viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/><path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/></svg> Chercher</button>   <!-- <div class="col-auto my-1">
 
  </div> -->
</form><!-- </div> -->
  <?php 
require_once'header.php';

?>



  <style type="text/css">

  
/*  
  
  
  */
  input, textarea, select, button {
    font-family: arial;
    color: #333;
    font-size: 14px; }
  
  p, h1, h2, h3, h4, h5, h6, ul {
    margin: 10; 
}
 
  
#radio5:checked ~ .navigation-auto .auto-btn5{

 background-color: darkcyan; 
}
#radio6:checked ~ .navigation-auto .auto-btn6{
background-color: darkcyan;
  
}


                      

                        .contenr{

                            height:523px;
                            width: 100%;
                            background-image: url(im/33b6c8c4dfde4e53a9a7ca9bce71c3c2.jpeg);
                            background-size: cover;
                            background-position: center;
                            background-repeat: no-repeat;
                            transition: 5s;




                            animation-name: animation;
                            animation-direction: alternate-reverse;
                            animation-duration: 4s;
                            animation-fill-mode:forwards ;
                            animation-iteration-count:infinite ;
                            animation-play-state:running ;
                            animation-timing-function:ease-in-out ;
                        }

                        @keyframes  animation{

                            0%{background-image: url(im/pirate.jpg); background-size: cover;
                                              background-repeat: no-repeat;

                                }
                                /*10%{background-image: url(im/95b131b83c2f4f149f56cfbed7efadda.jpeg); background-size: cover;
                                              background-repeat: no-repeat;

                                }20*/%{background-image: url(im/6.jpg); background-size: cover;
                                              background-repeat: no-repeat;

                                    }
                                    30%{background-image: url(im/01luffy vertical.jpg); background-size: cover;
                                              background-repeat: no-repeat;

                               /* }40%{background-image: url(im/1.jpg); background-size: cover;
                                              background-repeat: no-repeat;

                                        }
                                        50%{background-image: url(im/4.jpg); background-size: cover;
                                              background-repeat: no-repeat;

                                }*/
                                60%{background-image: url(im/3.jpg); background-size: cover;
                                              background-repeat: no-repeat;

                                        }70%{background-image: url(im/1.jpg); background-size: cover;
                                              background-repeat: no-repeat;

                                }/*
                                        80%{
background-image: url(im/1.jpg);
                                            }90%{background-image: url(im/3.jpg); background-size: cover;
                                              background-repeat: no-repeat;

                                }*/100%{background-image: url(im/2.jpg);
                                              background-size: cover;
                                              background-repeat: no-repeat;

                                            }


                        }
</style>

<script>
 
  document.addEventListener("DOMContentLoaded", function() {
 
    var fadeComplete = function(e) { stage.appendChild(arr[0]); };
 
    var stage = document.getElementById("slider");
    var arr = stage.getElementsByTagName("a");
    for(var i=0; i < arr.length; i++) {
      
      arr[i].addEventListener("animationend", fadeComplete, false);
      
    }
 
  }, false);
 
</script><br><br><br><div class="contenr">

  
</div>
<br><br>

               </div><br>
               
<div class="section1">

	<style type="text/css">
		


.section1, .section2{
    text-align: center;
    /*font-size: 2em;*/
}
.grid-wrapper {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    grid-gap: 10px;
    color:#fff;
 
}
.card {
    background-color: #444;
    margin: 50px;
    border-radius: 10px;
     
}
.card > .ingo {
    width: 100%;
    height: 100px;border-radius: 10px 10px 0 0;
     
}
.card h2 {
    font-size: 29px;
    width: 40%;
}
.card b {
    font-size: 1rem;
}
.card > .text {
    padding: 0 20px 20px;
}
.button {
    cursor: pointer;
    background: gray;
    border: 0;
    font-size: 1rem;
    color: white;
    padding: 10px;
    width: 50%;
}
button:hover {
    background-color: #e0d27b;
}
	</style>
    <center><h2 style="color: goldenrod;background-color: green; border-radius: 12px; width: 80%!important; text-align: center;">premium</h2></center>
      
         
        <div class="section2">
  <div class="zone blue grid-wrapper">
        <?php 



	$q = $_POST['q'];
	$gories = $_POST['gories'];
	$lieuq = $_POST['lieuq'];


                $qq ="SELECT `idan`, `usnom`, `gategoriea`, `descripa`, `villa`, `titrea`, `datar`, `type`, `nature`, `imgf` FROM `annoncea`  WHERE titrea ='$q'  ORDER BY `annoncea`.`idan` DESC ";

              $rb = $db -> query($qq) ;
              while ($cmp = $rb -> fetch())
              {
              ?> 

      <div class="card zone">
           
          <img src="<?php  echo $cmp['imgf'] ?>" class="ingo">
          <div class="text"><center>
              <h2 style="text-decoration: underline; text-align: center;"><?php  echo $cmp['titrea'] ?></h2></center>
              <p><?php  echo $cmp['descripa'] ?></p>
               <a class="button" href="
      <?php  echo " consulter.php?id=".$cmp['idan'];"" ?>" >CONSULTER</a>



  

                  </div>
      </div>

    <?php    }
             
              ?>

        </div>
        </div>


</center>
</body>
<br><br><br>
<br>
</center>
<?php 
require_once'footer.php';

?>









	<?php
}


	

?>