<!DOCTYPE html>
<html>
<head>
<title> CSS Buttons</title>
<style type="text/css">
      body{
      background:#262626;
}
.container{
      width:900px;
      padding:7.5% 50px;
      margin:0 auto;
}
a{
      width:180px;
      display:inline-block;
      margin:5% 20px;
      padding:20px 0px;
      text-align:center;
      font-family:Arial;
      font-size:20px;
      color:#fff;
      position:relative;
       
      text-decoration:none;
      letter-spacing:1.5px;
}
a:nth-child(1){
      background:red;
      color:#fff;
       
}
a:nth-child(2){
      background:orange;
      color:#fff;
      border-radius:10px;
}
a:nth-child(3){
      background:purple;
      color:#fff;
      border:2px solid #fff;
       
}
a:nth-child(4){
      background:blue;
       
      border:2px solid #fff;
      border-radius:10px;
}
a:nth-child(5){
      background:green;
      color:#fff;
      border:2px dotted yellow;
}
a:nth-child(6){
      background:green;
      color:#fff;
      border:2px dashed white;
}
a:nth-child(7){
      background:yellow;
      color:#000;
      border-radius:30px 0 30px 0;
}
a:nth-child(8){
      background:orangered;
      color:#fff;
      border-radius:0 30px 0 30px;
       
}
a:nth-child(8):hover{
      background:orange;
}
a:nth-child(9){
      background:green;
      color:#f2f2f2;
       
}
a:nth-child(9)::before{
      content: "";
      width:calc(100% - 16px);
      height:calc(100% - 12px);
      position:absolute;
      left:7px;
      top:5px;
      border:2px dashed #fff;
       
}
a:nth-child(10){
      background:#424242;
      color:#fff;
       
}
a:nth-child(10)::before{
      content: "";
      width:calc(100%);
      height:calc(100% - 14px);
      position:absolute;
      left:0px;
      top:5px;
      border-top:2px dashed yellow;
      border-bottom:2px dashed yellow;
}
a:nth-child(11){
      background:#ff00e4;
      color:#fff;
      border-radius:30px;
      text-align:right;
      width:160px;
      padding-right:20px;
       
 
}
a:nth-child(11)::before{
      content: "";
      width:calc(40px);
      height:calc(42px);
      position:absolute;
      left:10px;
      top:10px;
      border-radius:20px;
      background:orange;
}
a:nth-child(12){
       
      color:#fff;
      background:#262626;
      border-radius:30px;
      text-align:right;
      width:150px;
      padding-right:20px;
      border:5px solid #fff;
       
}
a:nth-child(12)::before{
      content: "";
      width:calc(40px);
      height:calc(42px);
      position:absolute;
      left:10px;
      top:10px;
      border-radius:20px;
      background:purple;
       
       
}
a:nth-child(13){
      background:linear-gradient(to right, #0c1700, #81f802, #0c1700);
}
a:nth-child(14){
      background:linear-gradient(-45deg,blue,red);
       
}
a:nth-child(15){
      box-shadow:inset 0px 0px  30px blue;
      background:lime;
}
a:nth-child(16){
       
      box-shadow:0 0 30px skyblue;
       
}
</style>
</head>
<body>
<div class ="container">
      <a href ="#"> Button1</a>
      <a href ="#"> Button2</a>
      <a href ="#"> Button3</a>
      <a href ="#"> Button4</a>
      <a href ="#"> Button5</a>
      <a href ="#"> Button6</a>
      <a href ="#"> Button7</a>
      <a href ="#"> Button8</a>
      <a href ="#"> Button9</a>
      <a href ="#"> Button10</a>
      <a href ="#"> Button11</a>
      <a href ="#"> Button12</a>
      <a href ="#"> Button13</a>
      <a href ="#"> Button14</a>
      <a href ="#"> Button15</a>
      <a href ="#"> Button16</a>
</div>
</body>
</html>