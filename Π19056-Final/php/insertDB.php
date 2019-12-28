<?php	
// ορισμος μεταβλητων
$username = $_POST['username'];
$password = $_POST['password'];
$payment = $_POST['payment'];
$email = $_POST['email'];
$age = $_POST['age'];
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
	$INSERT = "INSERT INTO register (username,password,payment,email,age,phone,subject,date,address,red,white,quantity,money)
	values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?)";	
}

$stmt = $conn->prepare($INSERT);
$stmt->bind_param("sssssiissssss", $username, $password, $payment, $email, $subject, $age, $phone, $date, $address,$red,$white,$quantity,$money);
$stmt->execute();
echo "Νέο αρχείο καταχωρήθηκε με επιτυχία!";
$stmt->close();
$conn->close();
?>