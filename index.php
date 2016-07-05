<!DOCTYPE html>
	<head>
		<title>Morrolinux</title>
		<link href="css/stile.css" rel="stylesheet" type="text/css">

		<?php include("head.html"); ?>

	</head>
	<body>
	    <script>
           if(
           navigator.userAgent.match(/Android/i) ||
           navigator.userAgent.match(/webOS/i) ||
           navigator.userAgent.match(/iPhone/i) ||
           navigator.userAgent.match(/iPod/i) ||
           navigator.userAgent.match(/BlackBerry/i)
           ){
           location.href="mobile/";
           }</script>

        <?php include("nav.php"); ?>

		<div class="testohome">
			<h1 style="text-align:center; font-family: 'Oswald', sans-serif; font-size:80px; font-weight:300;"><strong style="font-weight:400;">Morrolinux</strong> è su <strong style="font-weight:400;">Zeronet</strong>!</h1>
			<p style="text-align:center; font-family: 'Oswald', sans-serif; font-size:30px; font-weight:300;">Clicca su "Blog" a sinistra per accedere al blog su Zeronet!</p>
		</div>

	</body>
</html>
