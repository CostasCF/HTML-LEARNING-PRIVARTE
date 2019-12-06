<?php
// συνδεση με βαση δεδομενων
	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "assignment6";
    //ΔΗΜΙΟΥΡΓΙΑ ΣΥΝΔΕΣΗΣ ΜΕ ΤΗΝ ΒΑΣΗ
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
$output = '';
//collect
if(isset($_POST['search'])) {
	$searchq= $_POST['search'];
	//εμφανιζει παρομοια στοιχεια με αυτα που αναζητα ο χρηστης 
	$query = mysqli_query($conn,"SELECT * FROM register WHERE username LIKE '%$searchq%' OR  email like '%$searchq%'") or die("could not search!");
	$count = mysqli_num_rows($query);
	if($count== 0){
		$output = 'Το στοιχείο αναζήτησης δεν βρεθηκε';
	}else{
		while($row= mysqli_fetch_array($query)){
			$username = $row['username'];
			$password = $row['password'];
			$payment = $row['payment'];
			$email = $row['email'];
			$age = $row['age'];
			$phone = $row['phone'];
			$subject = $row['subject'];
			$date = $row['date'];
			$address = $row['address'];
			// εξοδος δεδομενων
			$output .= '<div>'.$username.' '.$password.' '.$payment.' '.$email.' '.$age.' '.$phone.' '.$subject.' '.$date.' '.$address.'</div>';
		}
	}
}
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
  <style>
  /* περιοχες εντος φορμας που μπορεις να συμπληρώσεις στοιχεία */
input[type=text], textarea , input[type=email], input[type=password], input[type=radio] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  
}
/*κουμπια */
input[type=submit] ,input[type=reset] ,input[type=button] {
  background-color: #63b2f7;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* λειτουργια οταν το βελακι παει πανω στο πληκτρο */
input[type=submit]:hover, input[type=reset]:hover ,input[type=button]:hover {
  background-color: #8ad4ff;
}

/*φορμα*/
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
  
.footer {
	background-color :#333333;
	height: 30px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	border-radius: 4px;}

/* περιοχομενο footer*/
.footerTag {text-align: center;
			color: gray;
			margin-top: 5px;
			} 
  </style>
</head>
<body>
<!----- HEADER ---->
	<div class="footer">
		 <div class="footerTag"> 6η Εργαστηριακή άσκηση</div>	
	</div>
<form action="insert.php" method="POST">
<!------- ΦΟΡΜΑ ΕΙΣΑΓΩΓΗΣ ΣΤΟΙΧΕΙΩΝ ΧΡΗΣΤΗ -------------------------------->
 	<form id="form1" method="post" action="">
		<div class="container">
			<h2 class="EPIKEFALIDA"> Φόρμα Επικοινωνίας </h2>

		<!-- ΠΛΑΙΣΙΑ ΦΟΡΜΑΣ ---->
				<label for="username">*Ονοματεπώνυμο:</label>
				<input type="text" id="username" name="username" required placeholder="Ονοματεπώνυμο..">
				
				<label for="password">*Κωδικός:</label>
				<input type="password" id="password" name="password" required placeholder="Κωδικός..">

				<label for="Telephone">*Τηλέφωνο:</label>
				<input type="text" id="phone" name="phone" required placeholder="Τηλέφωνο..">
				
				<label for="Address">*Διεύθυνση:</label>
				<input type="text" id="address" name="address" required placeholder="Διεύθυνση..">
				
				<label for="E-mail">*E-mail:</label>
				<input type="email" id="email" name="email" required placeholder="E-mail..">
				
				<label for="payment"> *ΤΡΟΠΟΣ ΠΛΗΡΩΜΗΣ: </label> <br><br><br><br>
				<em>VISA / MASTERCARD</em><input type="radio" name="payment" value="VISA/MASTERCARDCASH" required> <br><br>
                <em>CASH</em><input type="radio" name="payment" value="CASH" required> 
				 <em>ΝΕΦΡΟ</em><input type="radio" name="payment" value="ΝΕΦΡΟ" required> 
				<br><br>
				<label for="subject">*Ερώτημα:</label>
				<textarea id="subject" name="subject" required placeholder="Γράψε κάτι.." style="height:200px"></textarea>
				
				<label for="date">*Ημερομονία Γέννησης:</label>
				<input type="date" id="date" name="date" required >
				
				
				<label for="subject">*Ηλιακιακό γκρουπ:</label>
				<select name="age" required>
					<option selected hidden value=""><em>Επιλέξτε ηλικιακό γκρουπ</em></option>
					<option value="18"><18</option>
					<option value="30">18-30</option>
					<option value="50">31-50</option>
					<option value="60">51-60</option>
					<option value="70">61-70</option>
					<option value="71">71+</option>
				</select>
		<!-- ΚΟΥΜΠΙΑΣ ΦΟΡΜΑΣ -->
		<h6> Τα πεδία με * ειναι υποχρεωτικά. </h6>
		<input type="submit" value="Αποστολή">
		<input type="reset" value="Καθαρισμός πεδίων">
	</div>
	</form>
	<hr>
<!------------------ Φορμα αναζητησης------------>
	<form  action="contactForm.php" method="post" >
		<div class="container">
		<h2 class="EPIKEFALIDA"> Φόρμα Αναζήτησης </h2>

		<!-- ΠΛΑΙΣΙΑ ΦΟΡΜΑΣ ---->
		<label for="username">*Λεξη/Κλειδί αναζήτησης:</label>
		<input type="text" id="search" name="search" required placeholder="Email/Username..">
		
		<!-- κουμπια φορμας --->
		<input type="submit" value="Αναζήτηση">
		<input type="reset" value="Καθαρισμός πεδίων">
		<?php print("$output");?>

	</div>
	</form>
	<hr>

<!-- FOOTER ------>
	<div class="footer">
		 <div class="footerTag"> ΕΡΓΑΣΙΑ_ΠΑΠΕΙ_Π19057 @2019 </div>	
	</div>
	</body>

</body>
</html>