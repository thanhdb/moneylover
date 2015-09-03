<?php 
// require 'model.php';
class Admin extends Model
{
	public $table = 'admin';
	// public $primary_key = 'id';

	public function authLoginAdmin($postData) {
        $user = static::getOneBy($postData['email'], 'email');
        if ($user && ($user['password']) == md5($postData['password']))
        {
            unset($user['password']);
            $_SESSION['admin_logged'] = $user;
            return $user;
        }
        
        return false;
    }

    public function authLogoutAdmin() {
        unset($_SESSION['admin_logged']);
        session_destroy();
    }
}


 ?>