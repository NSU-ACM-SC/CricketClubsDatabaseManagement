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
        <h2>Club Registration Form</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <h4 class="headers">General Information </h4>
            Name of the club: <input type="text" name="clubName" title="Club Name" placeholder="Club Name"><br><br>
            Date of Establishment: <input type="date" name="dateEstablished" title="Date Established"><br><br>
            Name of the President: <input type="text" name="president" title="President's Name" placeholder="President's Name"><br><br>

            <h4 class="headers">Club Address </h4>
            Location ID: <input type="number" name="locationID" title="Location ID" placeholder="Club's Location ID"><br><br>
            House: <input type="text" name="clubHouse" title="House" placeholder="Club Building"><br><br>
            Street: <input type="text" name="clubStreet" title="Street" placeholder="Club Street"><br><br>
            Post Code: <input type="text" name="clubPost" title="Post Code" placeholder="Club's Post Code"><br><br>
            Thana: <input type="text" name="clubThana" title="Thana" placeholder="Club Thana"><br><br>
            District: <input type="text" name="clubDistrict" title="District" placeholder="Club District"><br><br>
            President: <input type="text" name="president" title="President" placeholder="Club President"><br><br><br>
        <input type="submit" name="submit">
        </form>

    </div>   
</body>

<?php

    if ( isset($_POST["submit"]) ){

        require_once('connectsql.php');

		$query1 = "INSERT INTO `clubs`(`club_name`, 
		`date_established`, 
		`president`, 
		`club_locationID`
		) 
		
		VALUES ('".$_POST['clubName']."', 
		'".$_POST['dateEstablished']."', 
		'".$_POST['president']."', 
		'".$_POST['locationID']."')";
		
		$query2 = "INSERT INTO `locations`(`locationID`,
		`house`,
		`street`,
		`postCode`,
		`thana`, 
		`district`) 
		
		VALUES (
		'".$_POST['locationID']."',
		'".$_POST['clubHouse']."',
		'".$_POST['clubStreet']."',
		'".$_POST['clubPost']."',
		'".$_POST['clubThana']."', 
		'".$_POST['clubDistrict']."'
		)";

		$conn->query($query1);
		$conn->query($query2);

	}
?>

</html>