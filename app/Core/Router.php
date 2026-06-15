<?php
namespace App\Core;
class Router { private array $routes=[]; public function get($p,$a,$m=[]){$this->add('GET',$p,$a,$m);} public function post($p,$a,$m=[]){$this->add('POST',$p,$a,$m);} private function add($meth,$p,$a,$m){$this->routes[]=[ $meth, rtrim($p,'/')?:'/', $a, $m];}
 public function dispatch($method,$uri){$uri=rtrim($uri,'/')?:'/'; foreach($this->routes as [$meth,$path,$action,$mw]){ $pattern='#^'.preg_replace('#\{([a-z_]+)\}#','(?P<$1>[^/]+)',$path).'$#'; if($meth===$method && preg_match($pattern,$uri,$matches)){ foreach($mw as $guard){ (new $guard)->handle(); } [$class,$fn]=$action; $params=array_filter($matches,'is_string',ARRAY_FILTER_USE_KEY); (new $class)->$fn(...array_values($params)); return; }} http_response_code(404); echo '404'; }
}
