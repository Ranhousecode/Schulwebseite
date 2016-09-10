<?php
session_start();
if(!$_SESSION['logged_in'])
	header("Location: login.html");
require_once("../config.php");
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="<?php  echo $website_charset ?>">
    <title><?php echo $website_title ?> | Protokolle </title>
   
    
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

  <body bgcolor=#3e94ec>




<body>
<?php
include("../menu.php");
?>

</body>
</html>

    
  </body>
</html>

