<?php

session_start();

//$num1= $_SESSION['num1'];
//$num2= $_SESSION['num2'];
$num1 = $_POST['number1'];
$num2 = $_POST['number2'];


// echo "$num1";
// echo "$num2";

#for adding value...
					$x=$num1;
					$y=$num2;
					$c=$x+$y;
				
			


  ?>

  <!DOCTYPE html>
<html>


<body>

<center>
<div>
<h3>Two sum of two value</h3>
 
    <label for="fname">Sum</label>
    <input type="Number" id="number1" name="number1" placeholder="<?php echo "$c";?>">

    <h3>Random number from 1 to 40</h3>

    <?php for ($i=1; $i <=20; $i++) { 
					# code...
					if(($i%10 )==0){
						echo(rand(1,40)."<br>");
					}
					else echo (rand(1,40)."&nbsp&nbsp ");	
				}
				?>
<br><br><br>
  
</div>
</center>
</body>
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
</html>
