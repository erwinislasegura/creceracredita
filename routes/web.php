<?php
use App\Core\Router; use App\Controllers\{AuthController,DashboardController,LeadController,UserController,ApiAssessmentController,ReportController,SettingsController,AcademiaCrecerController}; use App\Middlewares\{AuthMiddleware,GuestMiddleware,AdminMiddleware};
$r=new Router;
$r->get('/login',[AuthController::class,'login'],[GuestMiddleware::class]); $r->post('/login',[AuthController::class,'authenticate']); $r->post('/logout',[AuthController::class,'logout']);
$r->get('/',[DashboardController::class,'index'],[AuthMiddleware::class]); $r->get('/dashboard',[DashboardController::class,'index'],[AuthMiddleware::class]);
$r->get('/leads',[LeadController::class,'index'],[AuthMiddleware::class]); $r->get('/leads/{id}',[LeadController::class,'show'],[AuthMiddleware::class]); $r->get('/leads/{id}/edit',[LeadController::class,'edit'],[AuthMiddleware::class]); $r->post('/leads/{id}',[LeadController::class,'update'],[AuthMiddleware::class]);
$r->get('/users',[UserController::class,'index'],[AdminMiddleware::class]); $r->get('/users/create',[UserController::class,'create'],[AdminMiddleware::class]); $r->post('/users',[UserController::class,'store'],[AdminMiddleware::class]); $r->get('/users/{id}/edit',[UserController::class,'edit'],[AdminMiddleware::class]); $r->post('/users/{id}',[UserController::class,'update'],[AdminMiddleware::class]);
$r->get('/reports',[ReportController::class,'index'],[AuthMiddleware::class]); $r->get('/academia-crecer',[AcademiaCrecerController::class,'index'],[AuthMiddleware::class]); $r->get('/settings',[SettingsController::class,'index'],[AuthMiddleware::class]);
$r->post('/api/assessment/store',[ApiAssessmentController::class,'store']);
return $r;
