<?php
/**
 * About page
 *
 * @author  Andrew Jeffries
 *
 * @version         1.0.0           Prototype with grammar fixes
 */
?>
<style>
    #about-page {
        clear: both;
        width: 100%;
        height: 1000px;
    }

    .about-screen {
        clear: both;
        background: url('Images/meet.jpg');
        background-color: #fff;
        background-repeat: no-repeat;
        text-align: center;
        height: 700px;
    }

    .about-baseplate {
        clear: both;
        background: url('Images/baseplate.jpg');
        height: 73px;
        vertical-align: top;
    }

    .about-title {
        clear: both;
        height: 127px;
        line-height: 127px;
        padding-left: 50px;
        text-align: left;
        color: #fff;
        font-size: 16pt;
    }

    .about-sub-title {
        clear: both;
        font-size: 18pt;
        text-align: center;
        margin: 0 auto;
        width: 90%;
        border-bottom: 1px solid #dadada;
        height: 100px;
    }

    .about-screen {
        clear: both;
        width: 100%;
        text-align: center;
        height: 500px;
    }

    .about-content-screen {
        text-align: center;
        margin: 0 auto;
        width: 90%;
        height: 170px;
        padding-top: 30px;
        border-bottom: 1px solid #dadada;
    }

    #about-triwindow {
        background-color: #fff;
        width: 100%;
        text-align: center;
    }

    .about-window1, .about-window2, .about-window3 {
        display: inline-block;
        width: 28%;
        border: 1px solid blue;
        margin: 10px;
        height: 350px;
    }

    .about-number-title {
        clear: both;
        font-size: 12pt;
        font-weight: bold;
        text-align: left;
    }

    .about-number-title img {
        vertical-align: middle;
    }
</style>
<?php

class about extends database
{
    public static function callToDatabase()
    {

    }

    public static function callToPrometheus()
    {

    }

    public static function callToFunction()
    {

    }

    public static function callToPage()
    {
        ?>
        <div id="about-page">
            <div class="body-content">
                <div class="about-screen">
                    <div class="about-title">Sunsetcoders</div>
                    <div class="about-sub-title">Our team of experienced web development specialists is an amalgamation
                        of over 30 years experience within the information technology sector.
                    </div>
                    <div class="about-content-screen">
                        We have experience in marketing, visual appearance, and media industries. We pride ourselves on
                        being able to deliver precisely what you want, ensuring that you always have a competitive edge
                        over your competitors. We are more than just designers and developers. We are committed to
                        implementing ideas that not only look good but those that will allow your business to thrive and
                        grow. The right online business ideas assist in more meaningful engagement with your clients,
                        improving your bottom line.
                    </div>
                </div>
                <div id="about-triwindow">
                    <div class="about-window1">
                        <div class="about-number-title"><img src="Images/1.jpg"> Short History</div>
                    </div>
                    <div class="about-window2">
                        <div class="about-number-title"><img src="Images/2.jpg"> Our Main Goal</div>

                    </div>
                    <div class="about-window3">
                        <div class="about-number-title"><img src="Images/3.jpg"> What Defines us ?</div>

                    </div>
                </div>
                <div class="about-baseplate"></div>
            </div>
        </div>

        <?php
    }
}