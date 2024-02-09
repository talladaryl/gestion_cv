<!DOCTYPE html>
<html>
<head>
  <title></title><link rel="stylesheet" type="text/css" href="lightslider.css"/>
  <script type="text/javascript" src="jquery3.3.1.js"></script>
  <script type="text/javascript" src="lightslider/js"></script>
  <style type="text/css">
    @charset "utf-8";
    body{
      margin:0px;
      padding: 0px;
    }
    ul{
      list-style: none;
    }
    a{
      text-decoration: 
    }
    .amen{
      width: 100%;
      height: 100vh;
      background-color: black;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .box{
      width: 350px;
      height: 610px;
      background-color: darkgray;
      border-radius: 10px;
      box-shadow: 2px 10px 12px rgba(0,0,0,0.5);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
      box-sizing: border-box;
      margin:20px 10px;
    }
    .model{
      height: 350px;
      max-height: 100%;
      max-width: 100%;
    }
    .details{
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 300px;
    }
    .details p{
      font-family: calibri;
      font-weight: bold;
      color: blue;
      text-align: center;
      margin-top: 20px;
    }
    .marvel{
      color: yellow;
      font-weight: bold;
      letter-spacing: 2px;
      font-family: bebas kai;
      font-size: 25px;
    }

.logo{ height: 60px;


}
.box:hover{
  color: white;
  transition: all ease 0.5s;

}
@media(max-width:720px ){
  .box{
    width: 94%;
    height: 500px;

  }
  .model{
    height: 260px;
  }
  .details p{
font-size: 17px;
width: 230px;
  }
}

  </style>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.O">  
    <meta charset="utf-8">
</head>
<body>
<script type="text/javascript" >$(document).ready(function(){
  $('#autowidth').lightslider({

    autowidth:true,
    loop:true,
    onSliderload: function(){
      $('#autowidth').removeClass('cS-hidden');
    }
  });
});</script>

<div class="amen">
  <ul class="cs-hidden" id="autowidth"><li class="item-a">
  <div class="box">
    
    <p class="marvel">VOITURE</p>
    <img src="im/01luffy vertical.jpg" class="model">
    <div class="details">
      <img src="im/pirate.jpg" class="logo" width="100px" style="height: auto;"> 
      <p>leffy d monky</p>
    </div>
  </div>

</div></li>
<li class="item-a">
  <div class="box">
    
    <p class="marvel">VOITURE</p>
    <img src="im/01luffy vertical.jpg" class="model">
    <div class="details">
      <img src="im/pirate.jpg" class="logo" width="100px" style="height: auto;"> 
      <p>leffy d monky</p>
    </div>
  </div>

</div></li>
<li class="item-a">
  <div class="box">
    
    <p class="marvel">VOITURE</p>
    <img src="im/01luffy vertical.jpg" class="model">
    <div class="details">
      <img src="im/pirate.jpg" class="logo" width="100px" style="height: auto;"> 
      <p>leffy d monky</p>
    </div>
  </div>

</div></li>
<li class="item-a">
  <div class="box">
    
    <p class="marvel">VOITURE</p>
    <img src="im/01luffy vertical.jpg" class="model">
    <div class="details">
      <img src="im/pirate.jpg" class="logo" width="100px" style="height: auto;"> 
      <p>leffy d monky</p>
    </div>
  </div>

</div></li>
<li class="item-a">
  <div class="box">
    
    <p class="marvel">VOITURE</p>
    <img src="im/01luffy vertical.jpg" class="model">
    <div class="details">
      <img src="im/pirate.jpg" class="logo" width="100px" style="height: auto;"> 
      <p>leffy d monky</p>
    </div>
  </div>

</div></li></ul>
</body>
</html>