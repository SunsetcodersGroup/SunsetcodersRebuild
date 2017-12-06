<?php
######################## -  Config  - #########################
include 'config/config.php';
echo '<link rel="stylesheet" href="../../css/downunder.css" />';
    ?>
                    <div class="headerContent">
                        <div class="largeFont"><a href="../index.php"><img src="../Images/banner.jpg" alt="..."></a></div>
                    <div class="smallFont"><br>Survival Fun Server<br></div>
                </div>
<?php
include 'inc/_header.inc.php';
include 'inc/functions.php';
######################## -  MySQL connect  - #########################
    $con=mysqli_connect($ip,$user,$pw,$db);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

######################## -  content  - #########################
  if(isset($dashboard)) {
        include 'inc/dashboard.php';
    } elseif(isset($table)) {
        include 'inc/table.php';
    } elseif(isset($player) OR isset($search) ) {
        include 'inc/player.php';
    } else {
        include 'inc/dashboard.php';
    }
######################## -  footer  - #########################
require 'inc/_footer.php';   
?>

