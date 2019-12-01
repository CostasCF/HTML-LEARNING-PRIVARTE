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
<!-- ΛΑΜΒΑΝΕΙ ΤΗΝ ΤΙΜΗ ΤΟΥ ΧΡΗΣΤΗ ΟΤΑΝ ΠΑΤΑΕΙ ΤΟ ΚΟΥΜΠΙ-->
<input action="" method="get" name="button" type="button" id="inputChar" onclick="Click();"value="CLICK HERE"> 	

<?php 
echo "<table border =\"1\" >";
	for ($row=1; $row <= 10; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 10; $col++) { 
		   echo "<td id='inputChar'> </td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>

<script>
// ΣΥΝΑΡΤΗΣΗ ΤΗΣ JAVASCRIPT ΠΟΥ ΕΝΕΡΓΟΠΟΙΕΊΤΑΙ ΟΤΑΝ Ο ΧΡΗΣΤΗΣ ΠΑΤΑΕΙ ΤΟ ΚΟΥΜΠΙ 
function Click(){
	var Vvalue = prompt("Παρακαλώ τοποθετίστε την τιμή για να τοποθετηθεί στον πίνακα");
	window.location.href = "second.php?Vvalue=" + Vvalue;
}
</script>
</body>
</html>
