<?php

//navbar items

  $navItems = array(

    array(
      address => "index.php",
      title   => "Home"
    ),
    array(
      address => "team.php",
      title   => "Team"
    ),
    array(
      address => "campaigns.php",
      title   => "Campaigns"
    ),
    array(
      address => "contact.php",
      title   => "Contact"
    )
  );

// team mates

  $teamMembers = array(

    array(
      name    => "Rio",
      role    => "Web Developer",
      img     => "pic7"
    ),
    array(
      name    => "Paula",
      role    => "UX Designer",
      img     => "pic2"
    ),
    array(
      name    => "Kevin",
      role    => "Product Manager",
      img     => "pic1"
    )
  );

// Campaigns and promotions

    $promotions = array(

//array with custom key
      "student"   => array(

        title        =>  "Students - ",
        price        =>  4.99,
        conditions   =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
      ),
      "family"   => array(

        title        =>  "Family - ",
        price        =>  7.99,
        conditions   =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
      ),
      "premium"   => array(

        title        =>  "Premium - ",
        price        =>  9.99,
        conditions   =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
      ),
      "3-months-trial"   => array(

        title        =>  "3 Months Trial<sup>*</sup> - ",
        price        =>  0.99,
        conditions   =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
      )

    )

?>
