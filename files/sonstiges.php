<!DOCTYPE html>
<?php

require_once("../config.php");
  
?>
<html >
  <head>
    <meta charset="<?php echo $website_charset ?>">
    <title><?php  echo $website_title ?> | Sonstiges </title>
   
    
        <link rel="stylesheet" href="../css/style.css">
        <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
  <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>



<style type="text/css">
div.galerie{
	padding: 3px;
	background-color:#ebebeb;
	border:1px solid #CCC;
	float:left;
	margin:10px 10px 0  0;
	font-family:Arial, Helvetica, sans-serif;	
}
div.galerie:hover{
	border:1px solid #333;
}
div.galerie span{
	display:block;
	text-align:center;
	font-size:10px;
}
div.galerie a img{
		border:none;
}
div.file {
	padding:4px 4px 4px 30px;
}
div.file.even{
	background-color: #ebebeb;
}
div.file a {
	text-decoration:none;
}
div.file:hover {
	background-color:#CCC;
}
</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
 
  </head>

  <body>








<body>
<?php require('../menu.php'); ?>
<center>
<br><br><br><center>
 <div class="table-title">
  <h3>Sonstiges</h3> <br> <br>
</div></center>


<?php
$ordner = "sonstiges";
$alledateien = scandir($ordner);          				
 
foreach ($alledateien as $datei) {
	$dateiinfo = pathinfo($ordner."/".$datei); 
	$size = ceil(filesize($ordner."/".$datei)/1024); 
	if ($datei != "." && $datei != ".."  && $datei != "_notes" && $bildinfo['basename'] != "Thumbs.db") { 
 
			//Bildtypen sammeln
			$bildtypen= array("jpg", "jpeg", "gif", "png");
			//Dateien nach Typ prüfen, in dem Fall nach Endungen für Bilder filtern
			if(in_array($dateiinfo['extension'],$bildtypen))
  			{
	?>
            <div class="galerie">
                <a download href="<?php echo $dateiinfo['dirname']."/".$dateiinfo['basename'];?>">
                <img src="<?php echo $dateiinfo['dirname']."/".$dateiinfo['basename'];?>" width="140" alt="Vorschau" /></a> 
                <span><?php echo $dateiinfo['filename']; ?> (<?php echo $size ; ?>kb)</span>
            </div>
    		<?php 
			// wenn keine Bildeindung dann normale Liste für Dateien ausgeben
			} else { ?>
            <div class="file">
            	<a href="<?php echo $dateiinfo['dirname']."/".$dateiinfo['basename'];?>">&raquo <?php echo $dateiinfo['filename']; ?></a> (<?php echo $dateiinfo['extension']; ?> | <?php echo $size ; ?>kb)
            </div>
            <?php } ?>
<?php
	};
 };
?>
 
</center>


    
    
  </body>
</html>
