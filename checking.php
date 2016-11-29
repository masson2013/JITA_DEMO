<?php
$q = $_REQUEST["q"];
$filename = $q . ".txt";
if (file_exists($filename)==0) {
  // echo $filename;
  echo ("<img src=\"tick.png\" alt=\"tick\" style=\"width:20px;height:20px;\">");
} else {
  echo ("<img src=\"cross.png\" alt=\"tick\" style=\"width:20px;height:20px;\">");
}

?>
