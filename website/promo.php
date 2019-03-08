<?php
  define("TITLE", "Subscriptions - Solfy");
  include('includes/header.php');

// using preg-replace
  function strip_bad_chars( $input ) {
    $output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input );
    return $output;
  }


  if (isset($_GET['item'])) {

     $promo = strip_bad_chars( $_GET['item'] );

     $promotion = $promotions[$promo];

  }

  //Calculate total price per Year

  // function pricePerYear($price, $months) {
  //   $totalprice = $price * $months;
  //   echo money_format('%.2n', $totalprice);
  // }

 ?>

  <hr>

  <div id="promo">
    <h1 class="green"><?php echo $promotion[title];  ?> £<?php  echo $promotion[price] ?>/month</h1><br>
    <p class="conditions">Conditions: <?php echo $promotion[conditions] ?></p>
    <br>

  </div><!-- promo -->

  <hr>

  <a href="campaigns.php" class="campaigns">&laquo; Back to Campaigns</a>

<?php include('includes/footer.php'); ?>
