<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?php

class Osoba{
	protected $imie;
	protected $nazwisko;
	
	public function __construct ($imie,$nazwisko){
		$this->imie=$imie;
		$this->nazwisko=$nazwisko;
	
	
	}
	
	public function getImie(){
	return $this->imie;
	
	}
	
	public function getNazwisko(){
	return $this->nazwisko;
	}
	
	public function setImie($tekst){
		$this->imie=$tekst;
	}
	
	public function setNazwisko($tekst){
		$this->nazwisko=$tekst;
	}


}



?>
</body>
</html>
