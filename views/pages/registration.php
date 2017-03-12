<div class="messages success">
        <?php foreach($error_logs as $_message): ?>
            <h4>Error</h4>
            <p><?= "$_message" ?></p>
        <?php endforeach ?>
    </div>




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

<br>
<h3>Your'e already registrer ?</h3>
<h3><a href="login">Click here</a></h3>
