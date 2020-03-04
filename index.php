<?php
header ("Content-Type: text/html; charset=utf-8");
echo "<!DOCTYPE html><html><head><meta charset='utf-8'><meta name='viewport' content='width=device-width, initial-scale=1'><!--[if lt IE 9]><meta http-equiv='X-UA-Compatible' content='IE=edge'><![endif]--><style>html{height:100%;font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;font-size:10px;-webkit-tap-highlight-color:transparent}*,:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}body{height:100%;margin:0;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}button,h3,input{font-family:inherit}h3{font-weight:500;line-height:1.1;color:inherit;margin-top:0;margin-bottom:20px;font-size:24px}.authform{width:300px;background-color:#e1e5ec;padding:25px 27px;margin: 0 auto;-moz-border-radius:4px;-webkit-border-radius:4px;border-radius:4px}</style><title>Добро пожаловать!</title></head><body style='text-align: center'><table style='width:100%;height:100%;border:none'><tbody><tr><td style='padding: 20px'><div class='authform'><h3>Добро пожаловать!</h3><div style='margin-bottom: 18px'>Open Server Panel работает ;-)</div><a href='https://ospanel.io/docs/' id='link' style='color: #4D5662'>Руководство пользователя</a></td></tr></tbody></table></body></html>";
?>
<div>
	<?php
		echo "Привет, я - скрипт PHP!"; 
	?>
</div>
<div>
	<?php 
		for ($i=10; $i <= 22; $i++) { 
			if ($i%2 == 0) print $i;
		}
	?>
</div>
<div>
	<?php 
		define("pi", 3.14);
		echo "Матем конст Пи равняется", pi;
	?>
</div>
<div>
	<?php 
		$int=1;
		$new_int=(string) $int;
		echo $new_int+$new_int;
	?>
</div>
<div>
	<?php
		$k=0; 
		for ($i=10; $i <= 55; $i++) { 
			if ($i%3 == 0) $k++;
		}
		echo "Количество чисел кратных 3 равно", $k;
	?>
</div>
<div>
	<?php
		$chislo = array(26, 17, 136, 12, 79, 15);
		$sum=0;
		foreach ($chislo as $value) {
			$sum= $sum + pow($value, 2);
		}
		echo "$sum";
	?>
</div>
<div>
	<?php
		function myfunc($stroka, $symbol){
			$b = 0;
			$b = strrpos($stroka, $symbol);
			echo "$b";
		}
		myfunc("D:\WebServers\home\testsite\www\myfile.txt", "m");
	?>
</div>
<?php

function getAbbreviation($name)
{
	$name = mb_strtolower($name);
	$result = mb_strtoupper( mb_substr($name, 0, 1) );
	$position = '';
	for($i = 1; $i < mb_strlen($name); $i++){
		$symbol = mb_substr($name, $i, 1) ;
		if($position == 'next'){
			$symbol = mb_strtoupper($symbol);
			$result .= $symbol;
		}
		if($symbol == ' '){
			$position = 'next';
		}else{
			$position = '';
		}

	}
	return $result;
}
var_dump( getAbbreviation("донбасская ГОСУДАРСТВЕННАЯ машиностроительная академия") );
function truncate_string($str, $maxsymbol)
{
	$symb = '...';
	for ($i=0; $i < mb_strlen($str); $i++) { 
		$symbol = mb_substr($str, $i, 1) ;
		if ($i < $maxsymbol) {
			$res .= $symbol;
		}else{
			$res .= $symb;
			break;
		}
	}
	return $res;
}
var_dump( truncate_string("донбасская", 7) );
function getCountSymbol($stroka, $symb)
{
	$count = 0;
	for ($i=0; $i < mb_strlen($stroka); $i++) {
		$symbol = mb_substr($stroka, $i, 1);
		if ($symbol == $symb) {
			$count++;
		}
	}
	echo "Количество искомых символов $symb равно ", $count;
}
getCountSymbol("телефон", "е");
function getShortFio($str)
{
	$FIO = explode(" ", $str);
	$FIO[1] = mb_strtoupper(mb_substr($FIO[1], 0, 1));
	$FIO[2] = mb_strtoupper(mb_substr($FIO[2], 0, 1));
	$shortFIO .= $FIO[0]." ".$FIO[1].".".$FIO[2].".";
	echo $shortFIO;
}
getShortFio("Иванов Иван Иванович");
