<?php
  define("TITLE", "Promotion - Musicfy");
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

  // function pricePerYear($price, 12) {
  //   $totalprice = $price * 12
  //   echo money_format('%.2n', $totalprice);
  // }

 ?>

  <hr>

  <div id="promo">
    <h1><?php echo $promotion[title];  ?> <span class="price">£ <?php  echo $promotion[price] ?></span></h1>
    <p><?php echo $promotion[conditions] ?></p>
    <br> -->
    <p><em>Total price per year: <?php  pricePerYear($promotion[price], 12) ?></em></p>

  </div><!-- promo -->

  <hr>

  <a href="campaigns.php" class="button previous">&laquo; Back to Campaigns</a>

<?php include('includes/footer.php'); ?>
