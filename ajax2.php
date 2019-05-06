<?php
//option 1
extract($_POST);
$poi = json_decode($data);

//option 2
//$poi = json_decode($_POST["data"]);

$arr = array('Sum' => $poi->num1 + $poi->num2, 
	'Difference' => $poi->num1 - $poi->num2, 
	'Product' => $poi->num1 * $poi->num2, 
	'Quotient' => $poi->num1 / $poi->num2);

echo json_encode($arr)

?>