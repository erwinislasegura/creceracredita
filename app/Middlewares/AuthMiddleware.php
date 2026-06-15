<?php
namespace App\Middlewares; class AuthMiddleware { public function handle(): void { if(!\auth()) \redirect('/login'); }}
