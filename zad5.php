<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php

class Liczba{
	public $cyfry;
	
	public function __construct($liczba){
		$dlugosc=strlen($liczba);
		$this->cyfry=array();
		for ($i=0;$i<$dlugosc;$i++){
			$ciag=substr($liczba,$i,1);
			if ($ciag!='-' && $ciag!=','&& $ciag!='.'){
				$this->cyfry[$i]=$ciag;
			}
		}
	}

	public function Wypisz(){
		foreach($this->cyfry as $i){
			echo $i." * ";
		}
	}
	
	public function Pomnoz($int){
		$licz='';
		foreach($this->cyfry as $i){
			$licz=$licz.$i;
		}
		$l=sprintf($licz);
		$l=$l*$int;
		return $l;
	}


	public static function Silnia($int){
		 $silnia=$int;
		for($i=$int-1;$i>0;$i--){
			$silnia=$silnia*$i;
		}
		return $silnia;
	
	}


}


$liczbaPierwsza=new Liczba('-10,16542');

$liczbaPierwsza->Wypisz();
echo "<br/>".$liczbaPierwsza->Pomnoz(3);

echo "<br/>".Liczba::Silnia(6);

?>
</body>
</html>
