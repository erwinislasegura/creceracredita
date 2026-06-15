<?php
namespace App\Core; use PDO;
class Database { private static ?PDO $pdo=null; public static function pdo(): PDO { if(!self::$pdo){$c=\config('database'); self::$pdo=new PDO("mysql:host={$c['host']};dbname={$c['database']};charset={$c['charset']}",$c['username'],$c['password'],[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);} return self::$pdo; }}
