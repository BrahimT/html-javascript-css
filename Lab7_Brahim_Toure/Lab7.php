<?php
function findOddEven(){
	
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>PHP to find Odd or Even number!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
			<form action="" method="post">
	        <div style="margin-top: 10px;" id="result">
             <h2>PHP to find Odd or Even number!</h2>
				Enter a number:  <input type="text" id="num" name="num" value="0" />
			<input type="submit" name="btn" value="find Odd or Even number">
            </div>
			
			
<?php
if (isset($_POST['btn'])) {    
	$Num= $_POST['num'];
	if (($Num < 4) || ($Num > 100)){
		do {
			exit("Invalid number - please enter a number between 4 and 100");
		} while (($Num < 4) || ($Num > 100));
	}
	
	$even = [];
	$odd = [];
	$evenCtr = 0;
	$oddCtr = 0;
	
	for($n = 1; $n <= $Num; $n++) {
		if ($n % 2 == 0) {
			array_push($even, $n);
			$evenCtr++;
		}else{
			array_push($odd, $n);
			$oddCtr++;
		}
	}
	
	$evenFormatted = implode(" , ", $even);
	$oddFormatted = implode(" , ", $odd);
	
	echo "<br>The number you entered is: ", $Num, "<br>";
	echo "Even numbers are: ", $evenFormatted , "<br>", "Odd numbers are: ", $oddFormatted;
}  

?>
    </form>     
    </body>
</html>