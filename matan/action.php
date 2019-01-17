<?php
  $link = mysqli_connect('0.0.0.0', 'anton', '', 'DB') or die('Error: ' . mysqli_connect_error());
  $one = mysqli_real_escape_string($link, $_POST['matan']);
  printf(%one);
?>
