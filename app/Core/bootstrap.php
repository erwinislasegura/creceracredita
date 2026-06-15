<?php
spl_autoload_register(function($class){
 $prefix='App\\'; if(strncmp($class,$prefix,4)!==0) return;
 $path=__DIR__.'/../'.str_replace('\\','/',substr($class,4)).'.php'; if(file_exists($path)) require $path;
});
$config=require __DIR__.'/../../config/app.php'; date_default_timezone_set($config['timezone']);
ini_set('session.cookie_httponly','1'); ini_set('session.use_strict_mode','1');
if(!empty($_SERVER['HTTPS'])) ini_set('session.cookie_secure','1');
session_name($config['session_name']); if(session_status()===PHP_SESSION_NONE) session_start();
require_once __DIR__.'/../Helpers/functions.php';
