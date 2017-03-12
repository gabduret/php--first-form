<?php
include 'views/includes/handle_form.php';

?>
<section class="nav-full">
	<div class="nav-header">
		<h1><a href="library">Mangathèque</a></h1>
		<h2>Hi, <?= $_SESSION['login'] ?></h2>
		<h3>Welcome !</h3>
	</div>
	<nav class="nav-item">
		<h3>Navigation</h3>
		<ul>
			<li><a href="add">Add books</a></li>
			<li><a href="offline">Disconnection</a></li>
		</ul>
	</nav>
	
	<nav class="nav-books-list">
		<h3>Book inventary</h3>
		<ul>
			<?php foreach($books as $_books): ?>
				<li class="nav-books-item"><?= $_books->name?></li>
			<?php endforeach; ?>
		<ul>
	</nav>

	<div class="messages success">
        <?php foreach($success_messages as $_message): ?>
        	<h4>success</h4>
        	<p><?= "$_message" ?></p>
        <?php endforeach ?>
    </div>

    <div class="messages errors">
        <?php foreach($error_messages as $_key => $_message): ?>
       		<h4>Error</h4>
        	<p><?= "$_key : $_message" ?></p>
        <?php endforeach ?>
    </div>
</section>

<section class="books">
    <?php foreach($books as $_books): ?>
	    <div class="book-block" data-id="<?= $_books->id ?>">
	      	<div class="book-left">
	        	<div class="book-nb-name">
		        	<p class="book-number"><?= $_books->number ?></p>
		          	<p class="book-name"><?= $_books->name ?></p>
		        </div>
		        <p class="book-title"><?= $_books->title ?></p>
		        <p class="book-description"><?= $_books->description ?></p>
		        <p class="book-quantity"><?= $_books->quantity ?> disponible</p>
		        <p class="book-dateAdd"><?= $_books->date_add ?></p>

				<div class="book-interaction">
					<a href="?delete_id=<?= $_books->id;?>" class="delete-button">Delete</a>
							
					<form action="edit" method="post">
						<input type="hidden" name="edit-id" value="<?= $_books->id; ?>">
						<input type="submit" value="edit" name="submit" class="edit-button">
					</form>
				</div>
	      	</div>

	      	<div class="book-right">
		        <div class="book-image">
		        	<img src="<?= $_books->image ?>" alt="image">
		        </div>
		        <div class="book-edition">
			        <p class="book-author"><?= $_books->author ?></p>
			        <p class="book-editor"><?= $_books->editor ?></p>
		        </div>
	      	</div>
	    </div>
    <?php endforeach; ?>
</section>