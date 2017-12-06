<style>
    #whatwedo-background { width: 100%; text-align: center; clear: both; height: 700px; }
    .whatwedo-screen { background-color: #fff; border: 1px solid #fff;  height: 600px;  }
    .whatwedo-content-window { width: 100%; font-size: 10pt; text-align: left;}
.whatwedo-subtitle { text-align: center; font-size: 20pt; height: 70px; line-height: 50px; color: #666; }

    .whatwedo-row { display: inline-block; border: 1px solid #000; width: 150px; padding: 10px; height: 350px; vertical-align: top; background-color: #fff; margin: 5px; border-radius: 5px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); }
    .whatwedo-header h1 { text-align: center; font-size: 24pt; text-transform: uppercase; color: #fe750b; }
    .whatwedo-subheader h2 { text-align: center; font-size: 18pt; text-transform: uppercase; }
    .whatwedo-image { float: left; width: 49%; }
    .whatwedo-content p { text-align: left; font-size: 10pt; font-style: italic; }
    .whatwedo-content h5 { font-size: 12pt; text-align: left; text-transform: uppercase; }

    .whatwedo-title-window h2 { height: 30px; clear:both; text-transform: uppercase; font-size: 12pt; }
    .whatwedo-image-window { height: 150px; clear: both;  }
    .whatwedo-baseplate { clear: both; background: url('Images/baseplate.jpg'); height: 73px; vertical-align: top;  }


    @media only screen and (max-width: 1024px) {
        .sampleBox {
            width: 700px;
            font-size: 26pt;
        }
    }

</style>

<?php

class whatwedo {

    const ModuleDescription = '<i>Database Driven, What We Do List..</i>';
    const ModuleAuthor = 'Sunsetcoders Development Team.';
    const ModuleLayout = '2';
    const ModuleClassification = 'Services';
    const ModuleVersion = '0.2';

    public static function callToPromethues() {

        echo 'What We Do Administration';
    }

    public static function callToFunction() {
        ?>
        <div id="whatwedo-background">
            <div class="body-content">
                <div class="whatwedo-screen">
                    <div class="whatwedo-header"><h1>Our Website Development Process</h1></div>
                    <div class="whatwedo-subtitle">We take care of our clients from start to finish and beyond.</div>
                    <div class="whatwedo-row">
                        <div class="whatwedo-title-window"><h2>Client Meeting</h2></div>
                        <div class="whatwedo-image-window"><img src="Images/client-meeting.jpg" width="155"></div>
                        <div class="whatwedo-content-window">Meetings with the client to discuss your dream website. Information Gathering </div>
                    </div>

                    <div class="whatwedo-row">
                        <div class="whatwedo-title-window"><h2>Planning</h2></div>
                        <div class="whatwedo-image-window"><img src="Images/planning.jpg" width="155"></div>
                        <div class="whatwedo-content-window">Our Design team puts together an designs your dream website. </div>
                    </div>

                    <div class="whatwedo-row">
                        <div class="whatwedo-title-window"><h2>Client feedback.</h2></div>
                        <div class="whatwedo-image-window"><img src="Images/client-meeting.jpg" width="155"></div>
                        <div class="whatwedo-content-window">Once the client is satisfied with the design and layout of the website production begins.  </div>
                    </div>

                    <div class="whatwedo-row">
                        <div class="whatwedo-title-window"><h2>Development</h2></div>
                        <div class="whatwedo-image-window"><img src="Images/software-development.jpg" width="155"></div>
                        <div class="whatwedo-content-window">Our Seasoned Developers make your dream website. </div>
                    </div>

                    <div class="whatwedo-row">
                        <div class="whatwedo-title-window"><h2>Implementation.</h2></div>
                        <div class="whatwedo-image-window"><img src="Images/upload.png" width="155"></div>
                        <div class="whatwedo-content-window">Upload and testing. </div>
                    </div>

                </div>
                <div class="whatwedo-baseplate"></div>
            </div>
        </div>
        <?php
    }

}
