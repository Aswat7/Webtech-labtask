<?php

require_once "../model/BookModel.php";

function addBookController($title, $author, $category, $status)
{
    return insertBook($title, $author, $category, $status);
}

function showBooksController()
{
    return getBooks();
}

function updateBookController($id, $title, $author, $category, $status)
{
    return updateBook($id, $title, $author, $category, $status);
}

function deleteBookController($id)
{
    return deleteBook($id);
}

?>