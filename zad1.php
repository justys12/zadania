<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php


//1
class Licz{
private $wartosc;

public function __construct($wartosc){
$this->wartosc=$wartosc;
}

public function Dodaj($liczba){
return $this->wartosc += $liczba;
}

public function Odejmij ($liczba){
return $this->wartosc-=$liczba;
}

public function Get(){
return $this->wartosc;
}
}

$Suma= new Licz(1);
echo $Suma->Get().'<br/>';

$Suma->Dodaj(2);
echo $Suma->Get().'<br/>';


$Suma->Odejmij(5);
echo $Suma->Get().'<br/>';
?>





</body>
</html>
