<?php  
if(isset($_GET['getDiscriminant'])) {

	// String passed inside our GET variable comes from the name attribute of our input element 
	$A = $_GET['A'];
	$B = $_GET['B'];
    $C = $_GET['C'];

	// Create a variable to store the sum.
	$discriminant =  $B**2 - 4*$A*$C;

	// Print the result
	echo "<h2>The answer is " . $discriminant . "</h2>";
}
?>
