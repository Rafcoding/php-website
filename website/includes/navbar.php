<ul>
  <?php
    foreach ($navItems as $item) {
      echo "<li><a href=\"$item[address]\">$item[title]</a></li>";
    }
  ?>
</ul>
