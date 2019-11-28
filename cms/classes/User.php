<?php 
class User{
	public $id;
	public $username;
	public $password;
	public static function authenticate($conn,$username,$password){
		$sql="SELECT * FROM `user` where `username`=:username";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(":username",$username,PDO::PARAM_STR);
		$stmt->setFetchMode(PDO::FETCH_CLASS,"User");
		$stmt->execute();
		$user = $stmt->fetch();
		if($user){
			if($user->password == $password){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}

	}
}