<?php @include('templates/header.php'); ?>
  ….oooO…………..<br>
  …..(….)…Oooo…<br>
  ……)../…..(….)….<br>
  …..(_/…….)../…..<br>
  ……………(_/…….<br>
  
  <h4>Tránh ra bạn ơi</h4>

  <?php for($i = 1; $i <= 25; $i++) {
    echo '<a href="/day-'. $i .'.php">Day '. $i .'</a><br>';
  } ?>

<?php @include('templates/footer.php');
