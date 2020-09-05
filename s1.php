<?php

echo "This page is generating random number from 1 to 40"."<br>";
for ($i=1; $i <=20; $i++) { 
	# code...
	if(($i%10 )==0){
		echo(rand(1,40)."<br>");
	}
	else echo (rand(10,40)." ");

}

  ?>