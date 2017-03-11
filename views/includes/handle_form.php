<?php

	/*
	 * BOOK GESTION
	 */

	// Messages
	$error_messages = array();
	$success_messages = array();
	

	// Form sent
	if(!empty($_POST))
	{

	    // Retrieve data
	    $book_numb     		= (int)$_POST['book-numb'];
	    $book_name 			= trim($_POST['book-name']);
	    $book_title        	= trim($_POST['book-title']);
	   	$book_author		= trim($_POST['book-author']);
	   	$book_editor		= trim($_POST['book-editor']);
	    $book_description	= trim($_POST['book-description']);
	    $book_image			= trim($_POST['book-image']);
	    $book_quantity		= trim($_POST['book-quantity']);

		/*
		 * ERROR GESTION
		 */
        
        // Number errors
        if(empty($book_numb))
            $error_messages['book_numb'] = 'should not be empty';
        else if($book_numb < 0)
            $error_messages['book_numb'] = 'wrong value';

		// Name errors
        if(empty($book_name))
            $error_messages['book-name'] = 'should not be empty';

		// Author errors
        if(empty($book_author))
            $error_messages['book-author'] = 'should not be empty';

		// Edition errors
        if(empty($book_editor))
            $error_messages['book-editor'] = 'should not be empty';

		// Description errors
        if(empty($book_description))
            $error_messages['book-description'] = 'should not be empty';

		// Image errors
        if(empty($book_image))
            $error_messages['book-image'] = 'should not be empty';





        // No errors UPDATE BDD
        //if(empty($error_messages) && isset($_POST['edit']))
        if(empty($error_messages) && isset($_POST['edit']))
        {
        	          
        	$prepare = $pdo->prepare('UPDATE books SET number = :numb, name = :name, title = :title, author = :author, editor = :editor, description = :description, image = :image, quantity = :quantity WHERE id = :id');
           
         	$prepare->bindValue('id', $_POST['edit-id']);
         	$prepare->bindValue('numb', $book_numb);
         	$prepare->bindValue('name', $book_name);
         	$prepare->bindValue('title', $book_title);
         	$prepare->bindValue('author', $book_author);
         	$prepare->bindValue('editor', $book_editor);
         	$prepare->bindValue('description', $book_description);
			$prepare->bindValue('image', $book_image);
         	$prepare->bindValue('quantity', $book_quantity);
          	$prepare->execute();
          
            // Add success message
            $success_messages[] = 'Added successful !';
			
        	// Reset values
            $_POST['book-numb']			= '';
        	$_POST['book-name'] 		= '';
        	$_POST['book-title']   		= '';
        	$_POST['book-author']  		= '';
        	$_POST['book-editor']  		= '';
        	$_POST['book-description'] 	= '';
        	$_POST['book-image'] 		= '';
        	$_POST['book-quantity'] 	= '';
        	
   			header('Location: library');
			exit;
        }


        // No errors INSERT BDD
        else if(empty($error_messages))
        {
          
        	$prepare = $pdo->prepare('INSERT INTO books (number, name, title, author, editor, description, image, quantity) VALUES ( :numb, :name, :title, :author, :editor, :description, :image, :quantity)');
           
         	$prepare->bindValue('numb', $book_numb);
         	$prepare->bindValue('name', $book_name);
         	$prepare->bindValue('title', $book_title);
         	$prepare->bindValue('author', $book_author);
         	$prepare->bindValue('editor', $book_editor);
         	$prepare->bindValue('description', $book_description);
         	$prepare->bindValue('image', $book_image);
         	$prepare->bindValue('quantity', $book_quantity);
          	$prepare->execute();
          
          
            // Add success message
            $success_messages[] = 'Added successful !';
			

			// echo '<pre>';
			// print_r($_POST);
			// echo '</pre>';

        	// Reset values
            $_POST['book-numb']			= '';
        	$_POST['book-name'] 		= '';
        	$_POST['book-title']   		= '';
        	$_POST['book-author']  		= '';
        	$_POST['book-editor']  		= '';
        	$_POST['book-image'] 		= '';
        	$_POST['book-quantity'] 	= '';
        	$_POST['book-description'] 	= '';
        	$_POST['book-image'] 	= '';
        	$_POST['book-quantity'] 	= '';

        	header('Location: library');
			exit;
        }

	}


	// No data sent
	else
	{
	    // Default values
	    $_POST['book-numb']			= '';
	    $_POST['book-name'] 		= '';
	    $_POST['book-title']   		= '';
	    $_POST['book-author']  		= '';
	    $_POST['book-editor']  		= '';
	    $_POST['book-description'] 	= '';
	    $_POST['book-image'] 		= '';
	    $_POST['book-quantity'] 	= '';

	    // echo "no data sent, ";
	}



// echo '<pre>';
// print_r($_POST);
// echo '</pre>';


	




	/*
	 * DELETE BOOK GESTION
	 */

    // Delete book
    if(!empty($_GET['delete_id']))
    {
    	$prepare = $pdo->prepare('DELETE FROM books WHERE id = :id');
    	$prepare->bindValue('id', $_GET['delete_id']);
    	$prepare->execute();
    }



