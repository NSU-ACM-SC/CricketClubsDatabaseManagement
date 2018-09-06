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
			<?php if(!isset($_GET["performance"])): ?>
			<h2>Performance</h2>
			<form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<label> Please Select Any</label> <br />
				<input type="checkbox" name="performance[]" value="Batting"> Batting<br />
				<input type="checkbox" name="performance[]" value="Bowling"> Bowling<br />
				<input type="checkbox" name="performance[]" value="fielding" checked> fielding<br />				
				<input type="submit" value="Submit" />
			</form>
			<?php endif; ?>
			<?php if(isset($_GET["performance"])): ?>
				<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <h2>Performance</h2>
                    <h4 class="headers">Match Information </h4>
                    Match ID: <input type="number" name="matchIDPerformance" title="Match ID" placeholder="Match ID"><br><br>
                    Venue ID: <input type="number" name="venueID" title="Venue ID" placeholder="Venue ID"><br><br>
                    Date of the match: <input type="date" name="matchDate" title="Date of the match"><br><br>
                    Player ID: <input type="number" name="playerID" title="Player ID"><br><br>
					<?php foreach($_GET["performance"] as $selected): ?>
                        
						<?php if($selected == "Batting"): ?>
                        <h4 class="headers">Batting Information </h4>
							Batting Strike-Rate <input type="number" name="battingStrikeRate"><br><br>
                            Batting Aggregate: <input type="number" name="battingAggregate"><br><br>
                            % Of Total Team Runs Scored: <input type="number" name="PercTotalTeamRuns"><br><br>
                            Boundary Strike-Rate: <input type="number" name="boundaryStrikeRate" ><br><br>
                            Activity Rate: <input type="number" name="activityRate"><br><br>
						<?php endif; ?>
						
						<?php if($selected == "Bowling"): ?>
                        <h4 class="headers">Bowling Information </h4>
							Economy Rate: <input type="number" name="economyRate"><br><br>
                            Indexed Economy Rate: <input type="number" name="indexedEconomyRate"><br><br>
                            Bowling Aggregate: <input type="number" name="bowlingAggregate"><br><br>
                            Wickets as a % of Possible maximum: <input type="number" name="wicketAsPerc"><br><br>
                            % sixes conceded: <input type="number" name="PercSixesConceded"><br><br>
                            Dot Ball %: <input type="number" name="DotBallPerc"><br><br>
						<?php endif; ?>
						
						<?php if($selected == "fielding"): ?>
                        <h4 class="headers">Fielding Information </h4>
							Fielding Dismissals per Match: <input type="number" name="fieldingDismissals"><br><br>
                            Byes conceded: <input type="number" name="ByesConceded"><br><br>
						<?php endif; ?>
                    <?php endforeach; ?>
                    
					<input type="submit" value="Submit2" />
				</form>
			<?php endif; ?>
		</div>
        
</body>

<?php

    if ( isset($_POST["submit2"]) ){

        require_once('connectsql.php');

		if(isset($_GET["performance"])){
			foreach($_GET["performance"] as $selected){
				if($selected == "Batting"){
					$query = "
						INSERT INTO `batting_performance`(
							`playerID`, 
							`matchID`,
							`batting_aggregate`,
							`percentage_run`, 
							`boundary_strike_rate`, 
							`activity_rate`, 
							`batting_strike_rate`
						) 
						VALUES (
							'".$_POST['playerID']."', 
							'".$_POST['matchIDPerformance']."',
							'".$_POST['battingAggregate']."',
							'".$_POST['PercTotalTeamRuns']."', 
							'".$_POST['battingStrikeRate']."', 
							'".$_POST['activityRate']."', 
							'".$_POST['boundaryStrikeRate']."'
						)
					";
					
					$conn->query($query);
				}
				if($selected == "Bowling"){
					 $query = "INSERT INTO `bowling_performance`(
						`playerID`, 
						`matchID`, 
						`economy_rate`, 
						`indexed_economy_rate`,
						`bowling_aggregate`, 
						`wickets_percentage`, 
						`sixes`, 
						`dots`
					) 
					VALUES (
						'".$_POST['playerID']."', 
						'".$_POST['matchIDPerformance']."', 
						'".$_POST['economyRate']."', 
						'".$_POST['indexedEconomyRate']."',
						'".$_POST['bowlingAggregate']."', 
						'".$_POST['wicketAsPerc']."', 
						'".$_POST['PercSixesConceded']."', 
						'".$_POST['DotBallPerc']."'
					)";
					
					$conn->query($query);
				}
				if($selected == "fielding"){
					$query = "
						INSERT INTO `fielding_performance`(
							`playerID`, 
							`matchID`, 
							`dismissals`, 
							`byes`
						) 
						VALUES (
							'".$_POST['playerID']."', 
							'".$_POST['matchIDPerformance']."', 
							'".$_POST['fieldingDismissals']."', 
							'".$_POST['ByesConceded']."'
						)
					";
					
					$conn->query($query);
				}
			}
		}
		
	}
?>

</html>