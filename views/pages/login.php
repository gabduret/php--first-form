<?php


include 'includes/config.php';
include 'includes/password.php';

// echo '<pre>';
// print_r($books);
// echo '</pre>';


?>
<!DOCTYPE html>
  <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Mangathèque</title>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="src/styles/style.css">
    </head>
    <body>


        <form action="#" method="post">

            <input type="email" value="" name="email" id="email">
            <label for="email">Email</label>
            <br>

            <input type="password" value="" name="password" id="password">
            <label for="password">Password</label>
            <br>

            <br>
            <input type="hidden" name="login">
            <input type="submit" value="submit">

        </form>

    </body>
</html>