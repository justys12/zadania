<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
//zad.12
class Kolo{


}

class Samochod{

	private $lp;
	private $lt;
	private $pp;
	private $pt;
	
	public function __contruct (){
		$this->lp=new Kolo();
		$this->lt=new Kolo();
		$this->pp=new Kolo();
		$this->pt=new Kolo();
	}
	

}

$auto=new Samochod();


?>
</body>
</html>
