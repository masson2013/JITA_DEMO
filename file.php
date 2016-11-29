<?php
  $q = $_REQUEST["q"];
  $filename = $q . ".txt";
  if (file_exists($filename)) {
    echo ("<a href=\"" . $filename . "\">" . $filename . "</a>");
  }
?>
