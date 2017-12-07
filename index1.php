<?php
/**
* Index script
 *
 * @author Andrew Jeffries
 *
 * @version 1.0.0   Prototype.
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <script>
            $(window).on("load", function () {
                $(window).scroll(function () {
                    var windowBottom = $(this).scrollTop() + $(this).innerHeight();
                    $("#whatiuse-background").each(function () {
                        /* Check the location of each desired element */
                        var objectBottom = $(this).offset().top + $(this).outerHeight();
                        /* If the element is completely within bounds of the window, fade it in */
                        if (objectBottom < windowBottom) { //object comes into view (scrolling down)
                            if ($(this).css("opacity") == 0) {
                                $(this).fadeTo(500, 1);
                            }
                        } else { //object goes out of view (scrolling up)
                            if ($(this).css("opacity") == 1) {
                                $(this).fadeTo(500, 0);
                            }
                        }
                    });
                }).scroll(); //invoke scroll-handler on page-load
            });
        </script>
    </head>
    <body>
        <?php
        include_once(dirname(__FILE__) . '/auth.php');
        include_once(dirname(__FILE__) . '/function_class.php');
        get_head();
        call_page();
        get_foot();
        ?>
    </body>
</html>
