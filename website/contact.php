<?php

define("TITLE", "Contact - Solfy");
include('includes/header.php');

?>

  <div class="contact">


    <br><h1>Get In Touch!</h1><br>
<hr>
    <form id="contact-form" action="" method="post">

      <label for="name">Your Name</label>
      <input type="text" name="name" id="name">

      <label for="email">Your Email</label>
      <input type="email" name="email" id="email">

      <label for="message">Message</label>
      <textarea type="text" name="message" id="message"></textarea><br>

      <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
      <label for="">Subscribe to newsletter</label>

      <input type="submit" class="button next" name="contact_submit" value="Send Message">

    </form>

    <hr>
</div><!-- contact -->




<?php include('includes/footer.php'); ?>
