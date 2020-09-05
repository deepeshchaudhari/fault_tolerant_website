<!DOCTYPE html>
<html>
<head>
	<title>server checking</title>
</head>
<body>
		<p>This page is checking server is active or not</p>
</body>
</html>


<?php

function ping($host, $port, $timeout) 
{ 
  $tB = microtime(true); 
  $fP = fSockOpen($host, $port, $errno, $errstr, $timeout); 
  if (!$fP) {
   
   return "down"; 
} 
  $tA = microtime(true); 
  return round((($tA - $tB) * 1000), 0)." ms"; 
}

//Echoing it will display the ping if the host is up, if not it'll say "down".
$hostname="localhost";
$time= ping("$hostname", 80, 3);
			if($time=="down")
			{
					echo"$hostname is down";
			}
			else
			echo"$hostname is active giving response in $time";



?>