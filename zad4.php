<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
class Data{
	private $data;
	private $dataPozniej;
	private $dataWczesniej;
	private $rok;
	private $miesiac;
	private $dzien;
	private $format;
	
	
	public function __construct($parametr,$data){
		$this->format=$parametr;
		$date_array=explode("-",$data);

		$this->rok=$date_array[0];
		$this->miesiac=$date_array[1];
		$this->dzien=$date_array[2];
	
		$this->data=mktime(0,0,0,$this->miesiac,$this->dzien,$this->rok);
	}
		
	public function Get(){
		return getdate($this->data);
	}
	
	public function Next(){
		$this->dataPozniej=mktime(0,0,0,$this->miesiac,$this->dzien+7,$this->rok);
	}
	
	public function Earlier(){
		$this->dataWczesniej=mktime(0,0,0,$this->miesiac,$this->dzien-7,$this->rok);
	}
	
	public function Wypisz($p){
	
		switch ($p){
			case '0':
			$tab=getdate($this->data);
			break;
			
			case "N":
			$tab=getdate($this->dataPozniej);
			break;
			
			case "E":
			$tab=getdate($this->dataWczesniej);
			break;
			
		}
		
		switch ($this->format){
			case "Rmd":
			echo $tab['year']."-".$tab['mon']."-".$tab['mday'];
			break;
			
			case "dmR":
			echo $tab['mday']."-".$tab['mon']."-".$tab['year'];
			break;

			case "dmonthR":		
			echo $tab['mday']."-".$tab['month']."-".$tab['year'];
			break;
			
			case "Rmonthd":		
			echo $tab['year']."-".$tab['month']."-".$tab['mday'];
			break;

		}
	}
	
	
}

$Dat1= new Data('Rmd','2013-09-05');
echo 'Podana data to ';
echo $Dat1->Wypisz(0).'<br/>';
echo $Dat1->Next().'Tydzień później będzie ';
echo $Dat1->Wypisz('N').'<br/>';
echo $Dat1->Earlier().'Tydzień wcześniej było ';
echo $Dat1->Wypisz('E').'<br/><br/>';

$Dat2= new Data('dmR','2011-07-02');
echo 'Podana data to ';
echo $Dat2->Wypisz(0).'<br/>';
echo $Dat2->Next().'Tydzień później będzie ';
echo $Dat2->Wypisz('N').'<br/>';
echo $Dat2->Earlier().'Tydzień wcześniej było ';
echo $Dat2->Wypisz('E').'<br/><br/>';

$Dat3= new Data('dmonthR','2016-03-28');
echo 'Podana data to ';
echo $Dat3->Wypisz(0).'<br/>';
echo $Dat3->Next().'Tydzień później będzie ';
echo $Dat3->Wypisz('N').'<br/>';
echo $Dat3->Earlier().'Tydzień wcześniej było ';
echo $Dat3->Wypisz('E').'<br/><br/>';

$Dat4= new Data('Rmonthd','2012-12-12');
echo 'Podana data to ';
echo $Dat4->Wypisz(0).'<br/>';
echo $Dat4->Next().'Tydzień później będzie ';
echo $Dat4->Wypisz('N').'<br/>';
echo $Dat4->Earlier().'Tydzień wcześniej było ';
echo $Dat4->Wypisz('E').'<br/><br/>';

?>

</body>
</html>
