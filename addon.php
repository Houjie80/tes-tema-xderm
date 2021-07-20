<?php
$output = shell_exec("sensors | grep 'aml_thermal' | awk '{print $2}' | sed 's/(//g; s/)//g'");
echo "<pre> <span style='color:blur'>Suhu : $output</span></pre>";
$output = shell_exec("ifconfig tun0 | grep 'bytes:' | awk '{print $7, $8}' | sed 's/(//g; s/)//g'");
echo "<pre> <span style='color:blue'>Upload : $output</span></pre>";
$output = shell_exec("ifconfig tun0 | grep 'bytes:' | awk '{print $3, $4}' | sed 's/(//g; s/)//g'");
echo "<pre> <span style='color:blue'>Download : $output</span></pre>";


$ip_address = '8.8.8.8'; // IP address you'd like to ping.
exec("ping -c 1 " . $ip_address . " | head -n 2 | tail -n 1 | awk '{print $7, $8}'", $ping_time);
echo "<pre><span style='color:lime'>Respon $ping_time[0] </span></pre>";   // First item in array, since exec returns an array.

?>

<script>
$.get("http://ip-api.com/json", function (response) {
    $("#ip").html("IP: " + response.query);
    $("#address").html("Location: " + response.country + ", " + response.city);
    $("#isp").html("ISP: " + response.isp);
}, "jsonp");
</script>

