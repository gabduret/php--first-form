<?php

include 'config.php';
include 'views/includes/password.php';

$query = $pdo->query('SELECT * FROM books');
$books = $query->fetchAll();

$query = $pdo->query('SELECT * FROM users');
$users = $query->fetchAll();

// Pages
$q = isset($_GET['q']) ? $_GET['q'] : '';


// SESSION

// setcookie('Marjorie' ,'tête bizarre', time() + 1000, '/');
// La date d'expiration est antérieur, le cookie sera supprimé

// setcookie('mon_cookie', 'zae', time() + 1000, '/');

// echo '<pre>';
// print_r($_COOKIE);
// echo '</pre>';

// die($_COOKIE['Marjorie']);


// session_create_id();
// $_SESSION['login'] = 'matthew';
// session_destroy();



// session_start();
// $_SESSION['login']    = $_POST['login'];
// $_SESSION['password'] = $_POST['password'];
// $_SESSION['role']     = 'guest';

// print_r($_SESSION['login']);
// print_r($_SESSION['password']);
// print_r($_SESSION['role']);

// header('Location: pages/library.php');
// exit;

// print_r($_SESSION['login']);
// print_r($_SESSION['password']);
// print_r($_SESSION['role']);

// include '../includes/config.php';
// include '../includes/handle_form.php';

// $query = $pdo->query('SELECT * FROM books');
// $books = $query->fetchAll();

// $query = $pdo->query('SELECT * FROM users');
// $users = $query->fetchAll();



// echo '<pre>';
// print_r($users);
// echo '</pre>';
// exit();





 



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
