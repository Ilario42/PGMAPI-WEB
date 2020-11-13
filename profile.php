<?php
error_reporting(0);
ini_set('display_errors', 0);
require("config.php");
if ($_GET["u"] == "") $_GET["u"] = $administrator;
echo '
<html>
	<head>
		<meta charset="UTF-8">
		<title>'.$_GET["u"]." - ".$name.'</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="'.$logourl.'"/>
		<style>@import url("https://fonts.googleapis.com/css2?family=Fira+Mono&family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap");@font-face{font-family:"Noto Sans";src:local("Helvetica Neue"),local("Arial");unicode-range:U+60;font-weight:400;font-style:normal;}@font-face{font-family:"Noto Sans";src:local("Helvetica Neue"),local("Arial");unicode-range:U+60;font-weight:700;font-style:normal;}@font-face{font-family:"Noto Sans";src:local("Helvetica Neue"),local("Arial");unicode-range:U+60;font-weight:400;font-style:italic;}@font-face{font-family:"Noto Sans";src:local("Helvetica Neue"),local("Arial");unicode-range:U+60;font-weight:700;font-style:italic;}strong,b{font-weight:700!important}</style>
		<link rel="stylesheet" type="text/css" href="assets/main.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="assets/main.js"></script>
		<script>userstatus("'.$_GET["u"].'");</script>'; ?>
		<script>if (((navigator.platform.indexOf('iPad') > -1) || (navigator.platform === 'MacIntel' && navigator.maxTouchPoints > 1)) || (navigator.userAgent.indexOf('Android') > -1 && navigator.userAgent.toLowerCase().indexOf('mobile') < 0)) {
			document.write('<meta name="viewport" content="width=1024, user-scalable=no, target-densitydpi=device-dpi">');
		} else {
        document.write('<meta name="viewport" content="width=440, user-scalable=no, target-densitydpi=device-dpi">');
		}</script>
	<?php
	echo'	
	</head>
	<body>
	   <div id="app">
		  <header class="MuiPaper-root MuiAppBar-root MuiAppBar-positionSticky MuiAppBar-colorDefault jss2 MuiPaper-elevation4">
			 <div class="jss6 jss3">
				<div class="MuiToolbar-root MuiToolbar-regular jss4 MuiToolbar-gutters">
				   <a class="MuiTypography-root MuiLink-root MuiLink-underlineNone jss7 MuiTypography-colorPrimary" href="/">
					  <img src="'.$logourl.'" class="jss8">
					  <h6 class="MuiTypography-root jss9 MuiTypography-h6">'.$name.'</h6>
				   </a>
				   <a class="MuiButtonBase-root MuiButton-root MuiButton-text jss10" tabindex="0" aria-disabled="false" href="'.$homebuttonurl.'">
					  <span class="MuiButton-label">
						 <svg class="MuiSvgIcon-root jss12" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
							<path d="M21 13v10h-6v-6h-6v6h-6v-10h-3l12-12 12 12h-3zm-1-5.907v-5.093h-3v2.093l3 3z"/>
						 </svg>
						 Home
					  </span>
					  <span class="MuiTouchRipple-root"></span>
				   </a>
				   <div class="jss5"></div>
				   <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss16" tabindex="0" type="button">
					  <span class="MuiButton-label">
						<form class="player-search" action="profile.php" method="get">
							<input class="input-sm form-control typeahead" id="u" name="u" placeholder="Search for a player" type="text">
						</form>
					  </span>
					  <span class="MuiTouchRipple-root"></span>
				   </button>
				</div>
			 </div>
		  </header>
		  <div class="jss6 jss1">
			 <div class="jss19">
				<h2 class="MuiTypography-root jss22 jss23 MuiTypography-h2">'.$_GET["u"].'</h2>
				<div class="jss21 jss24">
				   <p class="MuiTypography-root jss25 jss26 jss27 MuiTypography-body1 ranksp" id="rannkspl"></p>
				</div>
				<div class="jss20">
				   <div class="jss31">
					  <img src="'.$apiavatar.'/'.$_GET["u"].'" class="jss33 jss34">
					  <div class="jss35">
						 <p class="MuiTypography-root MuiTypography-body1" id="statusonline"></p>
					  </div>
				   </div>
				   <div class="col-md-2 col-sm-3 col-xs-6">
						<div class="row headsss">
							<div class="col-md-4 heads">
								<div class="hidden-sm" id="OnlineUsers">
							
								</div>
								<div class="nameonline">Online</div>
								<div class="numberonline" data-placement="top" id="OnlineUsersNumber">
								
								</div>
							</div>
						</div>
				   </div>
				   <div class="jss36">
					  <div class="jss37">
						 <div class="jss38">
							<div class="MuiTypography-root MuiTypography-h4"><span class="" id="killsuser">0</span></div>
							<div class="MuiTypography-root jss39 MuiTypography-h5">Kills</div>
						 </div>
						 <div class="jss38">
							<div class="MuiTypography-root MuiTypography-h4"><span class="" id="deathsuser">0</span></div>
							<div class="MuiTypography-root jss39 MuiTypography-h5">Deaths</div>
						 </div>
						 <div class="jss38">
							<div class="MuiTypography-root MuiTypography-h4"><span title="" class="" id="coinsuser">0</span></div>
							<div class="MuiTypography-root jss39 MuiTypography-h5">Coins</div>
						 </div>
					  </div>
				   </div>
				</div>
			 </div>
			 <div class="jss40">
				<div class="MuiTabs-root jss41">
				   <div class="MuiTabs-scroller MuiTabs-fixed" style="overflow:hidden">
					  <div class="MuiTabs-flexContainer" role="tablist"><button class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary jss42 Mui-selected jss44" tabindex="0" type="button" role="tab" aria-selected="true"><span class="MuiTab-wrapper">Stats</span></button></div>
					  <span class="jss45 jss46 MuiTabs-indicator jss43" style="left: 128px; width: 0px;"></span>
				   </div>
				</div>
				<div class="jss49">
				   <h3 class="MuiTypography-root jss56 MuiTypography-h3">PGM</h3>
				   <div class="tab-pane active" id="stats">
					   <div class="row">
						  <div class="col-md-3 col-sm-6">
							 <h3 data-placement="top" rel="tooltip" title="" id="FirstJoin">
								
							 </h3>
						  </div>
						  <div class="col-md-3 col-sm-6">
							 <h3 id="TimePlayed">
								
							 </h3>
						  </div>
						  <div class="col-md-3 col-sm-6">
							 <h3 id="TeamsJoins">
								
							 </h3>
						  </div>
						  <div class="col-md-3 col-sm-6">
							 <h3 id="TntPlaced">
								
							 </h3>
						  </div>
					   </div>
					   <hr>
					   <h4>User info</h4>
					   <div class="row">
						  <div class="col-md-3 col-sm-6">
							 <h3 id="RanksInfo">
								
							 </h3>
						  </div>
						  <div class="col-md-3 col-sm-6">
							 <h3 id="ServersInfo">
								
							 </h3>
						  </div>
					   </div>
					   <hr>
					   <h4>
						  PGM-API_Stats: 
					   </h4>
					   <div class="row marginfixtop">
						  <div class="col-md-3">
							 <div class="row marginfix">
								<div class="col-sm-6">
								   <h3 id="AutoRefresh">
									  
								   </h3>
								</div>
							 </div>
						  </div>
						  <div class="col-md-3">
							 <div class="row marginfix">
								<div class="col-sm-6">
								   <h3>
									  <small>Version 1.0</small>
									  
								   </h3>
								</div>
							 </div>
						  </div>
						  <div class="col-md-3">
							 <div class="row marginfix">
								<div class="col-sm-6">
								   <h3>
									  <small><a href="https://www.ilariochiera.it/documentations/pgmapi" style="color:black">Documentation</a></small>
								   </h3>
								</div>
							 </div>
						  </div>
						  <div class="col-md-3">
							 <div class="row marginfix">
								<div class="col-sm-6">
								   <h3>
									  <small><a href="https://www.ilariochiera.it/documentations/pgmapi" style="color:black">GitHub.W</a></small>
								   </h3>
								</div>
							 </div>
						  </div>
						  <div class="col-md-3">
							 <div class="row marginfix">
								<div class="col-sm-6">
								   <h3>
									  <small><a href="https://www.ilariochiera.it/documentations/pgmapi" style="color:black">GitHub.P</a></small>
								   </h3>
								</div>
							 </div>
						  </div>
					   </div>
					</div>
				</div>
			 </div>
		  </div>
		  <div class="jss6">
			</div>
	   </div>
	</body>
</html>';
?>