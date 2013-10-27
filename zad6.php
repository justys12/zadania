<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
//6

class Osoba{

	protected $imie;
	protected $nazwisko;
	protected $wiek;
	
	public function __construct($imie, $nazwisko, $wiek){
		$this->imie=$imie;
		$this->nazwisko=$nazwisko;
		$this->wiek=$wiek;
	}
	
	public function Wypisz(){
	echo 'imię: '.$this->imie.'<br/>';
	echo 'nazwisko: '.$this->nazwisko.'<br/>';
	echo 'wiek: '.$this->wiek.'<br/>';
	}

}

class Ksiazka{
	protected $tytul;
	protected $autor;
	protected $data_wydania;
	
	public function __construct($tytul, $imie_autora, $nazwisko_autora,  $wiek_autora, $data){
	$this->tytul=$tytul;
	$this->data_wydania=$data;
	
	$this->autor=new Osoba ($imie_autora, $nazwisko_autora, $wiek_autora);
	}
	
	public function Wypisz(){
	
	echo 'Tytuł:'.$this->tytul.'<br/>';
	echo 'Dane autora: <br/>';
	echo $this->autor->Wypisz();
	
	echo 'Data wydania: '.$this->data_wydania.'<br/>';
	}
	
	public function WypiszTytul(){
	
	echo $this->tytul.'<br/>';
	
	}
	

}

class Czytelnik extends Osoba{
	protected $przeczytane=array();
	protected $j=0;
	
	public function PrzeczytalNowa($tytul, $imie_autora, $nazwisko_autora,  $wiek_autora, $data){
	$this->przeczytane[$this->j]=new Ksiazka ($tytul, $imie_autora, $nazwisko_autora,  $wiek_autora, $data);
	$this->j++;
	
	}
	
	public function Przeczytal($ksiazka){
	$this->przeczytane[$this->j]=$ksiazka;
	$this->j++;
	
	}
	
	
	public function WypiszKsiazki(){
	echo "Ten czytenik przeczytał: <br/> <ul>";
	foreach($this->przeczytane as $m){
			echo "<li>";
			$m->WypiszTytul();
			echo " </li> ";
			}
			echo "</ul>";
	}
	
	public function Wypisz(){
	echo "Czytenik: <br/> ";
	echo $this->imie.' ';
	echo $this->nazwisko.', ';
	echo $this->wiek.' lat <br/>';
	$this->WypiszKsiazki();
	}


}


class Recenzent extends Czytelnik{
	
	
	public function Wypisz(){
	echo "Ten recenzent przeczytał: <br/> <ul>";
	foreach($this->przeczytane as $m){
			echo "<li>";
			$m->WypiszTytul();
			echo "ocena: ".rand(1,10)." </li> ";
			}
			echo "</ul>";
	}



}

class KsiazkaDokumentalna extends Ksiazka{
	protected $opis;
	
	public function __construct($tytul, $imie_autora, $nazwisko_autora,  $wiek_autora, $data, $opis){
	$this->tytul=$tytul;
	$this->data_wydania=$data;
	$this->opis=$opis;
	
	$this->autor=new Osoba ($imie_autora, $nazwisko_autora, $wiek_autora);
	}
	
	public function Wypisz(){
	
	echo 'Tytuł:'.$this->tytul.'<br/>';
	echo 'Dane autora: <br/>';
	echo $this->autor->Wypisz();
	
	echo 'Data wydania: '.$this->data_wydania.'<br/>';
	echo 'Opis rozszerzony:'.$this->opis.'<br/>';
	}


}

class KsiazkaPrzygodowa extends Ksiazka{
	protected $opis;
	
	public function __construct($tytul, $imie_autora, $nazwisko_autora,  $wiek_autora, $data, $opis){
	$this->tytul=$tytul;
	$this->data_wydania=$data;
	$this->opis=$opis;
	
	$this->autor=new Osoba ($imie_autora, $nazwisko_autora, $wiek_autora);
	}
	
	public function Wypisz(){
	
	echo 'Tytuł:'.$this->tytul.'<br/>';
	echo 'Dane autora: <br/>';
	echo $this->autor->Wypisz();
	
	echo 'Data wydania: '.$this->data_wydania.'<br/>';
	echo 'Opis rozszerzony:'.$this->opis.'<br/>';
	}

}




$ja=new Osoba('Justyna', 'Zinek', 28);
echo "ja <br/>";
$ja->Wypisz();

echo "<br/>";
$ksiazka1=new Ksiazka('Wojna w blasku dnia','Peter', 'Brett', 45, '2013-08-20');
$ksiazka1->Wypisz();

echo "<br/>";
$czyt1=new Czytelnik ('Ania','Nowak',12);
$czyt1->Wypisz();
echo "<br/>";
$ksiazka2=new Ksiazka('Pan Tadeusz','Adam', 'Mickiewicz', 100, '2010-05-22');
$ksiazka2->Wypisz();
echo "<br/>";
$ksiazka3=new Ksiazka('Kamienie na szaniec','Aleksander', 'Kamiński', 30, '2008-02-10');
$ksiazka3->Wypisz();
echo "<br/>";
echo "<br/>";
$ksiazka4=new KsiazkaPrzygodowa('Tajemnicza wyspa','Juliusz', 'Verne', 39, '2010-12-12','to jest opis');
$ksiazka4->Wypisz();
echo "<br/>";

echo "<br/>";
$ksiazka5=new KsiazkaDokumentalna('Reportaż','Jan', 'Janicki', 60, '2008-01-10',' ');
$ksiazka5->Wypisz();
echo "<br/>";


$czyt1->PrzeczytalNowa('Duma i uprzedzenie','Jane', 'Austen', 31, '2002-05-01');
$czyt1->WypiszKsiazki();
echo "<br/>";
$czyt1->Przeczytal($ksiazka2);
$czyt1->WypiszKsiazki();
echo "<br/><br/>";
$czyt1->Przeczytal($ksiazka4);
$czyt1->WypiszKsiazki();
echo "<br/><br/>";
$czyt1->Wypisz();

echo "<br/><br/>";

$rec1=new Recenzent ('Adam','Rak',72);
$rec1->PrzeczytalNowa('Kurtyna','Agata', 'Christie', 81, '2005-02-05');
$rec1->Przeczytal($ksiazka3);
$rec1->Przeczytal($ksiazka5);
$rec1->Wypisz();

echo "<br/>";echo "<br/>";echo "<br/>";

$lista=array();
$lista[0]=new Osoba('Ania','Nowak',12);
$lista[1]=$czyt1;
$lista[2]=$rec1;

foreach ($lista as $l){
$l->Wypisz();
}



?>



</body>
</html>
