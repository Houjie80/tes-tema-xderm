<?php
 exec("ls login.php|awk 'NR==1'|awk -F '.' '{print $1}'",$clo);
  if ($clo[0]) {
include 'header.php';
ceklogin();
  };
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="img/ico.png">
<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<meta charset="UTF-8"><title>Xderm Mini</title>
<style>
		body {
			display: flex; 
			flex-direction: column; 
			justify-content: center;
			min-height: 0vh; 
			color: black; 
			background-image:url(img/background.jpg);
			background-size: cover;
			-webkit-background-size: cover;
			background-repeat: no-repeat;
		}
		
		.btn {
			-moz-appearance: none;
			cursor: pointer;
			margin: 5px;
			align-items: center;
			border: 2px solid #132130 ;
			border-radius: 3px;
			background: #132130;
		}

		.btn:hover, .btn:focus {
			color: #000000;
			outline: 0;
		}
		.geser {
			border-color: #132130;
			color: #121EF6;
			padding: 3px 20px;
			background-image: linear-gradient(180deg, red, yellow, green);
			background-position: 100%;
			background-size: 400%;
			transition: background 30ms ease-in-out;
		}
		
		.geser:hover {
			 background-position: 0;
		}

		.script_txt {
			text-align: left;
			font-family: cursive;
			font-weight: bold;			
			color: #000;
			border: 8px;
			border-radius: 10px;
			background: hsla(0, 0%, 100%, .3);
			align-items: center;
			width: 395px;
			height: 50px;
		}

		.col-butt {
			text-align: center;
			border: 5px;
			align-items: center;
		}

		.inline-block {
			display: inline-block;
			text-align: left;
			margin: 5px;
			top: 0px;
		}
		
		.box_script {
			width: 450px;
			border: none;
			border-radius: 10px;
			margin: 3% auto;
			padding: 10px 10px;
			background-color: black;
			box-shadow: 0px 0px 5px 2px #132130;
		}
		
		.footer {
			width: 100%;
			height: 50px;
			display: flex;
			justify-content: center;
			align-items: center;
			color: #ffffff;
			font-weight: bold;
			bottom: 0px;
			z-index: 1;
			background: repeating-linear-gradient(-45deg, red 0%, yellow 7.14%, rgb(0,255,0) 14.28%,
						rgb(0,255,255) 21.4%, cyan 28.56%, blue 35.7%, magenta 42.84%, red 50%);
			background-size: 600vw 600vw;
			-webkit-text-fill-color: transparent;
			-webkit-background-clip: text;
			animation: slide 10s linear infinite forwards;
		}
		
		@keyframes slide {
			0% {background-position-x: 0%;}
			100% {background-position-x: 600vw;}
		}	
		
		.blink { 
			-webkit-animation: blink .75s linear infinite; 
			-moz-animation: blink .75s linear infinite; 
			-ms-animation: blink .75s linear infinite; 
			-o-animation: blink .75s linear infinite; 
			animation: blink .75s linear infinite; 
			color: #00ACD0; 
			font-weight: bold; 
		} 

		@-webkit-keyframes blink { 
			0% { opacity: 1; } 
			50% { opacity: 1; } 
			50.01% { opacity: 0; } 
			100% { opacity: 0; } 
		} 

		@-moz-keyframes blink { 
			0% { opacity: 1; }
			50% { opacity: 1; }
			50.01% { opacity: 0; } 
			100% { opacity: 0; } 
		}
 
		@-ms-keyframes blink { 
			0% { opacity: 1; } 
			5O% { opacity: 1; }
			50.01% { opacity: 0; } 
			100% { opacity: 0; }
		}
 
		@-o-keyframes blink 
			0% { opacity: 1; } 
			50% { opacity: 1; }
			50.01% { opacity: 0; } 
			100% { opacity: 0; }
		}
 
		@keyframes blink { 
			0% { opacity: 1; } 
			50% opacity: 1; }
			50.01% { opacity: 0;} 
			100% { opacity: 0; } 
		}
		
