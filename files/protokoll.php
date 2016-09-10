<!DOCTYPE html>
<?php
require_once("../config.php");
?>
<html >
  <head>
    <meta charset=<?php echo $website_charset ?>">
    <title><?php  echo $website_title ?> | protokolle </title>
   
    
        <link rel="stylesheet" href="../css/style.css">
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

  <body>








<body>
<?php require('../menu.php'); ?>






<?php

 echo '<br><br><br><center>
 <div class="table-title">
  <h3>Protokolle</h3> <br> <br>
</div></center>
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Dateiname</th>
<th class="text-left">Downloaden</th>
</tr>
</thead>
<tbody class="table-hover">
<thead>';

// Ordnername 
$ordner = "protokolle"; //auch komplette Pfade möglich ($ordner = "download/files";)
 
// Ordner auslesen und Array in Variable speichern
$alledateien = scandir($ordner); // Sortierung A-Z
// Sortierung Z-A mit scandir($ordner, 1)               				
 
// Schleife um Array "$alledateien" aus scandir Funktion auszugeben
// Einzeldateien werden dabei in der Variabel $datei abgelegt
foreach ($alledateien as $datei) {
 
	// Zusammentragen der Dateiinfo
	$dateiinfo = pathinfo($ordner."/".$datei); 
	//Folgende Variablen stehen nach pathinfo zur Verfügung
	// $dateiinfo['filename'] =Dateiname ohne Dateiendung  *erst mit PHP 5.2
	// $dateiinfo['dirname'] = Verzeichnisname
	// $dateiinfo['extension'] = Dateityp -/endung
	// $dateiinfo['basename'] = voller Dateiname mit Dateiendung
 
	// Größe ermitteln zur Ausgabe
	$size = ceil(filesize($ordner."/".$datei)/1024); 
	//1024 = kb | 1048576 = MB | 1073741824 = GB
 
	// scandir liest alle Dateien im Ordner aus, zusätzlich noch "." , ".." als Ordner
	// Nur echte Dateien anzeigen lassen und keine "Punkt" Ordner
	// _notes ist eine Ergänzung für Dreamweaver Nutzer, denn DW legt zur besseren Synchronisation diese Datei in den Orndern ab
	if ($datei != "." && $datei != ".."  && $datei != "_notes") { 
	
	echo '
			<tr>
			<td class="text-left">'.$dateiinfo[filename].'</td>
		
			<td class="text-left"><a href="'. $dateiinfo['dirname'] .'/'.$dateiinfo['basename'].'">Downloaden</td>
			
		</tr>
	
	';
	?>
  

<?php

	};
 };
 echo '
</tbody>
</table> 
 ';
?>     
</ul>
    
    
    
  </body>
</html>
