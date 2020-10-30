<?php
error_reporting(0);
ini_set('display_errors', 0);
require ("../../config.php");
/*$stmt = $link->prepare("SELECT * FROM `users` WHERE `Player` = ?");
$stmt->bind_param("s", $keyws);
$keyws = $_POST["user"];
$stmt->execute();
$stmt->bind_result($ID, $Player, $Rank, $Online, $LastLogin, $Coins, $Kills, $Deaths, $Wins, $Losts);*/
$query ="SELECT * FROM `users` WHERE `Player` = '".$_POST["user"]."'";
$result = $link->query($query);	
$row = $result->fetch_assoc();
if ($row["Player"] == null) {
	$arr = array(
		array(
			"User" => "",
			"UserID" => "",
			"Rank" => 'User not found',
			"RankC" => "#0d0d0d",
			"Online" => "Server",
			"LastLogin" => "Never",
			"Coins" => "0",
			"Kills" => "0",
			"Deaths" => "0",
			"Wins" => "0",
			"Losts" => "0",
			"FirstLogin" => "Never",
			"TimePlayed" => "0",
			"JoinedTeams" => "0",
			"TntPlaced" => "0",
			"Users" => "0",
			"PageUpdated" => date("H:m"),
		),
	);
} else {
	switch ($row["Rank"]) {
		case "Administrator":
			$tagpex = "rgb(247, 167, 56)";
			break;
		case "Moderator":
			$tagpex = "rgb(158, 33, 33)";
			break;
		case "Referee":
			$tagpex = "rgb(1, 102, 102)";
			break;
		case "Cordinator":
			$tagpex = "rgb(42, 133, 132)";
			break;
		case "Donator":
			$tagpex = "rgb(156 0 151)";
			break;
		case "User":
			$tagpex = "rgb(158, 158, 158)";
			break;
	}
	$firstlogin = new DateTime($row["FirstLogin"]);
	$firstloginn = new DateTime(date());
	$timelogin = $firstlogin->diff($firstloginn);
	$arr = array(
		array(
			"User" => $row["Player"],
			"UserID" => $row["ID"],
			"Rank" => $row["Rank"],
			"RankC" => $tagpex,
			"Online" => $row["Online"],
			"LastLogin" => $row["LastLogin"],
			"Coins" => $row["Coins"],
			"Kills" => $row["Kills"],
			"Deaths" => $row["Deaths"],
			"Wins" => $row["Wins"],
			"Losts" => $row["Losts"],
			"FirstLogin" => $timelogin->format('%a'),
			"TimePlayed" => gmdate("H", $row["TotalPlayed"]),
			"JoinedTeams" => $row["TeamsJoins"],
			"TntPlaced" => $row["TntPlaced"],
			"Users" => "0",
			"PageUpdated" => date("H:m"),
		),
	);
}
header('Content-Type: application/json');
echo json_encode($arr);
?>