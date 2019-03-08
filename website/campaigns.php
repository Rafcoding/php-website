
<?php

define("TITLE", "Campaigns - Musicfy");
include('includes/header.php');

?>
  <div class="presentation">
  <div id="promotions">


    <br><h1>Campaigns</h1><br>
    <hr>
    <p id="justy">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p><br>
    <p id="justy"><em>Click on any promotion to learn more about it.</em></p><br><br>


    <ul>
      <?php foreach ($promotions as $promotion => $item) { ?>
        <li><a href="promo.php?item=<?php echo $promotion; ?>"><?php echo $item[title]; ?> £<?php echo $item[price]; ?>/month</a></li>
    <?php } ?>
    </ul>
    <p class="exception"><sup>*</sup>Open only to users who haven't already tried Premium.</p>
    <hr>
  </div><!-- promotions -->
  </div><!-- presentation -->



<?php include('includes/footer.php'); ?>
