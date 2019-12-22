<?php include "assets/head.html"; ?>

    <title>Morrolinux</title>

  </head>
  <body>

<?php
  if (file_exists('udemy_coupons.json')){
    $show_promo = true;
  } else {
    $show_promo = false;
  }
?>

    <?php include "assets/nav.html"; ?>

    <div class="container">
      <!--<h1 style="text-align: center;">Ultimo Video Caricato</h1>-->
      <iframe class="resize" src="https://www.youtube.com/embed?listType=user_uploads&list=morrolinux" frameborder="0" allowfullscreen></iframe>

<?php if($show_promo){ ?>
<a href="lpi.php"><div class="banner"> Offerta a tempo limitato! Tutti i corsi Linux in <b>offerta speciale</b> a 9,99€ anzichè <s>149€</s><br><img src="img/right-arrow.svg" class="blink arrow"/> Clicca qui <img src="img/left-arrow.svg" class="blink arrow"/></div></a>
<?php } else { ?>
<br><br>
<?php }?>

      <?php include "assets/letter.html"; ?>
    </div>

<?php include "assets/footer.html"; ?>
