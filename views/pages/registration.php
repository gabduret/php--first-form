<?php

// if(!empty($_SESSION['login']))
// {


// }


// if(!empty($_POST))
// {
//     session_start();
//     $_SESSION['login']      = $_POST['login'];
//     $_SESSION['password']   = $_POST['password'];
//     $_SESSION['role']       = 'guest';

//     print_r($_SESSION['login']);
//     print_r($_SESSION['password']);
//     print_r($_SESSION['role']);

//     header('Location: pages/library.php');
//     exit;
// }




// echo '<pre>';
// print_r($books);
// echo '</pre>';

?>


        <form action="#" method="post">

            <input type="text" value="" name="login" id="login">
            <label for="login">Login</label>
            <br>

            <input type="password" value="" name="password" id="password">
            <label for="password">Password</label>
            <br>

            <input type="hidden" name="registration">
            <input type="submit" value="submit">
        </form>


        <h3>Your'e already registrer ?</h3>
        <h3><a href="login.php">Click here</a></h3>
