<link rel="stylesheet" type="text/css" href="/css/style.css">
<?php
#include_once (dirname(__FILE__) . '/seo.php');
include_once (dirname(__FILE__) . '/auth.php');
include_once (dirname(__FILE__) . '/function_class.php');

get_head();

call_page();

include_once (dirname(__FILE__) . '/footer.php');
