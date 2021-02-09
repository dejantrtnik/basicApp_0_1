<?php
define('BASEPATH', true);
// Modules, BootStyle, Sites
include "apps/basicApp/root.php";

// app($app, $array);
include "apps/basicApp/app.php";

root\Modules::basic();
root\BootStyle::basic();
root\Sites::sites();



// bootstrap stayle and js
echo css_js_jquery\Css::BOOTSTRAP_MIN,
     css_js_jquery\jquery::JQUERY_SLIM_MIN,
     css_js_jquery\Js::BOOTSTRAP_MIN_JS;

$var = 'site2';
// PHP 8
 echo match ($var) {
   'site1'  => site(),
   'site2' => site2(),
   'site3' => site3(),
 };
?>
