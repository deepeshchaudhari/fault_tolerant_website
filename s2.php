


<?php
echo "This page is generating random number from 70 to 100 and two value enter by user"."<br>";

				for ($i=1; $i <=20; $i++) { 
					# code...
					if(($i%10 )==0){
						echo(rand(70,100)."<br>");
					}
					else echo (rand(70,100)." ");	
				}
#for adding value...

				if (isset($_POST['add'])) {
					# code...
					$x=$_POST['fnum'];
					$y=$_POST['snum'];
					$c=$x+$y;
				
				}


  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title>S1 page</title>
  </head>
  <body>
		  <form method="post">
		  Enter first number <input type="number" name="fnum" placeholder="first number" required="" /><br><br>
		  Enter second number <input type="number" name="snum" placeholder="second number" required="" /><br>	   		   
	      <input type="submit"  name="add" value="ADD"/>
	      <br>
	      <?php 	echo"addition of both number is $c"; ?>

		</form>
  </body>
  </html>
