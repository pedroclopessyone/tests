<html>
<title>RED HAT OPENSHIFT | CONTAINERS</title>
<body>
<h1> RHOCP | DEMO </h1>
<br>
<h2> DUMMY APP FOR QLS DEMO </h2>
<img src="redhat.png" alt="Kubernetes and Docker" width="500" height="250">
<br>
<img src="openshift.png" alt="Kubernetes and Docker" width="300" height="250">
<h2><?php
$output = shell_exec('echo $(hostname)');
echo "<pre>$output</pre>";
date_default_timezone_set("Europe/Lisbon");
echo "============================="."<br>";
#echo "HOUR | ". date("h:i:sa") . " " ."DATE |" ." " . date("d/m/Y") . "<br>";
#echo "DAY  |" . date("d/m/Y") . "<br>";
echo '<i style="color:red;font-size:30px;font-family:calibri ;">
      Hour | </i> '. date("h:i:sa"); 
echo '<i style="color:orange;font-size:40px;font-family:calibri ;">
      || </i> ';
echo '<i style="color:red;font-size:30px;font-family:calibri ;">
      Date | </i> '. date("d/m/Y") . "<br>"; 
echo "=============================";
?></h2>
<h2>Pedro Cravo Lopes | Syone</h2>
</body>
</html>
