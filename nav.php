<div class="nav" id="box">

			<a href="index.php"><img alt="icona" src="img/icona.png" height="150" width="150" style="padding:15px;"/></a>

			<div class="linkNav">
				<a href="http://morrolinux.it:43110" class="linka">BLOG</a><br />
			</div>
			<div class="linkNav">
				<a href="lpi.php" class="linka">LPI</a><br />
			</div>
            <div class="linkNav">
				<a href="chisono.php" class="linka">CHI SONO</a><br />
			</div>
			<div class="linkNav">
				<a href="contatti.php" class="linka">CONTATTI</a><br />
			</div>

			<div id="bottom-banner">

				<div style="padding:5px; font-size:12px;">
					<a href="policy.pdf" class="linka">Privacy Policy</a><br />
				</div>
				<div style="padding:5px; font-size:12px;">

          <?php

              $link = array("voglio_diventare_vedova.php", "dedicato_a_voi.php");
              $random = rand(0,1);
              echo "<a href=\"" . $link[$random] . "\" class=\"linka\">Moreno \"Morrolinux\" Razzoli e MrRiky54</a><br />";

           ?>

				</div>
				<div style="padding:5px;">
					<img alt="Built With Love" style="border-width:0" src="http://forthebadge.com/images/badges/built-with-love.svg" />
					<a style="text-align:right;" rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Licenza Creative Commons" height="35px" width="100px" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a>
				</div>

				<!-- Inizio Codice ShinyStat -->
					<script type="text/javascript" src="http://codice.shinystat.com/cgi-bin/getcod.cgi?USER=Morrolinux"></script>
					<noscript>
						<a href="http://www.shinystat.com/it/" target="_top">
						<img src="http://www.shinystat.com/cgi-bin/shinystat.cgi?USER=Morrolinux" alt="Contatore per siti" /></a>
					</noscript>
				<!-- Fine Codice ShinyStat -->

			</div>

</div>
