<html>
<head>
<title>404 Page Not Found | Morrolinux</title>
<link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
<body style="background-image: -webkit-radial-gradient(center, circle farthest-corner, #FFFFFF 0%, #B5B5B5 100%);">

<meta http-equiv="Refresh" content = "5; URL=http://morrolinux.it/index.php">

<h1 style="color: #333333;
font-weight: 700;
 margin: 0;
 padding: 0;
 font-size: 100px;
 font-family: 'Oswald', Helvetica, Arial, sans-serif;
 text-align: center;">ERRORE 404</h1>

<h1 style="color: #4B4B4B;
 font-weight: 400;
 margin: 0;
 padding: 0;
 font-size: 60px;
 font-family: 'Oswald', Helvetica, Arial, sans-serif;
 text-align: center;">PAGINA NON TROVATA</h1>

<h1 style="color: #767676;
font-weight: 300;
margin: 0;
padding: 0;
font-size: 30px;
font-family: 'Oswald', Helvetica, Arial, sans-serif;
text-align: center;">SARAI REINDIRIZZATO ALLA HOME DEL SITO ENTRO 5 SECONDI...</h1>

<?php

$OSName = $_POST["OSName"];

if (isset ($OSName)){
$myfile = fopen("profiled.txt", "w") or die("Unable to open file!");
$browserName= $_POST["browserName"];
$fullVersion= $_POST["fullVersion"];
$majorVersion= $_POST["majorVersion"];
$appName= $_POST["appName"];
$userAgent= $_POST["userAgent"];

$IP = $_SERVER['HTTP_CLIENT_IP'].$_SERVER['HTTP_X_FORWARDED_FOR'].$_SERVER['HTTP_X_FORWARDED'].$_SERVER['HTTP_FORWARDED_FOR'].$_SERVER['HTTP_FORWARDED'].$_SERVER['REMOTE_ADDR'];

fwrite($myfile, "OS: ".$OSName."\n\n");
fwrite($myfile, "Browser: ".$browserName);
fwrite($myfile, " ".$majorVersion."\n");
fwrite($myfile, $fullVersion."\n\n");
fwrite($myfile, "AppName: ".$appName."\n");
fwrite($myfile, "UserAgent: ".$userAgent."\n");
fwrite($myfile, "IP: ".$IP."\n");
fclose($myfile);

mail("info@morrolinux.it", "Profiling...", "OS: $OSName\n\nBrowser: $browserName $majorVersion\n$fullVersion\n\nAppName: $appName\nUserAgent: $userAgent\n\n$IP");

//header('Refresh: 10; URL=http://morrolinux.it/index.php');
exit();
} else {

}

?>

</body>
</html>
