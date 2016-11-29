<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="styles.css">
<title>JITA DEMO</title>

</head>

<body id="home">
<!-- <img src="progress_bar.gif" alt="bar"> -->
<div id="page">
  <div id="name"><center><p>Just In Time Assembly (JITA)</p></center></div>
  <div class="clear">&nbsp;</div>

  <ul id="nav">
      <li class="home"><a href="http://uaf132959.ddns.uark.edu/">Generator</a></li>
  </ul>

  <hr>
  <div id="detailsLeft">
    <h3>Generated Overlay:</h3>
    <b>
    <?php
        $q = $_REQUEST["q"];
        $filename = $q . ".zip";
        if (file_exists($filename)) {
          echo ("<a href=\"" . $filename . "\">" . $filename . "</a>");
        } else {
          echo ("No such File!");
        }
    ?>
    </b>
  </div>
</div>
</body>
</html>
