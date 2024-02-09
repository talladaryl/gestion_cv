
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
     <meta charset="utf-8">
     
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styo.css">
<meta name="viewport" content="width=device-width, initial-scale=1">


 <style type="text/css">
      
     
 
a {
  color: #666;
  text-decoration: none; 
 
}
  a:hover {
    color: #4FDA8C; 
}
 
body {
  
  
  color: #666;
   background: white;
  font-family:Arial;
}
.form-wrap {
  background: whitesmoke;
  width: 340px;
   
  
}
.form-wrap .tabs {
    overflow: hidden; 
}
.form-wrap .tabs h3 {
    float: left;
    width: 50%;
     
}
.form-wrap .tabs h3 a {
 padding: 0.5em 0;
 text-align: center;
 font-size:20px;
 font-weight: bold;
 background-color: #28A55F;
 display: block;
 color: #000; 
     
}
.form-wrap .tabs h3 a.active {
          background-color: whitesmoke;
          color: goldenrod;
          text-decoration: underline;
}
  .form-wrap .tabs-content {
    padding: 1.5em; 
}
.form-wrap .tabs-content div[id$="tab-content"] {
  display: none;
}
.form-wrap .tabs-content .active {
      display: block !important; 
}
  .form-wrap form .input {
     
    color: black;
    font-family: inherit;
    padding: .8em 0 10px .8em;
    border: 1px solid #CFCFCF;
    outline: 0;
    display: inline-block;
    margin: 0 0 .8em 0;
    padding-right: 2em;
    width: 90%; 
    font-size: 16px;
}
  .form-wrap form .button {
    width: 100%;
    padding: .8em 0 10px .8em;
    background-color: #28A55F;
    border: none;
    color: #fff;
    cursor: pointer;
    text-transform: uppercase;
    font-size: 20px;
    font-weight: bold;
}
    .form-wrap form .button:hover {
      background-color: #4FDA8C; 
}
  .form-wrap form .checkbox {
    visibility: hidden;
    padding: 20px;
    margin: .5em 0 1.5em; 
}
    .form-wrap form .checkbox:checked + label:after {
      
      filter: alpha(opacity=100);
      opacity: 1; 
}
  .form-wrap form label[for] {
    position: relative;
    padding-left: 20px;
    cursor: pointer; 
}
    .form-wrap form label[for]:before {
      content: '';
      position: absolute;
      border: 1px solid #CFCFCF;
      width: 17px;
      height: 17px;
      top: 0px;
      left: -14px; 
}

/*
form input:focus,
 form input:valid {

  transform:translateY(-150%);
  font-size: 14px;
  color:red; 

}
.form input:focus ::after, .form input:valid::after{
  transform: translateX(0%);

}
   */ .form-wrap form label[for]:after {
       
      filter: alpha(opacity=0);
      opacity: 0;
      content: '';
      position: absolute;
      width: 9px;
      height: 5px;
      background-color: transparent;
      top: 4px;
      left: -10px;
      border: 3px solid #28A55F;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg); 
}
  .form-wrap .help-text {
    margin-top: .6em; 
}
    .form-wrap .help-text p {
      text-align: center;
      font-size: 14px; 
}


</style>
<script
  src="https://code.jquery.com/jquery-3.5.1.js"></script>
    </style>
      
  </head>       

<body>

<?php 
require_once'header.php';

?>
<center>
    
<br><br><br>
    <div class="form-wrap">
    <div class="tabs">
      <h3 class="signup-tab"><a class="active" href="#signup-tab-content">Sign Up</a></h3>
      <h3 class="login-tab"><a href="#login-tab-content">Log In</a></h3>
    </div>

    <div class="tabs-content" style="background-color: whitesmoke;">
      <div id="signup-tab-content" class="active">

<script type="text/javascript" language="javascript">
<!--

function VerifMail()
{
  a = document.Verif.Mail.value;
  valide1 = false;
  for(var j=1;j<(a.length);j  ) {
    if(a.charAt(j)=='@') {
      if(j<(a.length-4)) {
        for(var k=j;k<(a.length-2);k  ) {
          if(a.charAt(k)=='.') valide1=true;
        }
      }
    }
  }
  
  if(valide1==false) { 
    alert("Veuillez saisir une adresse email valide.");
  return valide1;
  }

//-->
</script>

        <form class="signup-form" action="enregistuser.php" enctype="multipart/form-data" class="form"  id="Verif" name="Verif" method="post" onSubmit="return VerifMail();" >

           <input type="text" class="input" id="user_login" autocomplete="on" placeholder="Username" name="Username" required="required"> 
          <input type="text" id="Mail" placeholder="nom d'utulisateur ex: CHAOS12" size="35" class="input" id="user_login" autocomplete="on"  name="mailto" required="required" list="ui">

<datalist    id="ui"      >
                        

                                     <?php

                                      $db=new PDO('mysql:host=localhost;dbname=aaronna','root','',
  array(
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

                                      $sql = "SELECT mailto FROM user"; 
                                        $result=$db->query($sql);  

                                       $data=$result->fetchAll(PDO::FETCH_ASSOC);
                                      foreach ($data as $donne){
                                      
                                              
                                                       ?>
                                       <option selected="selected"><?php echo $donne['mailto']; ?></option>
                                     
                                       
                                          <?php

                                                          
                                             }?>
                                     
                                     
                              </datalist>
          <p style="margin-right: 23px; border-style: dotted; border:2px black; color : black;"> <b style="color: black;">SEXE:</b><select name="sexe"  style="margin-right: -03px; color: black;width: 40%;" >
             
             <option>Masculin</option>
             <option>Feminin</option>
           </select></p><br>
            <b style="color: black;">Photo:</b><input type="file" class="input" id="user_pass" autocomplete="on" placeholder="Photo"  required="required" alt="photo" title="photo" name="photo">
          <input type="password" class="input" id="user_pass" required="required" name="password" autocomplete="on" placeholder="Password">
                    
          <input type="text" required="required" class="input" id="user_pass" autocomplete="on" placeholder="telephone" name="tel"> 
          <input type="submit" class="button" value="Sign Up">
        </form><!--.login-form-->


<div class="help-text">
          <p>By signing up, you agree to our</p>
          <p><a href="#">Terms of service</a></p>
        </div>
      </div>
      

      <div id="login-tab-content">
        <form class="login-form" action="traitement.php" id="Verif" name="Verif" method="post" onSubmit="return VerifMail();">

          <input type="text" class="input" id="user_login" autocomplete="off" placeholder="Login" name="mailto"  type="text" id="Mail" placeholder="Tester une adresse email" size="35">
          
          <input type="password" class="input" id="user_pass" autocomplete="off" placeholder="Password" name="password">  
          <input type="checkbox" class="checkbox" id="remember_me">
          <label for="remember_me">Remember me</label>
          <input type="submit" class="button" value="Login">
        </form><!--.login-form-->

        
        <div class="help-text">
          <p><a href="#">Forget your password?</a></p>
        </div>
      </div>
    </div>
  </div>
        <script>
        jQuery(document).ready(function($) {
  tab = $('.tabs h3 a');

  tab.on('click', function(event) {
    event.preventDefault();
    tab.removeClass('active');
    $(this).addClass('active');

    tab_content = $(this).attr('href');
    $('div[id$="tab-content"]').removeClass('active');
    $(tab_content).addClass('active');
  });
});
        </script>
       </center><br><br>

<?php require_once'footer.php'; ?>