<!DOCTYPE html>
<html>












<head>
<meta charset="UTF-8">
</head>
<title>v1.1</title>
<center>

<body>
	<form>
		<h1>Simple Interest</h1>
		<br>
        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2">
		<input type="text" name="num3" placeholder="Number 3">
		<br>
		<h1>Compound Interest</h1>
		<input type="text" name="Principal" placeholder="Principal">
		<input type="text" name="time" placeholder="time">
		<input type="text" name="rate" placeholder="rate">
				
		<br>
		<h1> Effective Rate</h1>
		<input type="text" name="r" placeholder="R">
		<input type="text" name="n" placeholder="N">

		<br>
		<h1>Amortized Loan payment</h1>
		
		
		<br>
		<h1>Remaining Balance</h1>
		<br>

        <select name="operator">
            <option>Select what you are Calculating</option>
			<option>Calculate Simple Interest</option>
			<option>Calculate Compound interest</option>
			<option>Effective Rate</option>
			<option>Amortized loan payment</option>
			<option>Remaining Balance</option>
			
			
        </select>
		<br>
		<br>
	
        
		<button type="submit" name="submit" value="submit">calculate</button>
    </form>
	
<b><p> the answer is:</p></center></b>
<?php
	if(isset($_GET['submit'])){
		$result1 = $_GET['num1']; //si
		$result2 = $_GET['num2']; //si
		$result3 = $_GET['num3']; //si
		$p = $_GET['Principal']; //CI
		$t = $_GET['time']; //CI
		$r = $_GET['rate']; //CI
		
		$r1 = $_GET['r']; //ER
		$n = $_GET['n']; //ER
		
		
		
				
		
		$operator = $_GET['operator'];
		switch($operator){
			case "Select what you are Calculating":
				echo "ERROR";
			break;
			
			case "Calculate Simple Interest":
				echo $result1 * $result2 * $result3;
			break;
			
			case "Calculate Compound interest":
				echo"Compound Interest is: " $p * (pow((1 + $r / 100), $t));
			break;
			
			case "Effective Rate":
				echo (pow(1 + $r1/$n, $n) - (1)) * 100;
			break;
			
			case "Effective Rate":
				echo
			break;
			
			case "Amortized loan payment":
				echo;
			break;
			
			case "Remaining Balance":
				echo ;
				
			break;
				
			
		}
	}
?>
</body>
</html>
