<?php session_start();
      //Put session start at the beginning of the file
$add_page="http://localhost:41064/www/vm2/vm2.php";

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         $_SESSION['num1'] = $_POST['number1'];
         $_SESSION['num2'] = $_POST['number2'];
        
        if($_SESSION['num1'] && $_SESSION['num2'] ) {

           //----------------------------------------------------------
           //Pinging VM1 
            $hostname1="localhost:41062";//priority high
            $hostname2="localhost:41064/";//priority low
            
	    
            $vm1status= ping("$hostname1", 80, 3);
            $vm2status= ping("$hostname2", 80, 3);
                  if($vm1status=="1" && $vm2status=="1")
                  {
			$add_page="http://localhost:41062/www/vm1/vm1.php";
                    // header("Location:http://localhost:41062/www/vm1/vm1.php");
                  }
                  elseif ($vm1status=="1" && $vm2status=="0"){
                     $add_page="http://localhost:41062/www/vm1/vm1.php";
                   //  header("Location:http://localhost:41062/www/vm1/vm1.php");
                  }
                  elseif ($vm1status=="0" && $vm2status=="1"){
                      
		     $add_page="http://localhost:41064/www/vm2/vm2.php";
                    // header("Location:http://localhost:41064/www/vm2/vm2.php");
                  }
                  else if($vm1status=="0" && $vm2status=="0") {
              
               	     header("Location:../404error.html");
                  }
          //----------------------------------------------------------
            }
    }
//-----------------Pinging servers----------------
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

?>

<!DOCTYPE html>
<html>
	<body>
	<center>
		<div>
		<h3>Enter two value to sum</h3>
  
			<form action= <?php echo"$add_page"; ?> method="POST" id="sum">
		 	<label for="fname">Number 1</label>
	  		<input type="Number" id="number1" name="number1" placeholder="Number 1" required="Number">
			<br>
	   		<label for="Number">Number 2</label>
	 		<input type="Number" id="number2" name="number2" placeholder="Number 2" required="Number">
			<br><br><br>	   
	     		<input type="submit" form="sum" value="Calculate sum">
 		</form>

		</div>
	</center>
	</body>
<!------------------------------------Style---------------------------------->
<style>
input[type=number], select {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 20%;
  background-color: #4CAF50;
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
<!------------------------------------------------------------------------->
</html>
