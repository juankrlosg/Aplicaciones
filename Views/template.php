<?php
namespace Views;
use http\Url;
class Template
{
    public static function header(){
      require_once("Template/header.php");
    }
    public static function sidenav(){
      require_once("Template/sidenav.php");
    }
    public static function footer(){
        require_once("Template/footer.php");
    }
}
