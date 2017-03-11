<?php

include 'config.php';
include 'views/includes/password.php';

$query = $pdo->query('SELECT * FROM books');
$books = $query->fetchAll();

$query = $pdo->query('SELECT * FROM users');
$users = $query->fetchAll();


// Pages
$q = isset($_GET['q']) ? $_GET['q'] : '';

if($q == '')
{
    $page = 'library';
}
else if($q == 'add')
{
    $page = 'add';
}
else if($q == 'edit')
{
    $page = 'edit';
}
else if($q == 'library')
{
    $page = 'library';
}
else if($q == 'registration')
{
    $page = 'registration';
}
else if($q == 'login')
{
    $page = 'login';
}
// else if(preg_match('/^edit\/[-_a-z0-9]+$/', $q))
// {
//     $page = 'edit';
// }
// else if(preg_match('/^article\/[-_a-z0-9]+$/', $q))
// {
//     $page = 'article';
// }
else
{
    $page = '404';
}


include 'views/partials/header.php';
include 'views/pages/'.$page.'.php';
include 'views/partials/footer.php';

// echo '<pre>';
// print_r($subscriptions);
// echo '</pre>';
