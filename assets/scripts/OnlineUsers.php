<?php
error_reporting(0);
ini_set('display_errors', 0);
require ("../../config.php");
/*$stmt = $link->prepare("SELECT * FROM `users` WHERE `Player` = ?");
$stmt->bind_param("s", $keyws);
$keyws = $_POST["user"];
$stmt->execute();
$stmt->bind_result($ID, $Player, $Rank, $Online, $LastLogin, $Coins, $Kills, $Deaths, $Wins, $Losts);*/
$query ="SELECT * FROM `users` WHERE `LastLogin` = 'Online' LIMIT 16";
$result = $link->query($query);	
foreach($result as $row) {
	echo '<a href="profile.php?u='.$row["Player"].'"><img class="avatar" src="'.$apiavatar.'/'.$row["Player"].'"/><div class="tooltip dnone" role="tooltip" id="tooltip375407" style="top: 264.453px; left: 600.328px; display: block;"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">'.$row["Player"].'</div></div></a>';
	$i = $i + 1;
}
echo '<div id="OnlineUserDnone" class="dnone">'.$i.'</div>';
?>