<?php

$dbConnection = databaseConnection();

class myservices
{
    public static function callToPrometheus()
    {

    }

    public static function callToSetupDatabase()
    {
        global $dbConnection;

        if (!mysqli_query($dbConnection, "DESCRIBE myservices")) {

            $createTable = $dbConnection->prepare ( "CREATE TABLE myservices (myservicesID INT(11) AUTO_INCREMENT PRIMARY KEY, myservicesImage VARCHAR(100) NOT NULL, myservicesTitle VARCHAR(100) NOT NULL, myservicesDescription TEXT NOT NULL)" );
            if (! $createTable->execute ()) {
                echo "Execute failed: (".$createTable->errno.") " . $createTable->error;
            }
            $createTable->close ();

        }
    }


    public static function callToFunction()
    {
        global $dbConnection;

        ?>
        <style>
            #myservices { height: 600px;  padding-top: 100px;}
            .myservices-image { float: left; width: 90px;  }
            .myservices-content { float: left; width: 350px; height: 200px; }
            .myservices-content h1 { font-size: 20pt; }
            .myservices-window { width: 448px; float: left; height: 200px; }

        </style>
        <div id="myservices">
            <div class="body-content">
                <div class="myservices-title"><h1>Services</h1></div>
                <?php
                $baseCode = $dbConnection->prepare ( "SELECT myservicesImage, myservicesTitle, myservicesDescription FROM myservices " );

                if (! $baseCode->execute ()) {
                    echo "Execute failed: (" . $baseCode->errno . ") " . $baseCode->error;
                }
                $baseCode->bind_result ( $myservicesImage, $myservicesTitle, $myservicesDescription);

                while ( $checkRow = $baseCode->fetch () ) {

                    echo '<div class="myservices-window">';

                    echo '<div class="myservices-image">';
                    echo '<img src="Images/'.$myservicesImage.'" alt="FEATURED IMAGE" width=85>';
                    echo '</div>';

                    echo '<div class="myservices-content">
                        <h2>'.$myservicesTitle.'</h2>
                        '.$myservicesDescription.'</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
        <?php
    }


    public static function loadToPage()
    {
        global $dbConnection;

        ?>
        <div id="myservices">
            <div class="body-content">
                <div class="myservices-title">MyServices</div>
                <?php
                $baseCode = $dbConnection->prepare ( "SELECT myservicesImage, myservicesTitle, myservicesDescription FROM myservices " );

                if (! $baseCode->execute ()) {
                    echo "Execute failed: (" . $baseCode->errno . ") " . $baseCode->error;
                }
                $baseCode->bind_result ( $myservicesImage, $myservicesTitle, $myservicesDescription);

                while ( $checkRow = $baseCode->fetch () ) {

                    echo '<div class="shrink pic">';
                    echo '<img src="Images/'.$myservicesImage.'" alt="FEATURED IMAGE">';
                    echo '</div>';

                    echo '<div>
                        <h1>'.$myservicesTitle.'</h1>
                        '.$myservicesDescription.'</div>';

                }
                ?>
            </div>
        </div>
        <?php
    }
}