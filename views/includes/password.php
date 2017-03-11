<?php




// REGISTRATION PART
if(!empty($_POST))
{
	if (isset($_POST['registration']))
	{

		// Retrieve inputs
		define('SALT', 'toto');
		$login    = $_POST['login'];
		$password = hash('sha256', SALT.$_POST['password']);
		// Hash + Salt

		


		// SQL query
		$prepare = $pdo->prepare('INSERT INTO users (login, password) VALUES (:login, :password)');
		$prepare->bindValue('login', $login);
		$prepare->bindValue('password', $password);

		$prepare->execute();
		echo 'You shall pass !';
		
	}


		else if(isset($_POST['login']))
		{

		// LOGIN PART

		// Retrieve inputs
		define('SALT', 'toto');
		$login    = $_POST['login'];
		$password = hash('sha256',SALT.$_POST['password']); // Hash + Salt

		// SQL query
		$prepare = $pdo->prepare('SELECT * FROM users WHERE login = :login LIMIT 1');
		$prepare->bindValue('login',$login);
		$prepare->execute();
		$user = $prepare->fetch();

		// Test password
		if($user->password == $password)
		    echo 'You shall pass !';
		else
		    echo 'You shall not pass !';
		
		header('Location: pages/library.php');
		exit;

		}

		// echo 'There is a problem with your login or your password';
}