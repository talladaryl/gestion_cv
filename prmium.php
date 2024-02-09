

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

$po =$_SESSION['mailto'];
                $q =  "SELECT `idan`, `usnom`, `gategoriea`, `descripa`, `villa`, `titrea`, `datar`, `type`, `nature`, `imgf` FROM `annoncea`  WHERE type ='prenium'  ORDER BY `annoncea`.`idan` DESC ";
              $r = $db -> query($q) ;
              while ($co = $r -> fetch())
              {
              ?> 

      <div class="card zone">
           <center>
              <h2 style="text-decoration: underline; text-align: center;"><?php  echo $co['usnom'] ?></h2></center><br><br>
          <img src="<?php  echo $co['imgf'] ?>" class="ingo">
          <div class="text"><center>
              <h2 style="text-decoration: underline; text-align: center;"><?php  echo $co['titrea'] ?></h2></center>
             <!--  <p><?php  echo $co['descripa'] ?></p> --><br><br>
               <a class="button" href="
      <?php  echo " consulter.php?id=".$co['idan'];"" ?>" >CONSULTER</a>



  

                  </div>
      </div>

    <?php    }
             
              ?>

        </div>
        </div>
