<?php
	
  require_once('Database.php');
	require_once('user.php');
  
  
  
  class UserDB {

	public static function getUsers() {
		$db = Database::getDB();
		$query = 'Select * from accounts';
		$statement = $db->prepare($query);
		$statement -> execute();
		$users = $statement->fetchAll();
		$results = array();
		
    foreach ($users as $user ) {
		  	$usu = new User();
    		$usu->setId($user['id']);
    		$usu->setEmail($user['email']); 
    		$usu->setFname($user['fname']);
    		$usu->setLname($user['lname']);
    		$usu->setPhone($user['phone']);
    		$usu->setBirthday($user['birthday']);
    		$usu->setGender($user['gender']);
    		$usu->setPassword($user['password']);
    		array_push($results, $usu);
    	}
    	return $results;
	} 
	
  
  public static function insertUser(){
		$db = Database::getDB();
		$query = 'insert into accounts(id, email, fname, lname, phone, birthday, gender, password)';
		$statement = $db->prepare($query);
		$statement -> execute();
		$statement -> closeCursor(); 
	}
 
 
	public static function updatePassword(){
		$db = Database::getDB();
		$pass = 'newPassword';
		$id = 'Id';
		$query = 'update accounts set password = :pass where id = :id';
		$statement = $db->prepare($query);
		$statement -> execute();
		$statement -> closeCursor();
	}
 
 
	public static function deleteUser(){
		$db = Database::getDB();
		$id = 'Id';
		$query = 'delete from accounts where id = :id';
		$statement = $db->prepare($query);
		$statement -> execute();
		$statement -> closeCursor();
	}
}
?>