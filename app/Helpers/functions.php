<?php
function config(string $file): array { return require __DIR__.'/../../config/'.$file.'.php'; }
function e($v): string { return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }
function base_path(): string {
    $scriptDir = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/');
    return ($scriptDir === '/' || $scriptDir === '.') ? '' : $scriptDir;
}
function url(string $path=''): string {
    $configured = rtrim(config('app')['url'], '/');
    $prefix = $configured !== '' ? $configured : base_path();
    return rtrim($prefix, '/') . '/' . ltrim($path, '/');
}
function redirect(string $path): void { header('Location: '.url($path)); exit; }
function csrf_token(): string { if(empty($_SESSION['_csrf'])) $_SESSION['_csrf']=bin2hex(random_bytes(32)); return $_SESSION['_csrf']; }
function csrf_field(): string { return '<input type="hidden" name="_csrf" value="'.e(csrf_token()).'">'; }
function verify_csrf(): void { if(($_POST['_csrf']??'') !== ($_SESSION['_csrf']??'')) { http_response_code(419); exit('Token CSRF inválido'); } }
function auth(): ?array { return $_SESSION['user'] ?? null; }
function can(string $permission): bool { $role=auth()['role_name']??''; $map=['manage_users'=>['Super Admin'],'delete'=>['Super Admin'],'edit_leads'=>['Super Admin','Administrador','Ejecutivo'],'assign'=>['Super Admin','Administrador'],'export'=>['Super Admin','Administrador']]; return in_array($role,$map[$permission]??[],true); }
function flash(string $key, ?string $message=null): ?string { if($message!==null){$_SESSION['flash'][$key]=$message; return null;} $m=$_SESSION['flash'][$key]??null; unset($_SESSION['flash'][$key]); return $m; }
function render(string $view, array $data=[], string $layout='app'): void { extract($data); ob_start(); require __DIR__.'/../Views/'.$view.'.php'; $content=ob_get_clean(); require __DIR__.'/../Views/layouts/'.$layout.'.php'; }
function json_response(array $data, int $code=200): void { http_response_code($code); header('Content-Type: application/json; charset=utf-8'); echo json_encode($data, JSON_UNESCAPED_UNICODE); exit; }
