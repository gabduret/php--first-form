<?php

include 'config.php';
include 'views/includes/password.php';

$query = $pdo->query('SELECT * FROM books');
$books = $query->fetchAll();

$query = $pdo->query('SELECT * FROM users');
$users = $query->fetchAll();

// Pages
$q = isset($_GET['q']) ? $_GET['q'] : '';


// ROUTING
if($q == '')
{
	// SESSION verification and redirection
	if(isset($_SESSION['login']))
	{
    	$page = 'library';
	}
	else
	{
		header('Location: login');
	}
}
else if($q == 'add')
{
	// SESSION verification and redirection
	if(isset($_SESSION['login']))
	{
    	$page = 'add';
	}
	else
	{
		header('Location: login');
	}
}
else if($q == 'edit')
{
	// SESSION verification and redirection
	if(isset($_SESSION['login']))
	{
    	$page = 'edit';
	}
	else
	{
		header('Location: login');
	}
}
else if($q == 'library')
{
	// SESSION verification and redirection
	if(isset($_SESSION['login']))
	{
    	$page = 'library';
	}
	else
	{
		header('Location: login');
	}
}
else if($q == 'registration')
{
    $page = 'registration';
}
else if($q == 'login')
{
    $page = 'login';
}
else if($q == 'offline')
{
    $page = 'offline';
}
else
{
    $page = '404';
}


include 'views/partials/header.php';
include 'views/pages/'.$page.'.php';
include 'views/partials/footer.php';