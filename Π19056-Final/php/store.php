<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styling.css" />
	<title>ΚΑΤΑΣΤΗΜΑ</title>	
	</head>
	<!--BODY-->
	<body id="BodyStore">
	<div class="container">
	<ul>
		<li><a  href="main.php"><b>ΑΡΧΙΚΗ</b></a></li>
		<li><a href="info.php"><b>ΠΛΗΡΟΦΟΡΙΕΣ</b></a></li>
		<li><img src="images/logo.png" alt= "eikona span" class="logoImg" > </li>
		<li><a class="active" href="store.php"><b>ΚΑΤΑΣΤΗΜΑ</b></a></li>
		<li><a href="contact.php"><b>ΕΠΙΚΟΙΝΩΝΙΑ</b></a></li>
	</ul>
	</div>
<div class="Store" >
	<div class="row">
		<div class="column">
		<!-- ΠΡΩΤΗ ΕΙΚΟΝΑ --->
			<img src="images/shirt4.png" alt="eikonashirt4" class="shirt1">
			<div class="quintity" style="text-align: center;">
			<label for="quantity"><b>ΤΙΜΗ: 30€ <br><br>Ποσότητα:</b></label> 
			<input type="number" name="quantity" id="a1" min="1" max="100" maxlength="3" value="1">			
			<input type="button" id="Send" value="Προσθήκη" onclick="add1();moneyG();">
			</div>
			<br><br>
		</div>
		<div class="column">
		<!-- ΔΕΥΤΕΡΗ ΕΙΚΟΝΑ --->
			<img src="images/shirt5.png" alt="eikonashirt4" class="shirt2">
			<div class="quintity" style="text-align: center; ">
			<label for="quantity"><b>ΤΙΜΗ: 30€ <br><br>Ποσότητα:</b></label> 
			<input type="number" name="quantity" id="a2" min="1" max="100" maxlength="3" value="1">			
			<input type="button" id="Send" value="Προσθήκη" onclick="add2();moneyG();">
			</div>
			<br><br>
		</div>
		<div class="column" style=" text-align: center; margin-top: 4%; margin-left:2%" >
		<input class="no-click" type="button" value="Καλάθι Αγορών"><br><br>
		<label for="red"><b>Μπλουζάκι "ΚΟΚΚΙΝΟ" </b></label> 
		<input readonly type="text" name="quantity" id="red" value="Readonly Value">	
		<label for="white"><b>Μπλουζάκι "ΛΕΥΚΟ": </b></label> 
		<input readonly type="text" name="quantity" id="white" value="Readonly Value">	
		<label for="quantity"><b>Συνολικά Τεμάχια: </b></label> 
		<input readonly type="text" name="quantity" id="sumq" value="Readonly Value">	
		<label for="money"><b>Ποσό αγοράς: </b></label> 
		<input readonly type="text" name="money" id="money"  value="Readonly Value">					
		<input type="button" id="Send" value="Τελική Αγορά" onclick="transport();location.href='shoppingCart.php';" >
		<input type="button" value="Καθαρισμός" onclick="reset();"> <br><br>
		</div>
		<br><br>
	</div>
</div>
<!-- FOOTER-------------------->
	<div class="footer">
		 <div class="footerTag"> ΕΡΓΑΣΙΑ_ΠΑΠΕΙ_Π19057 @2019 </div>	
	</div>
	<script>
	// συναρτηση για να αρχικοποιεί την ποσότητα στο κουμπι reset
	function reset(){
		document.getElementById('sumq').value = 0;
		document.getElementById('money').value = 0;
		document.getElementById('red').value = 0;
		document.getElementById('white').value = 0;
	}
	document.getElementById('money').value = 0; // αρχικοποιεί την τελικη τιμη στο μηδεν 
	document.getElementById('sumq').value = 0; // αρχικοποιεί τα τελικα τεμαχια στο μηδεν
	document.getElementById('red').value = 0; // αρχικοποιεί τα "κοκκινα" τεμαχια στο μηδεν
	document.getElementById('white').value = 0; // αρχικοποιεί τα "λευκα" τεμαχια στο μηδεν
	function add1(){
		var redsum = document.getElementById('red').value;
		var finalsum = document.getElementById('sumq').value;
		var a1 = document.getElementById("a1").value;
		redsum =  +redsum  + Number(a1);
		finalsum =  +finalsum  + Number(a1);
		document.getElementById('red').value = redsum ;
		document.getElementById('sumq').value = finalsum; 	// προσθεση και εκτύπωση τελικής ποσότητας
	}
	function add2(){
		var whitesum = document.getElementById('white').value;
		var finalsum = document.getElementById('sumq').value;
		var a2 = document.getElementById("a2").value;
		whitesum =  +whitesum  + Number(a2);
		finalsum =  +finalsum  + Number(a2);
		document.getElementById('white').value = whitesum ;
		document.getElementById('sumq').value = finalsum ; 	// προσθεση και εκτύπωση τελικής ποσότητας
	}
	// πολλαπλασιασμος ποσοτητας επι την τιμη 
	function moneyG(){
		var finalsum = document.getElementById('sumq').value; // παιρνει την στιγμαια τελικη ποσότητα
		var sumMoney = 30 * +finalsum; // την πολλαπλασιαζει επι 30$
		document.getElementById('money').value = sumMoney + "€"; // επιστρέφει την τελικη τιμη
	}	
	
	// αποθήκευση τιμών και μεταφορά στην σελίδα αποστολής
	function transport() {
		var getWhite = document.getElementById('white').value;
		var getRed = document.getElementById('red').value;
		var getQuantity = document.getElementById('sumq').value;
		var getMoney =  document.getElementById('money').value;
		localStorage.setItem("storageRed",getRed);
		localStorage.setItem("storageWhite",getWhite);
		localStorage.setItem("storageQuantity",getQuantity);
		localStorage.setItem("storageMoney",getMoney);
	}
	</script>
	</body>
</html>