</style>
<script>
function shipping_calc() {
  var val = document.getElementById("idconf").value;
 if (val === "config1") {
   var data = document.getElementById("isi1").value;
   document.getElementById("isi").value= data;
 }
 if (val === "config2") {
   var data = document.getElementById("isi2").value;
   document.getElementById("isi").value= data;
 }
 if (val === "config3") {
   var data = document.getElementById("isi3").value;
   document.getElementById("isi").value= data;
 }
 if (val === "config4") {
   var data = document.getElementById("isi4").value;
   document.getElementById("isi").value= data;
 }
 if (val === "config5") {
   var data = document.getElementById("isi5").value;
   document.getElementById("isi").value= data;
 }
}
</script>
<script type="text/javascript">
///GET WAN IP////



    $(document).ready(function() {
        setInterval(function() {
            $.ajax({
                url: "screenlog.0",
		cache: false,
                success: function(result) {
		    $("#log").html(result);
                }
            });
        $(document).ready(function() {
                $.ajaxSetup({ cache: false });
                        });
                var textarea = document.getElementById("log");
                textarea.scrollTop = textarea.scrollHeight;
        }, 1000);
    });
/////REFRESH////	
	$(document).ready(function(){
		$('#div_refresh').load("addon.php");
			setInterval(function(){
				$('#div_refresh').load("addon.php");
		},1000);
	});
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}







//////SHOW TIME//////
function showTime(){
			var a_p = "";
			var today = new Date();
			var curr_hour = today.getHours();
			var curr_minute = today.getMinutes();
			var curr_second = today.getSeconds();

			if (curr_hour<12) {
				a_p = "(sugeng Enjing houjie)";
			}else {
				a_p = "(sugeng dalu houjie)";
			}

			if (curr_hour == 0) {
				curr_hour=24;
			}
			if (curr_hour == 24) {
				curr_hour=curr_hour-24;
			}
			curr_hour = checkTime(curr_hour);
			curr_minute = checkTime(curr_minute);
			curr_second = checkTime(curr_second);

			document.getElementById('time').innerHTML= curr_hour+":"+curr_minute+":"+curr_second+" "+a_p;
			
		}

		function checkTime(i){
			if (i<10) {
				i = "0"+i;
			}
			return i;
		}
		setInterval(showTime,100);
</script>
<script type="text/javascript">
    $(document).ready(function() {
        setInterval(function() {
            $.ajax({
                url: "screenlog.0",
		cache: false,
                success: function(result) {
		    $("#log").html(result);
                }
            });
        $(document).ready(function() {
                $.ajaxSetup({ cache: false });
                        });
                var textarea = document.getElementById("log");
                textarea.scrollTop = textarea.scrollHeight;
        }, 1000);
    });
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<body class="box_script" style="text-align:center">
	<center>
		<a href="login.php" onClick="logout()">
		<img src="img/image.png" width: 100%></a>
	</center>
	<form action="logout.php">
            <button type="submit" class="btn geser"><b>metu <i class="fa fa-sign-out"></i></button>
		</form>
		
    <form method="post">
		<center>
			<table align="center"><tr><td class="col-butt">
				
				<input type="submit" name="button1" class="btn geser"  id="strp"
					value="<?php echo exec('cat log/st') ?>"/>
	
				<input type="submit" name="button3" class="btn geser" id="logg"
					value="Log"/>
				
				<input type="submit" name="button2" class="btn geser" id="config"
					value="Config"/>
				
				<input type="submit" name="button4" class="btn geser" id"update"
					value="Update"/>
				</td></tr>
			</table>
		</center>
		<table align="center"><tr><td class="col-butt">	
	<h4 id="time" style="color:blue" class="btn geser" ></h4>
	<h4 id="tanggalwaktu" style="color:black" class="btn geser" ></h4>
	<script>
var tw = new Date();
if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
else (a=tw.getTime());
tw.setTime(a);
var tahun= tw.getFullYear ();
var hari= tw.getDay ();
var bulan= tw.getMonth ();
var tanggal= tw.getDate ();
var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
</script>
	<h4 id="div_refresh"  class="btn geser" ></h4>
	<h4 id="ip" style="color:blue" class="btn geser" ></h4>
	<h4 id="address" style="color:blue" class="btn geser" ></h4>
	<h4 id="isp" style="color:blue" class="btn geser" ></h4>	
	</td></tr>
	</table>	
