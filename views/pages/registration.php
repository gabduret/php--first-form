
<section class="nav-full">
    <div class="nav-header">
        <h1><a href="library">Mangathèque</a></h1>
        <h2>Registration</h2>
        <h3>Welcome</h3>
    </div>
    <nav class="nav-item">
        <h3>Navigation</h3>
        <ul>
            <li><a href="login">Login</a></li>
        </ul>
    </nav>
    
    <div class="messages success">
        <?php foreach($error_logs as $_message): ?>
            <h4>Error</h4>
            <p><?= "$_message" ?></p>
        <?php endforeach ?>
    </div>
</section>



<section class="form">
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
</section>