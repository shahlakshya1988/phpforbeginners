<?php 
class User{
	public static function authenticate($username,$password){
		return ($_POST['username'] == 'dave' && $_POST['password'] == '123');
	}
}