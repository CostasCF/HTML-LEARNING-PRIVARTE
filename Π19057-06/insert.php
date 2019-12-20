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

//--------ελεγχος κενων--------------------------
if (!empty($username) || !empty($password) || !empty($address) || !empty($payment) || !empty($email) || !empty($age) || !empty($date) || !empty($subject) || !empty($phone)) {
	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "assignment6";
    //ΔΗΜΙΟΥΡΓΙΑ ΣΥΝΔΕΣΗΣ ΜΕ ΤΗΝ ΒΑΣΗ
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
	// ΕΙΣΑΓΩΓΗΗ ΜΕΣΑ ΣΤΗΝ ΒΑΣΗ ΔΕΔΟΜΕΝΩΝ " register "
     $SELECT = "SELECT email From register Where email = ? Limit 1"; // μεχρι ενα email
	 $INSERT = "INSERT Into register (username, password, payment, email, subject, age, phone, date, address) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";
     //ΠΡΟΕΤΟΙΜΑΣΙΑ ΣΥΝΔΕΣΗΣ
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssssiiss", $username, $password, $payment, $email, $subject, $age, $phone, $date, $address);
      $stmt->execute();
      echo "Νέο αρχείο καταχωρήθηκε με επιτυχία!";
     } else {
      echo "Κάποιος έχει χρησιμοποιήσει ήδη αυτο το email, δοκιμάστε με άλλο.";
     }
	 //κλεισιμο συνδεσης
     $stmt->close();
     $conn->close();
    }

} else {
 echo "Όλα τα πεδία είναι υποχρεωτικά";
 die();
}

?>