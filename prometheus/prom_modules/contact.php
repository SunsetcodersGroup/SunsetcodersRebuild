<style>

#contact-fullpage { clear: both; width: 100%; height: 900px;  text-align: center; }
.contact-left-screen, .contact-middle-screen, .contact-right-screen { display: inline-block; width: 30%;  text-align: left; vertical-align: top; height: 350px; font-size: 10pt; color: #616161; font-weight: bold; }
.contact-page { clear: both; background: url('Images/meet.jpg'); background-color: #fff; background-repeat: no-repeat;  }
.contact-map { text-align: center; }
.contact-text-title { clear: both; font-weight: bold; font-size: 11pt; height: 60px; line-height: 60px; color: #000; }
.contact-middle-screen input[type=submit] { background-color: #000; text-align: center; height: 40px; line-height: 40px; text-align: center; color: #fff; border: 0; border-radius: 5px; width: 155px; }
.contact-middle-screen textarea { width: 255px; height: 157px;  border: 1px solid #dadada; border-radius: 5px; resize: none; }
.contact-left-screen input[type=text] { height: 40px; line-height: 40px; border: 1px solid #dadada; border-radius: 5px; width: 255px; }
.contact-baseplate { clear: both; background: url('Images/baseplate.jpg'); height: 73px; vertical-align: top;  }
.contact-title { clear: both; height: 127px; line-height: 127px; padding-left: 50px; text-align: left; color: #fff; font-size: 16pt; }
</style>
<?php

class contact extends database
{
        public static function callToPage()
        {
            ?>
	<div id="contact-fullpage">
                        <div class="body-content">
                            <div class="contact-page">
                                <div class="contact-title">Location</div>
                                    <div class="contact-map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26400.969124338964!2d142.12395169713253!3d-34.19438110630239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sau!4v1511526715504" width="90%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>	</div>
                            	<div class="contact-left-screen">
			<div class="contact-text-title">Feel free to contact us</div>	
				<form method="POST" action="contact.php">
                                   
                                    Name<br>
				<input type="text" name="name"><br>
			Email<br>
				<input type="text" name="name"><br>
		Phone Number<br>
                <input type="text" name="name"><br>
                
                </div>
                  <div class="contact-middle-screen">
                      <div class="contact-text-title"></div>
                      Write a message<br>
                        <textarea ></textarea><br><br>
                        <input type="submit" name="submit" value="Send Message">
                        </form>
	</div>
                  <div class="contact-right-screen">
    	         <div class="contact-text-title">Contact Details</div>
	         <div class="contact-information">Sunsetcoders<br>P.O. Box 597 <br> Merbien Victoria 3505</div>
	         <div class="contact-details">0412151850<br>contact@sunsetcoders.com.au</div>
	</div>				
	</div>
                            <div class="contact-baseplate"></div>
	</div>		
	</div>
		
		<?php
		
	}
	
	
    public static function callToFunction()
    {

        ?>

        <div id="contact-background">
            <div class="body-content">
                <form method="POST" action="contact.php">

                    <div class="contact-title"><h2>Contact</h2></div>
                    <div class="contact-subtitle"><h3>Please dont hesitate to contact us if you have any questions, comments or Messages.</h3></div>

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