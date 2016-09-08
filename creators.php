<?php include("head.html"); ?>

		<title>Easter Egg :: Morrolinux</title>
		<link href="css/stile.css" rel="stylesheet" type="text/css">

	</head>
	<body style="background: #D8D8D8;">

		<div class="mobile_bottom">
				<a href="policy.pdf" class="link" id="policy">Privacy Policy</a><br />
		</div>

        <?php include("nav.php"); ?>

				<div class="text">
						<?php
		  					include 'videos.php';
		  					$randindex = rand (0,count($videos)-1);
						?>

						<h1 class="videos_title"><?php echo $videos[$randindex][1]; ?> </h1><br /><br />
						<p>

								<?php
		                echo "<iframe class=\"video\" align=\"left\" src=\"https://www.youtube.com/embed/".$videos[$randindex][0]."\" frameborder=\"0\" allowfullscreen=\"\"></iframe>";
								?>

								<?php echo "<br><span class=\"videos_text\">" .$videos[$randindex][2] . "</span>"; ?>
						</p>
				</div>

<?php include("footer.html"); ?>
