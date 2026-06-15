<?php
return [
 'host'=>getenv('DB_HOST') ?: 'localhost','database'=>getenv('DB_DATABASE') ?: 'crecer_acredita_crm',
 'username'=>getenv('DB_USERNAME') ?: 'root','password'=>getenv('DB_PASSWORD') ?: '',
 'charset'=>'utf8mb4'
];
