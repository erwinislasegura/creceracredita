<?php
namespace App\Middlewares; class AdminMiddleware { public function handle(): void { if(!\auth() || !\can('manage_users')) { http_response_code(403); exit('No autorizado'); } }}
