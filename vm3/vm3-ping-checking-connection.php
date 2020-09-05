<?php

 $page = $_SERVER['PHP_SELF'];
 $sec = "1";
session_start();
$var_value=1;
$_SESSION['varname'] = $var_value;
error_reporting(E_ERROR | E_PARSE);


            //Pinging VM1 
            $hostname1="localhost:41062";//priority high
            $hostname2="localhoopst";//priority low

            $vm1status= ping("$hostname1", 80, 3);
            $vm2status= ping("$hostname2", 80, 3);
                  if($vm1status=="1" && $vm2status=="1")
                  {
                      echo"$vm1status"."|"."$vm2status";
                      $color1 = "#4CAF50";//green
                      $color2 = "#4CAF50";//green
                     // header("Location:vm1.php");
                  }
                  elseif ($vm1status=="1" && $vm2status=="0"){
                      echo"$vm1status"."|"."$vm2status";
                      $color1 = "#4CAF50";//green 
                      $color2 = "#E74C3C";//red
                      //header("Location:vm2.php");
                  }
                  elseif ($vm1status=="0" && $vm2status=="1"){
                      echo"$vm1status"."|"."$vm2status";
                      $color1 = "#E74C3C";//red 
                      $color2 = "#4CAF50";//green
                      //header("Location:vm2.php");
                  }
                  else if($vm1status=="0" && $vm2status=="0") {
                  echo"$vm1status"."|"."$vm2status";
                  $color1 = "#E74C3C";//red 
                  $color2 = "#E74C3C";//red
                  }
                 




function ping($host, $port, $timeout) 
            { 
              $tB = microtime(true); 
              $fP = fSockOpen($host, $port, $errno, $errstr, $timeout); 
              if (!$fP) {
               
               return 0; 
            } 
              $tA = microtime(true); 
              #return round((($tA - $tB) * 1000), 0)." ms"; 
              return 1;
            }

//header('Content-Type: text/css');

?>

<!DOCTYPE html>
<html>
<head>
  <title>server checking</title>
  <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
</head>
<body>
    <!-- <p>This page is checking server is active or not</p> -->
    <center>
   <div>
     <h3>Status of VM1 and VM2</h3>
 
       <input type="submit1" value="<?php echo "VM1"."$vm1status";?>">
       <input type="submit2" value="<?php echo "VM2"."$vm2status";?>">
  

<br><br><br>
  
</div>
</center>
</body>
<style>

input[type=submit1] {
  width: 20%;
  background-color: <?php echo "$color1";?>;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit2] {
  width: 20%;
  background-color: <?php echo "$color2";?>;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 50%;
}
</style>
</html>

