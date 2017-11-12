<?php

class contact extends authentication
{
    public static function callToFunction()
    {

        ?>
        <style>
        #contact-background { clear: both; width: 60%; margin: 0 auto; }
        .contact-title { clear: both; width: 100%; font-size: 16pt; }
        .contact-subtitle { clear: both; width: 100%; font-size: 12pt; }
        .contact-content-window { clear: both; height: 50px; width: 100%;  margin: 10px; }
        .contact-message-window { clear: both; height: 100px;  margin: 10px; }
        .contact-info { float: left; height: 50px; width: 200px; }
        .contact-input input { padding: 5px; color: #dadada; text-transform: uppercase; font-family: Copperplate, "Copperplate Gothic Light", fantasy; height: 35px; width: 500px; font-size: 10pt; }
        .contact-input textarea { padding: 5px; color: #dadada; width: 500px; height: 100px; font-family: Copperplate, "Copperplate Gothic Light", fantasy; font-size: 10pt; resize: none; }



</style>
        <div id="contact-background" ss="contact">
            <div class="body-content">
                <form method="POST" action="contact.php">

                    <div class="contact-title"><h2>Contact</h2></div>
                    <div class="contact-subtitle"><h3>Please dont hesitate to contact me if you have any questions, comments or Messages.</h3></div>

                    <div class="contact-content-window"><div class="contact-info"><b>name</b><br><font color=red>Required</font></div><div class="contact-input"><input type="text" name="email" placeholder="enter Name"></div></div>
                    <div class="contact-content-window"><div class="contact-info"><b>email</b><br><font color=red>Required</font></div><div class="contact-input"><input type="text" name="email" placeholder="enter Email"></div></div>
                    <div class="contact-content-window"><div class="contact-info"><b>subject</b><br><font color=red>Required</font></div><div class="contact-input"><input type="text" name="email" placeholder="enter Subject"></div></div>
					<div class="contact-message-window"><div class="contact-info"><b>Message</b><br><font color=red>Required</font></div><div class="contact-input"><textarea placeholder="enter message"></textarea></div></div>

                </form>
            </div>
        </div>
        <?php

    }

    public static function callToDatabase()
    {
        if (!mysqli_query(self::getDB(), "DESCRIBE portfolio")) {

            $createTable = self::getDB()->prepare ( "CREATE TABLE portfolio (portfolioID INT(11) AUTO_INCREMENT PRIMARY KEY, portfolioImage VARCHAR(100) NOT NULL, portfolioALT VARCHAR(100) NOT NULL)" );
            $createTable->execute ();
            $createTable->close ();

        }
    }
}