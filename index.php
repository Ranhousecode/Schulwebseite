<?php
require_once("../config.php");
session_start();
if(!$_SESSION['logged_in'])
	header("Location: login.html");
?>
<!DOCTYPE html>
<html >
<meta charset = "utf-8">  </meta>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $website_title  ?> | Startseite </title>
   
    
        <link rel="stylesheet" href="/css/style.css">
        <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
  <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>



<style type="text/css">
ul#galerie {
	padding:0;
	margin:0;
	list-style-type:none;
	font-family:Arial, Helvetica, sans-serif;
}
ul#galerie li{
	padding: 3px;
	background-color:#ebebeb;
	border:1px solid #CCC;
	float:left;
	margin:0 10px 10px 0;	
}
ul#galerie li:hover{
	border:1px solid #333;
}
ul#galerie li span{
	display:block;
	text-align:center;
	font-size:10px;
}
ul#galerie li a img{
		border:none;
}
</style>

<style type="text/css">
ul#galerie {
	padding:0;
	margin:0;
	list-style-type:none;
	font-family:Arial, Helvetica, sans-serif;
}
ul#galerie li{
	padding: 3px;
	background-color:#ebebeb;
	border:1px solid #CCC;
	float:left;
	margin:0 10px 10px 0;	
}
ul#galerie li:hover{
	border:1px solid #333;
}
ul#galerie li span{
	display:block;
	text-align:center;
	font-size:10px;
}
ul#galerie li a img{
		border:none;
}
</style>
  </head>


<?php require('menu.php'); ?>

<center>
<br><br><br><center>
 <div class="table-title">
  <h3>Startseite</h3> <br> <br>
</div></center>

<body>
  <div class="plans">
    <div class="plan">
      <h2 class="plan-title">Protokolle</h2>
      <ul class="plan-features">
        <li><strong>Alle Protokolle</strong> </li>
      </ul>
      <a href="http://<?php echo $website_url  ?>/files/protokoll.php" class="plan-button">Protokolle Durchsuchen</a>
    </div>
    <div class="plan plan-tall">
      <h2 class="plan-title">Hochladen</h2>
      <ul class="plan-features">
     
        <li><strong>Hier können sie ihre Datein Hochladen</strong></li>
      </ul>
      <a href="http://<?php echo $website_url  ?>/files/upload.php" class="plan-button">Datei Hochladen</a>
    </div>
    <div class="plan">
      <h2 class="plan-title">Arbeitsblätter</h2>
    
      <ul class="plan-features">
        <li><strong>Alle Arbeitsmaterialien</strong></li>
      </ul>
      <a href="http://<?php echo $website_url  ?>/files/arbeitsbleatter.php" class="plan-button">Arbeitsblätter Durchsuchen</a>
    </div>
  </div>
</body>
</html>

    
  </body>
</html>

