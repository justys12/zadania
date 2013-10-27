<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?php
require_once 'autoloader.php';


  
echo '<form action="zad7.php" method="GET">

imie:   <input type=text name=imie><br>
nazwisko: <input type=text name=nazwisko><br>

<input type=submit value="Wyślij">
</form> ';

$inny;
$tab1=new Tablica();


if(isset($_GET['imie'])){
	$imie=$_GET['imie'];
	$nazwisko=$_GET['nazwisko'];
		
	$tab1->Dodaj($imie,$nazwisko);
	

	}

echo '<br/><br/><form action="zad7.php" method="POST">

<input type=submit value="Wypisz">
</form> <br/>';

if(isset($_POST["Wypisz"])){

	$tab1->Wypisz();
	
	
}

?>
</body>
</html>