<?php
  exec('cat /var/update.xderm',$z);
    if ($z[0]) {
 if ( $z[0] != '3.0' ){
echo '<pre><h3 style="color:lime">New versi GUI Detected, Please Update!!</h3></pre>';
};
    };
  if (isset($_POST['button1'])) {
  exec('cat log/st',$o);
if ( $o[0] == 'Start' ) {
 exec('killall -q xderm-mini');
 exec('echo > screenlog.0');
 exec('chmod +x xderm-mini');
 exec('screen -L -dmS gua ./xderm-mini start');
 exec('echo Stop > log/st');
echo '<script>
  document.getElementById("strp").value="Stop";
</script>';
 } else {
 exec('killall -q xderm-mini');
 exec('echo > screenlog.0');
 exec('chmod +x xderm-mini');
 exec('screen -L -dmS gu ./xderm-mini stop');
 exec('echo Start > log/st');
echo '<script>
  document.getElementById("strp").value="Start";
</script>';
}
  }
  if (isset($_POST['button2'])) {
  exec('echo > screenlog.0');
  }
  if (isset($_POST['button4'])) {
  exec('killall -q xderm-mini');
  exec('echo > screenlog.0');
  exec('chmod +x xderm-mini');
  exec('screen -L -dmS upd ./xderm-mini update');
  }
  if (isset($_POST['button3'])) {
  exec('cp log/log.txt screenlog.0 2>/dev/null');
  }
?>
<table align="center"><tr><td class="script_txt"><div class="inline-block"><pre>
<?php
 if (isset($_POST['simpan'])) {
 $config=$_POST['configbox'];
 $conf=$_POST['profile'];
 $use_stunnel=$_POST['use_stunnel'];
 $use_gotun=$_POST['use_gotun'];
 $use_restfw=$_POST['use_restfw'];
 $use_waitmodem=$_POST['use_waitmodem'];
 $mode=$_POST['mode'];
 if ($use_stunnel <> 'yes' ){$use_stunnel='no';}
 if ($use_gotun <> 'yes' ){$use_gotun='no';}
 if ($use_restfw <> 'yes' ){$use_restfw='no';}
 if ($use_waitmodem <> 'yes' ){$use_waitmodem='no';}
 exec('echo "'.$mode.'" > config/mode.default');
 exec('echo "'.$config.'" > config/'.$conf);
 exec('sed -i \'/mode=/,+0 d\' config/'.$conf);
 exec('sed -i \'s/\r$//g\' config/'.$conf);
 exec('sed -i \':a;N;$!ba;s/\n\n//g\' config/'.$conf);
 exec('echo "'.$config.'" > config.txt');
 exec('sed -i \'s/\r$//g\' config.txt');
 exec('sed -i \':a;N;$!ba;s/\n\n//g\' config.txt');
 exec('echo "'.$use_stunnel.'" > config/stun');
 exec('echo "'.$use_gotun.'" > config/gotun');
 exec('echo "'.$use_restfw.'" > config/firewall');
 exec('echo "'.$use_waitmodem.'" > config/modem');
 exec('echo "'.$conf.'" > config/default');
 exec('echo "Config telah di update." > screenlog.0');
 exec('echo "\''.$conf.'\' Menjadi default Config. !" >> screenlog.0');
 $use_boot=$_POST['use_boot'];
if ($use_boot <> 'yes' ){ exec('./xderm-mini disable');
} else { exec('./xderm-mini enable'); }
 exec("cat config/default",$default);
 }
