<?php include "assets/head.html"; ?>

    <title>Creators :: Morrolinux</title>

  </head>
  <body>

    <?php include "assets/nav.html"; ?>

    <div class="container">
      <?php
        include 'assets/videos.php';
        $randindex = rand (0,count($videos)-1);
        echo "<h1>" . $videos[$randindex][1] . "</h1>";
        echo "<iframe class=\"video\"  src=\"https://www.youtube.com/embed/".$videos[$randindex][0]."\" frameborder=\"0\" allowfullscreen=\"\"></iframe>";
        echo "<p class=\"videos_text\">" .$videos[$randindex][2] . "</p>";
      ?>
    </div>

<?php include "assets/footer.html"; ?>
