<?php 
if(!isset($_SESSION)) { 
  session_start(); 
} 
require_once'cnp.php';
?>

    <style type="text/css">
    .menu{
        position: fixed;
      }  

        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: arial;
    font-size: 14px;
}
ul.menu {
    display: inline-block;
    list-style-type: none;
}
li.menu_list {
    height: 85px;
    width: 85px;
    position: relative;
}
li.menu_list .front,
a.side {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 86px;
    width: 100%;
    padding: 30px;
    position: absolute;
    top: 0;
    left: 0;
    text-decoration: none;
    text-transform: uppercase;
    transition: all .5s ease-out;
    cursor: pointer;
    font-weight: bold;
     
}
li.menu_list .front {
    background-color: #34465d;
    color: #FFFC00;
    transform-origin: 0 0;
    font-size: 30px;
}
a.side {
    background-color: #FFFC00;
    color: #34465d;
    transform-origin: 0 0 85px;
    transform: rotateY(-90deg);
}
li.menu_list:hover a.side {
    transform: rotateY(0deg);
}
li.menu_list:hover .front {
    transform: rotateY(90deg);
}
  
  .bg {
  position: absolute;
  top:50%;
  left:50%;
  transform: translate(-50%,-50%);
/*  text-shadow: 3px 3px 0px #2c3e50;*/
   
}

             * {
  color: red;
  box-sizing: border-box;
}
 
body {
  background: whitesmoke;
  margin: 0;
  padding: 0;
  border: 0;
}
.bg img{
    width:200px;
    height: 200px;
    border-radius: 50%;
    border:5px solid #fff;
}  </style>
</head><script type="text/javascript"src='res/centre.js'></script>
<body><br><br><br><br><br><br>
<ul class="menu">
    <li class="menu_list">
        <span class="front fas fa-home"></span>
        <a href="index.php" class="side">home</a>
    </li>
    <li class="menu_list">
        <span class="front fas fa-newspaper"></span>
        <a href="publier2.php" class="side">publier</a>
    </li>
    <li class="menu_list">
        <span class="front fas fa-address-book"></span>
        <a href="mesannonce.php" class="side">mes annonces</a>
    </li>

    <li class="menu_list">
        <span class="front fas fa-address-book"></span>
        <a href="abonnement.php" class="side">payer mon abonnement</a>
    </li>


<!-- 
     <li class="menu_list">
        <span class="front fas fa-address-book"></span>
        <a href="compte.php" class="side">modifier mon compte</a>
    </li> 
    <li class="menu_list">
                
        <span class="front fas fa-twiter"></span>
        <a href="tchat.php" class="side">tchat</a>
    </li> -->
    
   

    <li class="menu_list">
        <span class="front fas fa-user"></span>
        <a href="dec.php" class="side">outline</a>
    </li>  

</ul>
