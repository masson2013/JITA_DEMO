<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="styles.css">
<title>JITA DEMO</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body id="home">

<div id="page">
  <div id="name"><center><p>Just In Time Assembly (JITA)</p></center></div>
  <div class="clear">&nbsp;</div>

  <ul id="nav">
      <li class="home"><a href="http://csce.uark.edu/~senma/CSCE2214/index.html">Generator</a></li>
  </ul>

  <hr>

  <div id="detailsLeft">
  <!-- Custom Information: <br> -->
  <h2>System name:</h2> <span id="sysn"><?php echo $_POST["sysname"]; ?></span>  <br>
  <h2>FPGA Vendor:</h2>        <?php echo $_POST["vendor"]; ?>   <br>

  <h2>CAD Tools Version:</h2>  <?php $ver = $_POST["tools"];
                        if ($ver == 152) {
                              echo "2015.2";
                        }
                      ?><br>

  <h2>Overlay Type:</h2>       <?php $type = $_POST["overlay"];
                        switch ($type) {
                          case '1':
                            echo "1D Crossbar";
                            break;

                          case '2':
                            echo "2D Switch";
                            break;

                          default:
                            echo "1D Crossbar";
                            break;
                        }
                      ?>  <br>

  <h2>Number of PR Tiles:</h2> <?php $npr = $_POST["npr"];
                        switch ($npr) {
                          case '2':
                            echo "2 PR Tiles";
                            break;

                          case '4':
                            echo "4 PR Tiles";
                            break;

                          case '8':
                            echo "8 PR Tiles";
                            break;

                          default:
                            echo "2 PR Tiles";
                            break;
                        }
                      ?>  <br>
</div>

<div id="detailsRight">
<h3>Generating:</h3>
<img src="progress_bar.gif" alt="bar">

<!-- <p id="Result"></p> -->
<!-- <div id="Result"></div> -->

<div id="dynamic"></div>

<!-- <script type="text/javascript">
$(document).ready(function() {
    $("#dynamic").load("file.php");
});
</script>
 -->

<script type="text/javascript">


var $scores = $("#dynamic");
var $sysn = $("#sysn");
setInterval(function () {
    $scores.load("file.php?q=" + $sysn.text());
}, 3000);
</script>

<!--   if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
    $uri = 'https://';
  } else {
    $uri = 'http://';
  }
  $uri .= $_SERVER['HTTP_HOST'];
  header('Location: '.$uri.'/JITA_DEMO/welcome.php');
  exit;
 -->
</div>


</body>
</html>
