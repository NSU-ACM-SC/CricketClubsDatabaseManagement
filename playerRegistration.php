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
        <h2 class="headers">Player Registration Form</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            First Name: <input type="text" name="firstName" title="First Name" placeholder="Your First Name" required><br><br>
            Middle Name: <input type="text" name="middleName" title="Middle Name" placeholder="Your Middle Name"><br><br>
            Last Name: <input type="text" name="lastName" title="Last Name" placeholder="Your Last Name" required><br><br>
            Father's Name: <input type="text" name="father" title="Father's Name" placeholder="Your Father's Name"><br><br>
            Mother's Name: <input type="text" name="mother" title="Mother's Name" placeholder="Your Mother's Name"><br><br>
            Date of Birth: <input type="date" name="dob" title="Date of Birth"><br><br>

            <h4 class="headers">Present Address </h4>

            Location ID: <input type="number" name="currentlID" title="Location ID" placeholder="Your Present Location ID" required><br><br>
            House: <input type="text" name="currentHouse" title="House" placeholder="Your Present House"><br><br>
            Street: <input type="text" name="currentStreet" title="Street" placeholder="Your Present Street"><br><br>
            Post Code: <input type="text" name="currentPost" title="Post Code" placeholder="Your Present Post Code"><br><br>
            Thana: <input type="text" name="currentThana" title="Thana" placeholder="Your Present Thana" required><br><br>
            District: <input type="text" name="currentDistrict" title="District" placeholder="Your Present District" required><br><br>

            <h4 class="headers">Permanent Address </h4>

            Same as present address: <input type="checkbox" name="sameAdrs" value="1" title=""><br><br>

            Location ID: <input type="number" name="permanentlID" title="Location ID" placeholder="Your Permanent Location ID"><br><br>
            House: <input type="text" name="permanentHouse" title="House" placeholder="Your Permanent House"><br><br>
            Street: <input type="text" name="permanentStreet" title="Street" placeholder="Your Permanent Street"><br><br>
            Post Code: <input type="text" name="permanentPost" title="Post Code" placeholder="Your Permanent Post Code"><br><br>
            Thana: <input type="text" name="permanentThana" title=" Thana" placeholder="Your Permanent Thana"><br><br>
            District: <input type="text" name="permanentDistrict" title="District" placeholder="Your Permanent District"><br><br>

            <table cellspacing="0" cellpadding="1">
                <caption><h4 class="headers">Previous History</h4></caption>

                <tr>
                    <th>Club Name</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Total Runs</th>
                    <th>Total Wickets</th>
                    <th>Team leader (Y/N)</th>
                </tr>

                <tr>
                    <td><input type="text" name="clubPlayedFor0" title="Club Name"></td>
                    <td><input type="text" name="transferredTo0" title="From"></td>
                    <td><input type="text" name="transferredFrom0" title="To"></td>
                    <td><input type="text" name="totalRuns0" title="Total Runs"></td>
                    <td><input type="text" name="totalWickets0" title="Total Wickets"></td>
                    <td><input type="radio" name="teamLeader0" value="Y" title="Yes"> YES<br>
                        <input type="radio" name="teamLeader0" value="N" title="No" checked> NO</td>
                </tr>

            </table>


            <table  cellspacing="0" cellpadding="1">
                <caption><h4 class="headers">Best Performance</h4></caption>
                <tr>
                    <th>Club Name</th>
                    <th>Opponent club name</th>
                    <th>Event Id</th>
                    <th>Match Id</th>
                    <th>Runs</th>
                    <th>Wickets</th>
                </tr>

                <tr>
                    <td><input type="text" name="clubFor0" title="Club Name"></td>
                    <td><input type="text" name="clubAgainst0" title="Opponent club name"></td>
                    <td><input type="text" name="runs0" title="Event Id"></td>
                    <td><input type="text" name="wickets0" title="Match Id"></td>
                    <td><input type="text" name="matchID0" title="Runs"></td>
                    <td><input type="text" name="eventID0" title="Wickets"></td>
                </tr>

            </table>


            <table cellspacing="0" cellpadding="1">
                <caption><h4 class="headers">Educational Qualifications</h4></caption>
                <tr>
                    <th>Name of degree</th>
                    <th>Institute/Department</th>
                    <th>Board/University</th>
                    <th>Year</th>
                    <th>Result</th>
                </tr>

                <tr>
                    <td><input type="text" name="degree0" title="Name of degree"></td>
                    <td><input type="text" name="dept0" title="Institute/Department"></td>
                    <td><input type="text" name="institute0" title="Board/University"></td>
                    <td><input type="text" name="year0" title="Year"></td>
                    <td><input type="text" name="result0" title="Result"></td>
                </tr>

            </table>
            <br>
            Membership<br>
                <input type="radio" name="membership" value="ICCB" checked/>ICCB<br>
                <input type="radio" name="membership" value="BCCB"/>BCCB<br>
                <input type="radio" name="membership" value="ACCB"/>ACCB<br>
                <input type="radio" name="memberships" value="Others"/>Others<br>

            <br><br>
            Signature of the Player:  ...................<br><br>
            Player Registration Date: <input type="date" name="dor" title="Player Registration Date"><br><br><br>

		    <input type="submit" name="submit">
        </form>
    </div>
        
