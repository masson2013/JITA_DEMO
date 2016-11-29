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
    <h3>Generating:</h3>
    <img src="progress_bar.gif" alt="bar">
  </div>

  <?php
    header("refresh:3; url=genfile.php?q=" . $_POST["sysname"]);

    $sysname = $_POST["sysname"];
    $type = $_POST["overlay"];
    $npr = $_POST["npr"];

    if ($type == 1) {
      switch ($npr) {
        case '2':
          $cmd = "cp ./tmp/1D_2C.zip ./" . $sysname . ".zip 2>&1 1> /dev/null";
          // echo("<b>$cmd</b>");
          $output = shell_exec($cmd);
          // echo("<pre>$output</pre>");
          break;

        case '4':
          $cmd = "cp ./tmp/1D_4C.zip ./" . $sysname . ".zip 2>&1 1> /dev/null";
          // echo("<b>$cmd</b>");
          $output = shell_exec($cmd);
          // echo("<pre>$output</pre>");
          break;

        case '8':
          $cmd = "cp ./tmp/1D_8C.zip ./" . $sysname . ".zip 2>&1 1> /dev/null";
          // echo("<b>$cmd</b>");
          $output = shell_exec($cmd);
          // echo("<pre>$output</pre>");
          break;

        default:
          $cmd = "cp ./tmp/1D_2C.zip ./" . $sysname . ".zip 2>&1 1> /dev/null";
          // echo("<b>$cmd</b>");
          $output = shell_exec($cmd);
          // echo("<pre>$output</pre>");
          break;
      }
    } else {
        switch ($npr) {
          case '2':
            $cmd = "cp ./tmp/2D_4C.zip ./" . $sysname . ".zip 2>&1 1> /dev/null";
            // echo("<b>$cmd</b>");
            $output = shell_exec($cmd);
            // echo("<pre>$output</pre>");
            break;

          case '4':
            $cmd = "cp ./tmp/2D_4C.zip ./" . $sysname . ".zip 2>&1 1> /dev/null";
            // echo("<b>$cmd</b>");
            $output = shell_exec($cmd);
            // echo("<pre>$output</pre>");
            break;

          case '8':
            $cmd = "cp ./tmp/2D_8C.zip ./" . $sysname . ".zip 2>&1 1> /dev/null";
            // echo("<b>$cmd</b>");
            $output = shell_exec($cmd);
            // echo("<pre>$output</pre>");
            break;

          default:
            $cmd = "cp ./tmp/2D_4C.zip ./" . $sysname . ".zip 2>&1 1> /dev/null";
            // echo("<b>$cmd</b>");
            $output = shell_exec($cmd);
            // echo("<pre>$output</pre>");
            break;
        }
    }

    // $output = shell_exec('ls -lart');
    // echo "<pre>$output</pre>";
  ?>

</div>
</body>
</html>
