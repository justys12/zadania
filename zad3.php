<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

class Statyczna{
	
	public $I;
	public static $Liczba;
	
	public function __construct($I){
	$this->I=$I;
	$this->Zwieksz();
	
	}

	public static function Zwieksz(){
	self::$Liczba++;
	
	}

}

$s1=new Statyczna(3);
echo Statyczna::$Liczba;

$s2=new Statyczna(0);
echo Statyczna::$Liczba;

?>
</body>
</html>
