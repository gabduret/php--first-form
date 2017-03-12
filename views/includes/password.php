<?php

// Messages
$error_logs = array();

// Start session
session_start();

// REGISTRATION PART
if(!empty($_POST))
{
	// Login errors
    if(empty($_POST['login']))
        $error_logs['login'] = 'should not be empty';
    // Password
    if(empty($_POST['password']))
    	$error_logs['password'] = 'should not be empty';

	// Add refused message
	if(!empty($error_logs))
        $error_logs[] = 'Registration refused !';


	if (empty($error_logs) && isset($_POST['registration']))
	{

		// Retrieve inputs
		define('SALT', 'toto');
		$login    = $_POST['login'];
		$password = hash('sha256', SALT.$_POST['password']);
		// Hash + Salt

		// Fill session
		$_SESSION['login'] 		= $login;
		$_SESSION['password'] 	= $password;
		


		// SQL query
		$prepare = $pdo->prepare('INSERT INTO users (login, password) VALUES (:login, :password)');
		$prepare->bindValue('login', $login);
		$prepare->bindValue('password', $password);
		$prepare->execute();
		
		// User can enter in website
		header('Location: login');		
	}


	// LOGIN PART
	else if(isset($_POST['logs']))
	{

		// Retrieve inputs
		define('SALT', 'toto');
		$login    = $_POST['login'];
		$password = hash('sha256',SALT.$_POST['password']); // Hash + Salt



		// SQL query
		$prepare = $pdo->prepare('SELECT * FROM users WHERE login = :login LIMIT 1');
		$prepare->bindValue('login', $login);
		$prepare->execute();
		$user = $prepare->fetch();

		// Test password
		if($user->password == $password)
		{	
			$_SESSION['login'] 		= $login;
			$_SESSION['password'] 	= $password;

			// User can enter in website
		    header('Location: library');
		}
		else
		{
			// Add success message
	        $error_login[] = 'Login refused !';
		}
	}
}