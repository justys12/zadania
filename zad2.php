<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php

class Sumator{

	private $Liczby;
	
	public function __construct($tablica){
		$this->Liczby=$tablica;
	}
	
	public function Get(){
		return $this->Liczby;
	}
	
	public function Suma(){
		$suma=0;
		foreach ($this->Liczby as $liczba){
		$suma+=$liczba;
		}
	return $suma;
	}
	
	public function SumaPodziel3(){
		$suma=0;
		foreach ($this->Liczby as $liczba){
			if($liczba!=0 && $liczba%3==0){$suma++;}
		}
		return $suma;
	}
	
	public function IleElementow(){
		return count($this->Liczby);
	}
	
	public function WypiszElementy(){
		foreach ($this->Get() as $liczba){echo $liczba." ; ";
		}
	}

	public function Index($lowIndex, $highIndex){
		echo "Elementy co namniej równe ".$lowIndex." i co najwyżej równe ".		$highIndex." to:";
		foreach ($this->Liczby as $liczba){
			if($liczba>= $lowIndex && $liczba<=$highIndex){
				echo " ".$liczba." ; "
			;}
		}
	}

}

$tab1=array(3,0,-5,6,-12,4,21,50);
$sum1=new Sumator($tab1);

echo "Elementy tablicy to: ";
echo $sum1->WypiszElementy()." ";

echo "<br/>Suma wynosi: ".$sum1->Suma();

echo "<br/>Suma liczb podzielnych przez 3 wynosi: ".$sum1->SumaPodziel3()."<br/>";

echo "Tablica zawiera: ".$sum1->IleElementow()." elementów.<br/>";

$sum1->Index(0,20);

?>

</body>
</html>
