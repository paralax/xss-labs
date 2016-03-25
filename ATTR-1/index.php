<?php     include("../common/header.php");   ?>

<?php
  hint("direct URL manipulation");
?>

<p>

<?php
  print "Not found: " . urldecode($_SERVER["REQUEST_URI"]);
?>