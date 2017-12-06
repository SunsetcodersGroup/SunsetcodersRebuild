<style>
    #services-page { clear: both; width: 100%; height: 800px;  }
    .service-title { clear: both; height: 127px; line-height: 127px; padding-left: 50px; text-align: left; color: #fff; font-size: 16pt; }
    .service-page { clear: both; background: url('Images/meet.jpg'); background-color: #fff; background-repeat: no-repeat; text-align: center; height: 700px;  }
    .service-baseplate { clear: both; background: url('Images/baseplate.jpg'); height: 73px; vertical-align: top;  }
    .services-window { display: inline-block; height: 200px;  width: 400px; margin: 10px; font-size: 10pt; }

    #myservices { height: 600px;   width: 100%; text-align: center; clear: both;  background-color: #dadada; padding-top: 50px;  padding-bottom: 50px; border-top: 1px solid #000; border-bottom: 1px solid #000;}
    .myservices-image { float: left; width: 65px;  }
    .myservices-content { float: left; text-align: left; width: 285px; height: 200px; color: #333;  font-size: 10pt; }
     .myservices-frontpage-content { float: left; text-align: left; width: 285px; height: 200px; color: #dadada;  font-size: 10pt; }
    .myservices-content h1 { font-size: 20pt; }
    .myservices-window { width: 290px; display: inline-block; height: 200px;   margin: 15px; text-align: left; color: #dadada;  }
    .myservices-content img { float: left; margin: 5px; }

</style>
<?php

class myservices extends database {

    public static function callToPage() {
        ?>

        <div id="services-page">
            <div class="body-content">
                <div class="service-page">
                    <div class="service-title">Our Services</div>
                    <?php
                    $baseCode = self::init()->prepare("SELECT myservicesImage, myservicesTitle, myservicesDescription FROM myservices ");
                    if (!$baseCode->execute()) {
                        echo "Execute failed: (" . $baseCode->errno . ") " . $baseCode->error;
                    }
                    $baseCode->bind_result($myservicesImage, $myservicesTitle, $myservicesDescription);

                    while ($checkRow = $baseCode->fetch()) {

                        echo '<div class="services-window">';
                        echo '<div class="myservices-image">';
                        echo '<img src="Images/' . $myservicesImage . '" alt="FEATURED IMAGE" width=50>';
                        echo '</div>';

                        echo '<div class="myservices-content"><h2>' . $myservicesTitle . '</h2>' . $myservicesDescription . '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
                <div class="service-baseplate"></div>
            </div>
        </div>
        <?php
    }

    public static function callToPrometheus() {
        
    }

    public static function callToSetupDatabase() {
        global $dbConnection;

        if (!mysqli_query($dbConnection, "DESCRIBE myservices")) {

            $createTable = $dbConnection->prepare("CREATE TABLE myservices (myservicesID INT(11) AUTO_INCREMENT PRIMARY KEY, myservicesImage VARCHAR(100) NOT NULL, myservicesTitle VARCHAR(100) NOT NULL, myservicesDescription TEXT NOT NULL)");
            if (!$createTable->execute()) {
                echo "Execute failed: (" . $createTable->errno . ") " . $createTable->error;
            }
            $createTable->close();
        }
    }

    public static function callToFunction() {
        $myservicesImage = $myservicesTitle = $myservicesDescription = NULL;
        ?>

<style>
    #services-frontpage { clear: both; width: 100%; height: 600px;  }
    .service-frontpage { clear: both; background: url('Images/front.jpg'); background-color: #161616; background-repeat: no-repeat; text-align: center; height: 400px; }
</style>
        <div id="services-frontpage">
            <div class="body-content">
                <div class="service-frontpage">
                    <div class="service-title">Our Services</div>
                    <?php
                    $baseCode = self::init()->prepare("SELECT myservicesImage, myservicesTitle, myservicesDescription FROM myservices LIMIT 3 ");
                    if (!$baseCode->execute()) {
                        echo "Execute failed: (" . $baseCode->errno . ") " . $baseCode->error;
                    }
                    $baseCode->bind_result($myservicesImage, $myservicesTitle, $myservicesDescription);

                    while ($checkRow = $baseCode->fetch()) {

                        echo '<div class="myservices-window">'
                        . '<h2>' . $myservicesTitle . '</h2>';

                        echo '<div class="myservices-frontpage-content">
                       <img src="Images/' . $myservicesImage . '" alt="FEATURED IMAGE" width=65> ' . $myservicesDescription . '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
            <?php
        }

    }
    