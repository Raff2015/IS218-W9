<?php




	require_once('Database.php');
	require_once('userDB.php');
	require_once('user.php');
	
  $users = UserDB::getUsers();
	$users2 = UserDB::updatePassword();





?>

<html>
	<head>
	<style>
  
 

  table#t01 tr:nth-child(even) {
    width: 100%; 
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
    background-color: #fff;
}
table#t01 th {
    color: white;
    background-color: black;
}


  
  	<title>Week 9 Assignmnet</title>
</style>
	</head>


	
  <body>
  <center><h1>Week 9 Assignment</h1></center>
		<center><table id="t01" >
   
			<?php echo User::displayHeader(); ?>
			<?php foreach ($users as $user) : ?>
				<?php echo $user->display(); ?>
			<?php endforeach; ?>		
		</table></center> 
	
  </body>		
</html>