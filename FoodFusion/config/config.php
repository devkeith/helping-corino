<?php
declare(strict_types=1);
session_start();
const DB_HOST='127.0.0.1'; const DB_NAME='foodfusion'; const DB_USER='root'; const DB_PASS='';
function db():PDO{static $p=null;if(!$p)$p=new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8mb4',DB_USER,DB_PASS,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);return $p;}
function e(?string $v):string{return htmlspecialchars($v??'',ENT_QUOTES,'UTF-8');}
function csrf_token():string{if(empty($_SESSION['csrf']))$_SESSION['csrf']=bin2hex(random_bytes(32));return $_SESSION['csrf'];}
function verify_csrf():void{if(!hash_equals($_SESSION['csrf']??'',$_POST['csrf']??'')){http_response_code(419);exit('Invalid request token.');}}
function user():?array{return $_SESSION['user']??null;}
function base_path():string{$s=$_SERVER['PHP_SELF']??'';return(str_contains($s,'/pages/')||str_contains($s,'/admin/')||str_contains($s,'/api/'))?'../':'';}
function require_login():void{if(!user()){header('Location:'.base_path().'login.php');exit;}}
function require_admin():void{require_login();if((user()['role']??'')!=='admin'){http_response_code(403);exit('Forbidden');}}
function flash(string $type,string $msg):void{$_SESSION['flash']=['type'=>$type,'msg'=>$msg];}
function get_flash():?array{$x=$_SESSION['flash']??null;unset($_SESSION['flash']);return $x;}
function activity(int $id,string $type,string $desc=''):void{try{$s=db()->prepare("INSERT INTO user_activity(user_id,activity_type,description,ip_address) VALUES(?,?,?,?)");$s->execute([$id,$type,$desc,$_SERVER['REMOTE_ADDR']??'']);}catch(Throwable $e){}}
function recipe_image(?string $p):string{return $p?e($p):base_path().'assets/images/recipe-placeholder.svg';}
