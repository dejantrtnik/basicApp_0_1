<?php
define('BASEPATH', true);
// Modules, BootStyle, Sites
include "apps/basicApp/root.php";
root\Modules::basic();
root\BootStyle::basic();
root\Sites::sites();

// env file
$env = new Env('.env');
var_dump($env->dotEnv('BOT'));


// appTelegram($app, $array); (telegram, etc...)
include "apps/basicApp/app.php";
$data = array(
  'header' => 'Header',
  'name'   => 'Dejan',
  'msg'    => 'Test'
  );
appTelegram($app, $data);

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
