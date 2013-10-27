<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
//zad.11

class A{
	public $X;
}

$a=new A();
$b=$a;
$b->X=3;
echo $b->X;

$a->X=1;
echo $a->X;

echo $b->X;



?>


</body>
</html>
