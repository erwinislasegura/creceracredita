<?php
namespace App\Models;
class User extends Model { public function findByEmail($email){$s=$this->db->prepare('SELECT u.*,r.name role_name FROM users u JOIN roles r ON r.id=u.role_id WHERE u.email=? LIMIT 1');$s->execute([$email]);return $s->fetch();}
 public function all(){return $this->db->query('SELECT u.*,r.name role_name FROM users u JOIN roles r ON r.id=u.role_id ORDER BY u.created_at DESC')->fetchAll();}
 public function roles(){return $this->db->query('SELECT * FROM roles ORDER BY id')->fetchAll();}
 public function find($id){$s=$this->db->prepare('SELECT * FROM users WHERE id=?');$s->execute([$id]);return $s->fetch();}
 public function save($d,$id=null){ if($id){$sql='UPDATE users SET name=?,email=?,role_id=?,status=?'.(!empty($d['password_hash'])?',password_hash=?':'').',updated_at=NOW() WHERE id=?';$p=[$d['name'],$d['email'],$d['role_id'],$d['status']]; if(!empty($d['password_hash']))$p[]=$d['password_hash']; $p[]=$id;} else {$sql='INSERT INTO users(name,email,password_hash,role_id,status,created_at,updated_at) VALUES(?,?,?,?,?,NOW(),NOW())';$p=[$d['name'],$d['email'],$d['password_hash'],$d['role_id'],$d['status']];} $s=$this->db->prepare($sql); return $s->execute($p);}
}
