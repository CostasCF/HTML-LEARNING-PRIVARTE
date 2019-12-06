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
		// ΕΙΣΑΓΩΓΗΗ ΜΕΣΑ ΣΤΗΝ ΒΑΣΗ ΔΕΔΟΜΕΝΩΝ " ΡΕΓΙΣΤΕΡ "
     $SELECT = "SELECT email From register Where email = ? Limit 1";
	 $INSERT = "INSERT Into register (username, password, address, payment, email, subject, age, phone, date) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";
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
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }

} else {
 echo "All field are required";
 die();
}

/*Δημιουργία ερωτήματος
if (isset($_POST['username']) && $_POST['username']!='' ){
	$sql = "SELECT * password,username,payment,email,age,phone,subject,date,address FROM register WHERE username='".$_POST['username']."'";
} 
$result = mysqli_query($conn, $sql);
//έλεγχος αποτελεσμάτων
if (mysqli_num_rows($result) > 0) {
 echo "<table style='border:1px solid black'>";
echo
"<tr><th>username</th><th>Πρώτο</th><th>Δεύτερο</th><th>Τρίτο</th><th>Τέταρτο</th><th>Πέμπτο</th></tr>";
// εκτύπωση αποτελεσμάτων
 while($row = mysqli_fetch_assoc($result)) {
echo "<tr><td>".$row['username']."</td>".
"<td>".$row['password']."</td>".
"<td>".$row['username']."</td>".
"<td>".$row['email']."</td>".
"<td>".$row['age']."</td>".
"<td>".$row['subject']."</td>".
"<td>".$row['address']."</td>";
"<td>".$row['phone']."</td></tr>";
 }
echo "</table>" ;
} else {
 echo "0 εγγραφές βρέθηκαν";
}

*/


?>