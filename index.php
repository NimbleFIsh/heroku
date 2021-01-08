<?php
  session_start();
  if (isset($_SESSION['name'])) {
    echo 'Привет, ' . $_SESSION['name'] . '<br />';
    echo '<a href="./exit.php" style="color:#000;">Забудь</a>';
  } else {
    include 'index.html';
  }
?>
