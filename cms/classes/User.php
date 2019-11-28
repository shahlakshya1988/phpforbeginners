<?php 
class User{
	public $id;
	public $username;
	public $password;
	public static function authenticate($username,$password){
		return ($_POST['username'] == 'dave' && $_POST['password'] == '123');
	}
}