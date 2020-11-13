$(document).ready(function () {
    /*if (((navigator.platform.indexOf('iPad') > -1) || (navigator.platform === 'MacIntel' && navigator.maxTouchPoints > 1)) || (navigator.userAgent.indexOf('Android') > -1 && navigator.userAgent.toLowerCase().indexOf('mobile') < 0)) {
        document.write('<meta name="viewport" content="width=1024, user-scalable=no, target-densitydpi=device-dpi">');
    } else {
        document.write('<meta name="viewport" content="width=440, user-scalable=no, target-densitydpi=device-dpi">');
    }*/
});
function userstatus(user) {
	$.ajax({
		type: "POST",
		url: "/assets/scripts/UsersStatus.php",
		data: "user=" + user,
		beforeSend: function(){},
		success: function(data){
			for (i = 0; i < data.length; i++) {
				//$("#proghajx").html(data[i]);
				var d = new Date();
				var UserName = data[i].User;
				var UserID = data[i].UserID;
				var Online = data[i].Online;
				var LastLogin = data[i].LastLogin;
				var Coins = data[i].Coins;
				var Kills = data[i].Kills;
				var Deaths = data[i].Deaths;
				var Wins = data[i].Wins;
				var Losts = data[i].Losts;
				var Rank = data[i].Rank;
				var RankC = data[i].RankC;
				var FirstLogin = data[i].FirstLogin;
				var TimePlayed = data[i].TimePlayed;
				var JoinedTeams = data[i].JoinedTeams;
				var TntPlaced = data[i].TntPlaced;
				var GlobalUsers = data[i].Users;
				var hour = d.getHours();
				var minute = d.getMinutes();
				if (hour.toString().length < 2) hour = '0' + hour;
				if (minute.toString().length < 2) minute = '0' + minute;
				if (LastLogin != "Online") {
					$("#statusonline").html('Last seen <strong>' + LastLogin + '</strong> on <strong>' + Online + '</strong>');
				} else {
					$("#statusonline").html('User is <strong style="color:green">' + LastLogin + '</strong> on server <strong>' + Online + '</strong>');
					$(".jss33").css("box-shadow", "0 0 4px 1px #0CB035");
				}
				$("#rannkspl").html(Rank);
				$("#rannkspl").css("background-color", RankC);
				$(".jss22").css("color", RankC);
				$("#killsuser").html(Kills);
				$("#deathsuser").html(Deaths);
				$("#coinsuser").html(Coins);
				$("#winsuser").html(Wins);
				$("#lostsuser").html(Deaths);
				$("#FirstJoin").html(FirstLogin + "<small> days since first join</small>");
				$("#TimePlayed").html(TimePlayed + "<small> hours played</small>");
				$("#TeamsJoins").html(JoinedTeams + "<small> teams joined</small>");
				$("#TntPlaced").html(TntPlaced + "<small> TNT's places</small>");
				$("#RanksInfo").html(Rank + "<small> rank</small>");
				$("#ServersInfo").html(LastLogin + "<small> user login</small>");
				$("#AutoRefresh").html(hour + ":" + minute + "<small> Updated </small>");
				
			}
			UserOnline();
			setTimeout(function(){userstatus(user);}, 60000);
		}
	});
}
function UserOnline() {
	$.ajax({
		type: "POST",
		url: "/assets/scripts/OnlineUsers.php",
		data: "",
		beforeSend: function(){},
		success: function(data){
			$("#OnlineUsers").html(data);
			UserOnlinePrint()
		}
	});
}
function UserOnlinePrint() {
	var OnlineUsersNumber = $("#OnlineUserDnone").text();
	console.log(OnlineUsersNumber);
	$("#OnlineUsersNumber").html(OnlineUsersNumber);
}