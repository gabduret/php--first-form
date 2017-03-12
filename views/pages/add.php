<?php
include 'views/includes/handle_form.php';
?>


<section class="nav-full">
    <div class="nav-header">
        <h1><a href="library">Mangathèque</a></h1>
        <!-- <h2>Hi, <?= $users->user_name ?></h2>
        <h3>Welcome !</h3> -->
    </div>
    <nav class="nav-item">
        <ul>
            <li><a href="add">Add books</a></li>
            <li><a href="offline">Offline</a></li>
        </ul>
    </nav>

    <div class="messages success">
        <?php foreach($success_messages as $_message): ?>
        <p><?= $_message ?></p>
        <?php endforeach ?>
    </div>

    <div class="messages errors">
        <?php foreach($error_messages as $_key => $_message): ?>
        <p><?= "$_key : $_message" ?></p>
        <?php endforeach ?>
    </div>
</section>

<section class="form">
    <form action="#" method="post">
        <input type="number" name="book-numb" value="<?= $_POST['book-numb'] ?>" placeholder="21" id="book-numb">
        <label for="book-numb">Number</label>
        <br>

        <input type="text" name="book-name" value="<?= $_POST['book-name'] ?>" placeholder="Bleach" id="book-name">
        <label for="book-name">Name</label>
        <br>


        <input type="text" name="book-title" value="<?= $_POST['book-title'] ?>" placeholder="Sorry i'm strong" id="book-title">
        <label for="book-title">Title</label>
        <br>


        <input type="text" name="book-author" value="<?= $_POST['book-author'] ?>" placeholder="Tite Kubo" id="author">
        <label for="author">Author</label>
        <br>

        <input type="text" name="book-editor" value="<?= $_POST['book-editor'] ?>" placeholder="Glénat" id="book-editor">
        <label for="book-editor">Edition</label>
        <br>

        <textarea cols="40" rows="10" name="book-description" value="<?= $_POST['book-description'] ?>" placeholder="N'y a-t-il de tranchant que la vie ?" id="book-description"></textarea>
        <label for="book-description">Description</label>
        <br>
                 
        <br>
        <input type="url" value="<? $_POST['book-image'] ?>" name="book-image" placeholder="https://my-image.png" id="book-image">
        <label for="book-image">Image</label>


        <br>
        <input type="number" name="book-quantity" value="<?= $_POST['book-quantity'] ?>" placeholder="21" id="book-quantity">
        <label for="book-quantity">Quantity</label>


        <br>
        <input type="submit" value="submit">
    </form>
</section>