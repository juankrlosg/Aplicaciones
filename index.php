<?php header("Content-Type: text/html;charset=utf-8");?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php
    define('DS',DIRECTORY_SEPARATOR);
    define('ROOT',realpath(dirname(__FILE__)).DS);
    define('URL',"http://localhost/Aplicaciones/");
    require_once ("AppData/Config/Autoload.php");
    \AppData\Config\Autoload::run();
    if(!isset($_SERVER["HTTP_X_REQUESTED_WITH"])&&(isset($_GET['url'])?!((stristr($_GET['url'],'print'))&&(stristr($_GET['url'],'pdf'))):true))
    Views\Template::header();
    ?>
    <body class="text-center" style="margin-top: 55px;">
<?php
    if(!isset($_SERVER["HTTP_X_REQUESTED_WITH"])&&(isset($_GET['url'])?!((stristr($_GET['url'],'print'))&&(stristr($_GET['url'],'pdf'))):true))
    Views\Template::sidenav();
    AppData\Config\Enrutador::run(new AppData\Config\Request());
    if(!isset($_SERVER["HTTP_X_REQUESTED_WITH"])&&(isset($_GET['url'])?!((stristr($_GET['url'],'print'))&&(stristr($_GET['url'],'pdf'))):true))
    Views\Template::footer();
?>
