<?php 

define("_VALID_PHP", true);


$url = str_replace('/', '-', $_SERVER['REQUEST_URI']);
$end = explode('/', $_SERVER['PHP_SELF']);
$arq = end($end);

$url_current="https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$uri = $url_current;

$config['email'] = "sandoelio@hotmail.com";
$config['telefone'] = "";
$config['endereco'] = "";
$config['whatsapp'] = "https://api.whatsapp.com/send?phone=5571988235830";

$config['facebook'] = "https://www.facebook.com/";
$config['instagram'] = "https://www.instagram.com/";
$config['twitter'] = "https://twitter.com/";
$config['youtube'] = "https://www.youtube.com/";
$config['linkedin'] = "#";

$config['description'] = "";
$config['keywords'] = "";

?>