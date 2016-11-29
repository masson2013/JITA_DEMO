<html>
<body>

Custom Information: <br>
System name:        <?php echo $_POST["sysname"]; ?>  <br>
FPGA Vendor:        <?php echo $_POST["vendor"]; ?>   <br>

CAD Tools Version:  <?php $ver = $_POST["tools"];
                      if ($ver == 152) {
                            echo "2015.2";
                      }
                    ?><br>

Overlay Type:       <?php $type = $_POST["overlay"];
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

Number of PR Tiles: <?php $npr = $_POST["npr"];
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
</body>
</html>

