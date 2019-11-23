<?php
// hareket problemi
// yapım:sefa sayğan

$yol=100;
$hiz=20;
$zaman=5;

	$yol=$hiz*$zaman; // hız ve zaman çarpılır yol elde edilir
	echo "Yol: ".$yol; // yol ekrana yazdırılır
	echo "<br>";
	$hiz=$yol/$zaman;  //yol ve zaman bölünürse hız elde edilir
	echo "Hız: ".$hiz; // hız ekrana yazdırılır
	echo "<br>";
	$zaman=$yol/$hiz;  //yol ve hız bölünürse zaman elde edilir
	echo "Zaman: ".$zaman; // zaman ekrana yazdırılır.
echo "<br><br>";

// Hareket probleminde hareketliler aynı anda ve zıt yönde ve aynı anda aynı yönde durumu

$vhiz1=40; //1ci arabanın hızı
$vhiz2=20; //2ci arabanın hızı
$tzaman=5; // zamanı
$xyolzit=100; // zıt yönde olan yol
$xyolayniyon=100; // aynı yönde olan yol

$xyolzit=($vhiz1+$vhiz2)*$tzaman; // 2 hızlar toplanır ve zamanla çarpılarak zıt yol bulunur
$xyolayniyon=($vhiz1-$vhiz2)*$tzaman; // 2 hızlar çıkartılır ve zamanla çarpılarak aynı yön yol bulunur.
echo "Hareketliler Aynı anda ve zıt yöndeyken:".$xyolzit."<br> Formül: x=(v1 + v2).t";
echo "<br><br>";
echo "Hareketliler aynı anda ve aynı yönde ise:".$xyolayniyon."<br> Formül: x=(v1 - v2).t";
 
?>