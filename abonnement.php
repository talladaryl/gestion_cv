	<?php require_once'header.php'; ?><style type="text/css">
		
		
		form{
			/*max-width: 400px;
			margin: 0 auto;*/
			background: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 4px;

		}
		input[type="text"]{
			width: 100%;
			padding: 10px;
			margin: 8px 0;
			box-sizing: border-box;
			border: 1px solid #ccc;
			border-radius: 4px;
		}
			input[type="number"]{ 
			width: 100%;
			padding: 10px;
			margin: 8px 0;
			box-sizing: border-box;
			border: 1px solid #ccc;
			border-radius: 4px;
		}
		input[type="submit"]{
			background: #4CAF50;
			color: white;
			padding: 15px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type="submit"]{

			background-color: #45a049;
		}
	</style>

<body> <center>
	
	

<form action="traite.php"method="post" style="border: 2px double grey">
	<h1 style="background-color: deepskyblue">
		PAYEMENT PAR CARTE DE CREDIT
	</h1><br><br>
	<label for="card_number">
	Numero de la carte de credit</label>
	<input type="text" name="card_number" placeholder="123654454" required>
	<label for="expiry_date">DATE expiration</label>
	<input type="text" name="expiry_date" placeholder="MM/YY" required>
	<label for="cvc">code securite</label>
	<input type="text" name="cvc" placeholder="123" required>
	<label for="amount">Montant a payer</label>
	<input type="text" name="amount" id="amount" required>
	<input type="submit" value="payer">
</form></center> <div>
<form method="post" action="traite.php" style="background-color: orange">
		<label>
		payer par ORANGE MOMEY
	</label>
	<input type="number" name="om" placeholder="entrez votre numero OM">
	<input type="submit"value="ENVOYER">
	
</form>
</div>
</body>
</html>