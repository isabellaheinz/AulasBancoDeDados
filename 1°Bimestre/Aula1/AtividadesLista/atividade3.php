<?php

$ano = 1980;

for($ano; $ano <= 2024; $ano++){
	if($ano%4==0 and $ano%100!=0){
		print $ano . " - ";
	} else if ($ano%4==0 and $ano%400==0){
		print $ano . " - ";
	}
}

