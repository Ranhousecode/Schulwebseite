<!DOCTYPE html>
<html >
  <head>
    <meta charset="<?php echo $website_charset ?>">
    <title><?php $website_title ?> | Hochladen </title>
   
    
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
<!-- Google web fonts -->
		<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />

		<!-- The main CSS file -->
		<link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>








<body>
<?php require('../menu.php'); ?>
<center>
<div id="behold">

<div id="middle">

<center>
      <div id="middle"><form id="upload" method="post" action="uploada.php" enctype="multipart/form-data">
			<div id="drop">
				Arbeitsblätter

				<a>Browse</a>
				<input type="file" name="upl" multiple />
			</div>

			
					<ul>
				<!-- The file uploads will be shown here -->
			</ul>	
	</form></div>
   

	</center>	
	</div>


    	<!-- JavaScript Includes -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="assets/js/jquery.knob.js"></script>

		<!-- jQuery File Upload Dependencies -->
		<script src="assets/js/jquery.ui.widget.js"></script>
		<script src="assets/js/jquery.iframe-transport.js"></script>
		<script src="assets/js/jquery.fileupload.js"></script>
		
		<!-- Our main JS file -->
		<script src="assets/js/script.js"></script>


		<!-- Only used for the demos. Please ignore and remove. --> 
        <script src="http://cdn.tutorialzine.com/misc/enhance/v1.js" async></script>
    
  </body>
</html>
