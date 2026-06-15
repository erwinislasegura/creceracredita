<?php
namespace App\Controllers; use App\Models\Lead;
class DashboardController { public function index(){ $m=new Lead; \render('dashboard/index',['stats'=>$m->stats(),'latest'=>$m->latest()]); }}
