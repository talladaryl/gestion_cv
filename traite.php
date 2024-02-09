<?php require_once'header.php'; ?>
      </style>
    

        <link rel="stylesheet" href="style.css">


<style type="text/css">    
:root {
  --color: #4973ff;
}
 
body {
  font-size: 16px;
  font-family: 'Montserrat', sans-sherif;
  margin: 0;
  padding: 0;
}
 
.content {
  max-width: 600px;
  margin: 0 auto;
  padding: 0 20px;
}
 
.hero {
  position: relative;
  background: #333333;
  color: white;
  height: 100vh;
  display: flex;
  align-items: center;
  overflow: hidden;
  width: 100%;
}
 
.hero h2 {
  position: relative;
  z-index: 1;
  font-size: 6em;
  margin: 0 0 10px;
  line-height: 1;
  color: rgba(255, 255, 255, 0.9);
}
 
.hero p {
  position: relative;
  z-index: 1;
  font-size: 30px;
  color: rgba(255, 255, 255, 0.5);
  line-height: 1.4;
  text-align: justify;
}
 
/* ========================= */
 
.waves {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 300px;
  background-color: var(--color);
  box-shadow: inset 0 0 50px rgba(0, 0, 0, 0.5);
  transition: 500ms;
}
 
.waves::before,
.waves::after {
  content: '';
  position: absolute;
  width: 300vw;
  height: 300vw;
  top: -65vw;
  left: 50%;
  transform: translate(-50%, -75%);
}
 
.waves::before {
  border-radius: 44%;
  background: rgba(51, 51, 51, 1);
  animation: waves 8s linear infinite;
}
 
.waves::after {
  border-radius: 44%;
  background: rgba(51, 51, 51, 0.5);
  animation: waves 15s linear infinite;
}
 
@keyframes waves {
  0% {
    transform: translate(-50%, -75%) rotate(0deg);
  }
   
  100% {
    transform: translate(-50%, -75%) rotate(360deg);
  }
}
a:hover{
  color: yellow;
}
        </style>
   
    <section class="hero">
  <div class="content">
    <h2><a style="text-decoration-line: underline;">SKYFASH</a></h2>
    <p>VOTRE PAYEMENT A ETE EFFECTUER AVEC SUCCES MERCI POUR VOTRE CONFIANCE</p>
    </div>
  <div class="waves"></div>
</section>
 
</body>
</html>