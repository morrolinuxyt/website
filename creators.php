<!DOCTYPE html>
	<head>
		<title>Easter Egg :: Morrolinux</title>
		<link href="css/stile.css" rel="stylesheet" type="text/css">
		<?php include("head.html"); ?>
	</head>
	<body>
        <?php include("nav.php"); ?>
				<div class="testo">
					<?php
					include 'videos.php';
					$randindex = rand (0,count($videos)-1);
					?>

					<h1><?php echo $videos[$randindex][1]; ?> </h1> <br /><br />

					<table><tbody><tr><td>
						<?php
echo "<iframe width=\"820\" height=\"630\" align=\"left\" style=\"margin-right:30px; position:relative;\" src=\"https://www.youtube.com/embed/".$videos[$randindex][0]."\" frameborder=\"0\" allowfullscreen=\"\"></iframe>";
						?>
							</td></tr><tr><td>
								<?php echo "<br>" .$videos[$randindex][2]; ?>
						<p></p></td></tr></tbody></table>

				</div>
	</body>
</html>
