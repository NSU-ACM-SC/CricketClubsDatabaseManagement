<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400" rel="stylesheet"> 
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="mainstylesheet.css">
    <title>Cricket Clubs</title>
</head>
<body>
    <header>
        <div class="container">
            <a href="index.html">
                <img src="images/logo.png" alt="logo" class="logo">
            </a>
            <nav>
                <ul>
                    <li><a class="active" href="index.html">Home</a></li>
                    <li><a href="playerRegistration.php">Player</a></li>
                    <li><a href="clubRegistration.php">Club</a></li>
                    <li><a href="contractForm.php">Contract</a></li>                
                    <li><a href="matchInfoForm.php">Match</a></li>
                </ul>
            </nav>        
        </div>
    </header>
    
    <div class="form-style-8">
        <h2>Contract Form</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <h4 class="headers">Club Information </h4>
        Club ID: <input type="number" name="clubID" title="Club ID" placeholder="Club ID"><br><br>
        Name of the club: <input type="text" name="clubName" title="Club Name" placeholder="Club Name"><br><br>

        <h4 class="headers">First Party (Player) </h4>
        First Name: <input type="text" name="playerFirstName" title="First Name" placeholder="Player's First Name"><br><br>
        Middle Name: <input type="text" name="playerMiddleName" title="Middle Name" placeholder="Player's Middle Name"><br><br>
        Last Name: <input type="text" name="playerLastName" title="Last Name" placeholder="Player's Last Name"><br><br>
        Player ID: <input type="number" name="playerID" title="PLayer ID" placeholder="Player ID"><br><br>

        <h4 class="headers">Second Party (Authorized Person) </h4>
        First Name: <input type="text" name="officerFirstName" title="First Name" placeholder="Officer's First Name"><br><br>
        Middle Name: <input type="text" name="officerMiddleName" title="Middle Name" placeholder="Officer's Middle Name"><br><br>
        Last Name: <input type="text" name="officerLastName" title="Last Name" placeholder="Officer's Last Name"><br><br>
        Designation: <input type="text" name="designation" title="Designation" placeholder="Officer's Designation"><br><br>

        <h4 class="headers">Contract Period </h4>
        Start Date : <input type="date" name="startDate" title="Start Date"><br><br>
        End Date : <input type="date" name="endDate" title="End Date"><br><br>
        Contract Amount : <input type="text" name="contractAmount" title="Contract Amount" placeholder="Contract Amount"><br><br>


        <table cellspacing="0" cellpadding="1">
            <caption><h4 class="headers">Payment Schedule</h4></caption>
            <tr>
                <th>Serial Number</th>
                <th>Due date</th>
                <th>Payment date</th>
                <th>Amount</th>
            </tr>

            <tr>
                <td><input type="number" name="contractSerial0" value="0" title="Serial Number" required></td>
                <td><input type="date" name="dueDate0" title="Due date" required></td>
                <td><input type="date" name="paymentDate0" title="Payment date" required></td>
                <td><input type="text" name="paidAmount0" title="Amount" required></td>
            </tr>

        </table>
        <br><br>

        Contract Witness 1: <input type="text" name="witness1" title="Contract Witness 1" placeholder="First Witness Name"><br><br>
        Contract Witness 2: <input type="text" name="witness2" title="Contract Witness 2" placeholder="Second Witness Name"><br><br>

        <input type="submit" name="submit">
        </form>

    </div>   
        
</body>

<?php

    if ( isset($_POST["submit"]) ){

        require_once('connectsql.php');

		$query1 = "INSERT INTO `contracts`(
				`playerID`, 
				`clubID`, 
				`contract_start_date`,
				`contract_end_date`, 
				`witness1`, 
				`witness2`, 
				`designation`, 
				`authorized_person`, 
				`contract_amount`
			) 
			VALUES (
				'".$_POST['playerID']."', 
				'".$_POST['clubID']."', 
				'".$_POST['startDate']."',
				'".$_POST['endDate']."', 
				'".$_POST['witness1']."', 
				'".$_POST['witness2']."', 
				'".$_POST['designation']."', 
				'".$_POST['officerFirstName']. " " .$_POST['officerMiddleName']. " " .$_POST['officerLastName']. "', 
				'".$_POST['contractAmount']."'
			)
		";
		
		$conn->query($query1);
		
		$Contract = $conn->query("SELECT `contract_id` FROM `contracts` WHERE `playerID` = '".$_POST['playerID']."'");
		
		while($result = $Contract->fetch_assoc()){
			$Contract_ID = $result["contract_id"];
		}
		
		$query2 = "INSERT INTO `payment_schedule`(
				`contract_id`,
				`due_date`, 
				`payment_date`, 
				`amount_paid`,
				`serial`
			) 
			VALUES (
				'".$Contract_ID."',
				'".$_POST['dueDate0']."', 
				'".$_POST['paymentDate0']."', 
				'".$_POST['paidAmount0']."',
				'".$_POST['contractSerial0']."'
			)
		";
		
		$conn->query($query2);
	}
?>

</html>