</body>



<?php

    if ( isset($_POST["submit"]) ){

        require_once('connectsql.php');

		if($_POST['membership'] == "Others"){
			$_POST['membership'] = $_POST['other'];
		}
		
		$query1 = "INSERT INTO `players`(`first_name`, 
		`middle_name`, 
		`last_name`, 
		`father_name`, 
		`mother_name`, 
		`present_locationID`,
		`permanent_locationID`, 
		`date_of_birth`, 
		`membership`, 
		`registration_date`
		) 
		
		VALUES ('".$_POST['firstName']."', 
		'".$_POST['middleName']."', 
		'".$_POST['lastName']."', 
		'".$_POST['father']."', 
		'".$_POST['mother']."', 
		'".$_POST['currentlID']."',
		'".$_POST['permanentlID']."', 
		'".$_POST['dob']."', 
		'".$_POST['membership']."', 
		'".$_POST['dor']."')";
		
		$query2 = "INSERT INTO `locations`(`locationID`,
		`house`,
		`street`,
		`postCode`,
		`thana`, 
		`district`) 
		
		VALUES (
		'".$_POST['currentlID']."',
		'".$_POST['currentHouse']."',
		'".$_POST['currentStreet']."',
		'".$_POST['currentPost']."',
		'".$_POST['currentThana']."', 
		'".$_POST['currentDistrict']."'
		)";
		
		$query3 = "INSERT INTO `locations`(`locationID`,
		`house`,
		`street`,
		`postCode`,
		`thana`, 
		`district`) 
		
		VALUES (
		'".$_POST['permanentlID']."',
		'".$_POST['permanentHouse']."',
		'".$_POST['permanentStreet']."',
		'".$_POST['permanentPost']."',
		'".$_POST['permanentThana']."', 
		'".$_POST['permanentDistrict']."'
		)";
		
		$conn->query($query1);
		$conn->query($query2);
		$conn->query($query3);
		
		$Player = $conn->query("SELECT `playerID` FROM `players` WHERE `first_name` = '". $_POST['firstName'] . "' AND `present_locationID` = '".$_POST['currentlID'] . "' AND `permanent_locationID` = '".$_POST['permanentlID']."'");
		
		while($result = $Player->fetch_assoc()){
			$Player_ID = $result["playerID"];
		}
	
		
		$query4 = "INSERT INTO `player_history`(`playerID`, 
		`club_name`, 
		`to`, 
		`from`, 
		`total_runs`, 
		`total_wickets`, 
		`team_leader`) 
		
		VALUES ('".$Player_ID."', 
		'".$_POST['clubPlayedFor0']."', 
		'".$_POST['transferredTo0']."', 
		'".$_POST['transferredFrom0']."', 
		'".$_POST['totalRuns0']."', 
		'".$_POST['totalWickets0']."', 
		'".$_POST['teamLeader0']."')";
		
		$query5 = "INSERT INTO `best_performance`(`playerID`, 
		`club_name`, 
		`opponent`, 
		`runs`, 
		`wickets`, 
		`matchID`, 
		`eventID`) 
		
		VALUES ('".$Player_ID."', 
		'".$_POST['clubFor0']."', 
		'".$_POST['clubAgainst0']."', 
		'".$_POST['runs0']."', 
		'".$_POST['wickets0']."', 
		'".$_POST['matchID0']."', 
		'".$_POST['eventID0']."')";
		
		$query6 = "INSERT INTO `education`(`playerID`, 
		`degree`, 
		`university`, 
		`department`, 
		`result`, 
		`year`) 
		
		VALUES ('".$Player_ID."', 
		'".$_POST['degree0']."', 
		'".$_POST['dept0']."', 
		'".$_POST['institute0']."', 
		'".$_POST['year0']."', 
		'".$_POST['result0']."')		
		";
		
		$conn->query($query4);
		$conn->query($query5);
		$conn->query($query6);
	}
?>

</html>