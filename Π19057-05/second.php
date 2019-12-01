<html>
<head>
<title>Two-dimensional Arrays</title>

<style>
td {height: 40px;}
table {width: 40%; border: 3px solid blue;}

table tbody tr:nth-child(odd) {
    background-color: red;

}
table tbody tr:nth-child(even) {
    background-color: green;
	
}
</style>
</head>

<body>

<h2> ΔΥΟ ΔΙΑΣΤΑΣΕΩΝ ΠΙΝΑΚΑΣ ΠΟΥ ΔΗΜΙΟΥΡΓΗΘΗΚΕ ΜΕ ΔΟΜΗ ΕΠΑΝΑΛΗΨΗΣ ΤΗΣ PHP </h2>
<h4> Παρακαλούμε επιλέξτε την ιστοσελίδα <a href="popUp.php"> popUp.php </a> πρώτα. <h4>

<?php
$char = $_GET['Vvalue'];
// ΛΑΜΒΆΝΕΙ ΤΗΝ JAVASCRIPT ΤΙΜΗ ΤΟΥ ΧΡΗΣΤΗ ΑΠΟ ΤΗΝ popUp.php

echo "<table border =\"1\" >";
	for ($row=1; $row <= 10; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 10; $col++) {
			if ($row%2==1){
				echo "<td id='inputChar'> $char</td> \n";}
			else {
				echo	"<td id='inputChar'> </td> \n";
			}	
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>

</body>
</html>