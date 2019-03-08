<?php
  define("TITLE", "Team - Musicfy");
  include('includes/header.php');

 ?>

  <div id="team-members" class="presentation clearfix">
    <br><h1>Team Mates</h1><br>
    <!-- <p>about us bla bla bla</p> -->
    <hr>

    <?php
      foreach ($teamMembers as $member) {
    ?>

      <div class="member">
        <img src="images/<?php echo $member[img];  ?>.png" alt="<?php echo $member[name] ?>">
        <h3><?php echo $member[name]; ?></h3>
        <p>"<?php echo $member[role]; ?>"</p>
      </div><!-- member -->

    <?php
      }
    ?>
</div><!-- team-members -->

<hr>

<?php include('includes/footer.php'); ?>
