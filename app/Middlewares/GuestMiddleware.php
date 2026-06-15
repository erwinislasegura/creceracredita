<?php
namespace App\Middlewares; class GuestMiddleware { public function handle(): void { if(\auth()) \redirect('/dashboard'); }}
