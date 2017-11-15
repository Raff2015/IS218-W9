<?php


class User {


	private $id, $email, $fname, $lname, $phone, $birthday, $gender, $password;



	public function setId ($id) {
		$this->id = $id;
	}
	public function setEmail ($email) {
		$this->email = $email;
	}
	public function setFname ($fname) {
		$this->fname = $fname;
	}
	public function setLname ($lname) {
		$this->lname = $lname;
	}
	public function setPhone ($phone) {
		$this->phone = $phone;
	}
	public function setBirthday ($birthday) {
		$this->birthday = $birthday;
	}
	public function setGender ($gender) {
		$this->gender = $gender;
	}
	public function setPassword ($password) {
		$this->password = $password;
	}
	public function getId(){
		return $this->id;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getFname () {
		return $this->fname;
	}
	public function getLname () {
		return $this->lname;
	}
	public function getPhone () {
		return $this->phone;
	}
	public function getBirthday () {
		return $this->birthday;
	}
	public function getGender () {
		return $this->gender;
	}
	public function getPassword () {
		return $this->password;
	} 

	public function display () {
		return 
		"<tr> <td>" . $this->id . 
		"</td> <td>" .$this->email . 
		"</td>	<td>" .$this->fname . 
		"</td> <td>" . $this->lname . 
		"</td> <td>" . $this->phone . 
		"</td> <td>" . $this->birthday . 
		"</td> <td>" . $this->gender . 
		"</td> <td>" .$this->password .
		"</td> </tr>";
	}
	public static function displayHeader () {
		return "<tr> 
		<th> ID </th> 
		<th> Email </th> 
		<th> First Name   </th> 
		<th> Last Name   </th> 
		<th> Phone # </th> 
		<th> Birthday </th> 
		<th> Gender </th> 
		<th> Password </th> 
		</tr>";
	}
}
?>