if($_POST['button2']){
exec("cat config/mode.list|awk 'NR==1'",$adamode);
$adamode=$adamode[0];
if (!$adamode) {
exec("echo SSH. >> config/mode.list");
exec("echo Vmess. >> config/mode.list");
exec("echo Trojan. >> config/mode.list");
exec("echo Multi. >> config/mode.list"); }

exec("cat config/config.list|awk 'NR==1'",$ada);
$ada=$ada[0];
if ($ada) {
exec("cat config/default",$default);
$default=$default[0];
 if ($default) {
echo "<h4><center><b>profile seng digunakne: $default</b></center></h4>";
$data = file_get_contents("config/$default");
echo "<textarea name='configbox' id='isi' placeholder='Masukkan config disini' rows='9' cols='50'>$data</textarea>";
 } else {
$data = file_get_contents("config.txt");
echo "<textarea name='configbox' id='isi' placeholder='Masukkan config disini' rows='9' cols='50'>$data</textarea>";
 }
$data1 = file_get_contents("config/config1");
echo "<textarea name='configbox1' id='isi1' rows='3' cols='10' style='display:none;'>$data1</textarea>";
$data2 = file_get_contents("config/config2");
echo "<textarea name='configbox2' id='isi2' rows='3' cols='10' style='display:none;'>$data2</textarea>";
$data3 = file_get_contents("config/config3");
echo "<textarea name='configbox3' id='isi3' rows='3' cols='10' style='display:none;'>$data3</textarea>";
$data4 = file_get_contents("config/config4");
echo "<textarea name='configbox4' id='isi4' rows='3' cols='10' style='display:none;'>$data4</textarea>";
$data5 = file_get_contents("config/config5");
echo "<textarea name='configbox5' id='isi5' rows='3' cols='10' style='display:none;'>$data5</textarea>";
} else {
exec("mkdir -p config;touch config/config.list config/config1 config/config2");
exec("touch config/config3 config/config4 config/config5 config/mode.list");
exec("echo config1 >> config/config.list");
exec("echo config2 >> config/config.list");
exec("echo config3 >> config/config.list");
exec("echo config4 >> config/config.list");
exec("echo config5 >> config/config.list");
exec("echo config1 >> config/default");
$data = file_get_contents("config.txt");
echo "<textarea name='configbox' id='isi' rows='9' cols='50'>$data</textarea>";
$config=$_POST['configbox'];
$conf=$_POST['profile'];
exec('echo "'.$config.'" > config/'.$conf);
exec('sed -i \'s/\r$//g\' config/'.$conf);
exec('sed -i \':a;N;$!ba;s/\n\n//g\' config/'.$conf);
};
echo '<div class="form-box">';
echo '<select name="profile" id="idconf" onchange="shipping_calc()">';
exec("cat config/config.list",$list);
exec("cat config/default",$default);
$default=$default[0];
$x=0;
while($x<count($list)){
if ( $default == $list[$x] ){
echo "<option value=\"$list[$x]\" selected>$list[$x]</option>";
} else {
echo "<option value=\"$list[$x]\">$list[$x]</option>";}
  $x++;}
echo '<form method="post"'>
exec("cat config/stun|awk 'NR==1'",$stun);
  if (!$stun[0]) { exec("echo yes > config/stun"); }
 if ( $stun[0] == "yes"){
echo '<input type="checkbox" name="use_stunnel" value="yes" checked>stunnel'; }
else {
echo '<input type="checkbox" name="use_stunnel" value="yes">stunnel'; }
exec("touch /etc/rc.local");
exec("cat /etc/rc.local 2>/dev/null|grep xderm|grep button|awk '{print $2}'|awk 'NR==1'",$boot);

exec("cat config/gotun|awk 'NR==1'",$gotun);
  if (!$gotun[0]) { exec("echo no > config/gotun"); }
 if ( $gotun[0] == "yes"){
echo '<input type="checkbox" name="use_gotun" value="yes" checked>go-tun2socks'; }
else {
echo '<input type="checkbox" name="use_gotun" value="yes">go-tun2socks'; }

exec("cat config/firewall|awk 'NR==1'",$restfw);
  if (!$restfw[0]) { exec("echo no > config/firewall"); }
 if ( $restfw[0] == "yes"){
echo '<input type="checkbox" name="use_restfw" value="yes" checked>Restart Firewall<br>'; }
else {
echo '<input type="checkbox" name="use_restfw" value="yes">Restart Firewall<br>'; }

echo '<select name="mode" id="idmode">';
exec("cat config/mode.list",$modelist);
exec("cat config/mode.default",$modedefault);
$modedefault=$modedefault[0];
$u=0;
while($u<count($modelist)){
if ( $modedefault == $modelist[$u] ){
echo "<option value=\"$modelist[$u]\" selected>$modelist[$u]</option>";
} else {
echo "<option value=\"$modelist[$u]\">$modelist[$u]</option>";}
  $u++;}

exec("cat config/modem|awk 'NR==1'",$modem);
  if (!$modem[0]) { exec("echo no > config/modem"); }
 if ( $modem[0] == "yes"){
echo '<input type="checkbox" name="use_waitmodem" value="yes" checked>Waiting Modem '; }
else {
echo '<input type="checkbox" name="use_waitmodem" value="yes">Waiting Modem '; }

 if ($boot[0]) {
echo '<input type="checkbox" name="use_boot" value="yes" checked>ON-Boot'; }
else {
echo '<input type="checkbox" name="use_boot" value="yes">ON-Boot'; }
echo '<input type="submit" name="simpan" class="btn geser" value="Simpan"/></form></div>';
} else {
echo '<div id="log" class="scroll"></div></pre></div>';
}
?>
</td></tr>
</table></head>
</div>
	<div class="footer slide">
        Xderm GUI v.3.0<br>
		Theme Design by CHOLIES_HOUJIE<br>
		Copyright&copy Ryan Fauzi
    </div>
</html>
