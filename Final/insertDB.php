<!DOCTYPE HTML>
<html>
<head>
  <title>ΦΟΡΜΑ ΑΠΟΣΤΟΛΗΣ</title>
  	<link rel="stylesheet" href="styling.css" />

</head>
<body id="BodyCart" onload="recieved();">
<!----- HEADER ---->
	<div class="container">
	<ul>
		<li><a  href="main.php"><b>ΑΡΧΙΚΗ</b></a></li>
		<li><a href="info.php"><b>ΠΛΗΡΟΦΟΡΙΕΣ</b></a></li>
		<li><img src="images/logo.png" alt= "eikona span" class="logoImg" > </li>
		<li><a class="active" href="store.php"><b>ΚΑΤΑΣΤΗΜΑ</b></a></li>
		<li><a href="contact.php"><b>ΕΠΙΚΟΙΝΩΝΙΑ</b></a></li>
	</ul>
	</div>


<!------- ΕΜΦΑΝΙΣΗ ΕΠΙΤΥΧΗΣ ΚΑΤΑΧΩΡΗΣΗΣ -------------------------------->
<div class="containerF">
	<div class="EpitixisKataxorisi">Η παραγγελία σας καταχωρήθηκε με επιτυχία!</h2>
</div>

<!-- FOOTER ------>
	<div class="footer">
		 <div class="footerTag"> ΕΡΓΑΣΙΑ_ΠΑΠΕΙ_Π19057 @2019 </div>	
	</div>
	<script> 
<?php	
// ορισμος μεταβλητων
$username = $_POST['username'];
$password = $_POST['password'];
$payment = $_POST['payment'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$date = $_POST['date'];
$address = $_POST['address'];
$red = $_POST['red'];
$white = $_POST['white'];
$quantity = $_POST['quantity'];
$money = $_POST['money'];

//καθορισμος στοιχειων βασης δεδομενων 
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "assignment6";

//δημιουργία σύνδεσης
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
} else { // καταχωρηση στοιχειων στην βαση δεδομενων
	$INSERT = "INSERT INTO register (username,password,payment,email,phone,subject,date,address,red,white,quantity,money)
	values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)";	
}

$stmt = $conn->prepare($INSERT);
$stmt->bind_param("ssssisssssss", $username, $password, $payment, $email,$phone, $subject , $date, $address,$red,$white,$quantity,$money);
$stmt->execute();
echo "Νέο αρχείο καταχωρήθηκε με επιτυχία!";
$stmt->close();
$conn->close();
?>