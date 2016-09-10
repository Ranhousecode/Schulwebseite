<?php

require_once("config.php");
/*** KONFIGURATION ***/

// Definiert Konstanten für das Script
define('MD5_ENCRYPT', true); // Aktiviert Verschlüsselung für Passwort. Wenn "true" gesetzt, müssen Passwörter von $usrdata md5-verschlüsselt vorliegen. Standard: false
define('SUCCESS_URL', 'index.php'); // URL, zu welcher nach erfolgreichen Login umgeleitet wird.
define('LOGIN_FORM_URL', 'login.html'); // URL mit Anmeldeformular
// Array mit Benutzerdaten: Besteht aus Array-Elementen mit paarweisen Benutzernamen und Passwörtern
$usrdata = array(

	array(
		"usr" =>  $account_username ,
		"pwd" =>  $account_password   
		
	),
	array(
		"usr" => "benutzername_fur_person",
		"pwd" => "passwort_fur_person"
	)
	/* ... */
);






header("Content-Type: text/html; charset=utf-8"); // Melde Browser die verwendete Zeichenkodierung

// PHP-Session starten und aktuellen Stand abfragen
session_start();
$_SESSION['logged_in'] = (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) ? true : false;
$_SESSION['usr'] = (isset($_SESSION['usr'])) ? $_SESSION['usr'] : '';



$error = array();
if(!isset($_POST['login'])){
	header('Location: '.LOGIN_FORM_URL);
}else{
	$usr = (!empty($_POST['user']) && trim($_POST['user']) != '') ? $_POST['user'] : false;
	$pwd = (!empty($_POST['password']) && trim($_POST['password']) != '') ? $_POST['password'] : false;
	
	if(!$usr || !$pwd){
		if(count($error) == 0)
			$error[] = "<br> <br><center>Bitte geben Sie Benutzername und Passwort ein.</center>";
	}else{
		$pwd = (MD5_ENCRYPT === true) ? md5($pwd) : $pwd; // Passwort eingabe MD5-encrypten, falls Option gesetzt ist
		foreach($usrdata as $ud){ // Benutzer-Liste durchlaufen und je mit Formular-Eingaben vergleichen
			if($usr != $ud['usr'] || $pwd != $ud['pwd']){
				if(count($error) == 0)
?>
			<script language="JavaScript" type="text/javascript">
setTimeout("location.href='flogin.html'", 0); 
</script>
<?php		
			}else{
				$_SESSION['logged_in'] = true;
				$_SESSION['usr'] = $usr;
				header('Location: '.SUCCESS_URL);
			}
		}
	}
}

?>
