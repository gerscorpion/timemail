<html>
</head>
	<title>Mein Bereich - Registrieren</title>
</head>
<body>
<h3>Registrieren</h3>
<?php
if(!isset($_GET["page"])) {
?>
	<form action="register.php?page=2" method="post">
	Username:<input type="text" name="user" /><br />
	Passwort:<input type="password" name="pw" /><br />
	Passwort wiedeholen:<input type="password" name="pw2" /><br />
	<input type="submit" value="Senden" />
	</form>
<?php
}
?>
<?php
if(isset($_GET["page"])) {
	if($_GET["page"] == "2") {
	$user = strtolower($_POST["user"]);
	$pw = md5($_POST["pw"]);
	$pw2 = md5($_POST["pw2"]);
	
	if($pw != $pw2) {
		echo "Deine Passwörter stimmen nicht überein. Bitte wiederhole deine Eingabe....<a href=\"register.php\">zurück</a>";
	} else {
			$verbindung = mysql_connect("localhost", "meinewelt", "Passwort")
			or die ("Fehler im System");

			mysql_select_db("htmlworld")
			or die ("Verbidung zur Datenbank war nicht möglich...");
			
			$control = 0;		
			$abfrage = "SELECT user FROM login WHERE user = '$user'";
			$ergebnis = mysql_query($abfrage);
			while($row = mysql_fetch_object($ergebnis))
				{
					$control++;
				}	
			if($control != 0) {
				echo "Username schon vergeben. Bitte verwende einen anderen Usernamen....<a href=\"register.php\">zurück</a>";
			} else {
			$eintrag = "INSERT INTO login
			(user, passwort)

			VALUES
			('$user', '$pw')";

			$eintragen = mysql_query($eintrag);
			
			if($eintragen == true) {
				echo "Vielen Dank. Du hast dich nun registriert...<a href=\"index.php\">Jetzt anmelden</a>";
			} else {
				echo "Fehler im System. Bitte versuche es später noch einmal...";
			}
			mysql_close($verbindung);
			}
	}
	}
}
?>
</body>
</html>
