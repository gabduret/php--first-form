<?php
$query = $pdo->query('SELECT * FROM books WHERE id = ' . $_POST["edit-id"]);
$books = $query->fetch();



?>
<section class="nav-full">
    <div class="nav-header">
        <h1><a href="library">Mangathèque</a></h1>
        <h2>Hi, <?= $_SESSION['login'] ?></h2>
        <h3>Edit your book</h3>
    </div>
    <nav class="nav-item">
        <h3>Navigation</h3>
        <ul>
            <li><a href="add">Add books</a></li>
            <li><a href="offline">Offline</a></li>
        </ul>
    </nav>
</section>
      
<section class="form">
    <form action="library" method="post">
            <input type="number" name="book-numb" value="<?= $books->number ?>" placeholder="21" id="book-numb">
            <label for="book-numb">Number</label>
            <br>
      
            <input type="text" name="book-name" value="<?= $books->name ?>" placeholder="Bleach" id="book-name">
            <label for="book-name">Name</label>
            <br>
            

            <input type="text" name="book-title" value="<?= $books->title ?>" placeholder="Sorry i'm strong" id="book-title">
            <label for="book-title">Title</label>
            <br>
            
            <input type="text" name="book-author" value="<?= $books->author ?>" placeholder="Tite Kubo" id="author">
            <label for="author">Author</label>
            <br>
            
            <input type="text" name="book-editor" value="<?= $books->editor ?>" placeholder="Glénat" id="book-editor">
            <label for="book-editor">Edition</label>
            <br>
            
            <textarea cols="40" rows="10" name="book-description" " id="book-description"><?= $books->description ?></textarea>
            <label for="book-description">Description</label>
            <br>

            <br>
            <input type="url" value="<?= $books->image ?>" name="book-image" placeholder="https://my-image.png" id="book-image">
            <label for="book-image">Image</label>

            <br>
            <input type="number" name="book-quantity" value="<?= $books->quantity ?>" placeholder="21" id="book-quantity">
            <label for="book-quantity">Quantity</label>


            <br>
            <input type="hidden" name="edit-id" value="<?= $_POST['edit-id'] ?>">
            <input type="hidden" name="edit">
            <input type="submit" value="submit">
        </form>
</section>