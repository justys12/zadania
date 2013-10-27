<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

class Tablica {
	private $licznik;
	private $tablica;
	public $inny;
	
	public function __construct(){
	
		$this->tablica=array();
		$this->licznik=0;
	
	}
	
	public function Dodaj($imie,$nazwisko){
	
		$this->tablica[$this->licznik]=new Osoba($imie,$nazwisko);
		$this->licznik ++;
	
	}
	
	public function getLicznik(){
		echo "licznik: ".$this->licznik;
	
	}
	
	public function Wypisz(){
		echo 'wypisuje';
		for ($inny=$this->licznik-1;$inny>=0;$inny -- ){
			echo $this->tablica[$inny]->getImie()." ";
			echo ' '.$this->tablica[$inny]->getNazwisko().' <br/>';
	}
	
	}


}

?>
</body>
</html>
