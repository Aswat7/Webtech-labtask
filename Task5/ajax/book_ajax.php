<?php

require_once "../controller/BookController.php";

if(isset($_POST['action']))
{
    $action = $_POST['action'];

    // ADD BOOK
    if($action == "add")
    {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $category = $_POST['category'];
        $status = $_POST['status'];

        if(addBookController($title, $author, $category, $status))
        {
            echo "Book Added Successfully";
        }
        else
        {
            echo "Failed";
        }
    }

    // FETCH BOOKS
    if($action == "fetch")
    {
        $result = showBooksController();

        while($row = mysqli_fetch_assoc($result))
        {
            echo "
            <tr>

                <td>".$row['id']."</td>

                <td>".$row['title']."</td>

                <td>".$row['author']."</td>

                <td>".$row['category']."</td>

                <td>".$row['status']."</td>

                <td>

                    <button onclick='editBook(
                        ".$row['id'].",
                        \"".$row['title']."\",
                        \"".$row['author']."\",
                        \"".$row['category']."\",
                        \"".$row['status']."\"
                    )'>
                        Edit
                    </button>

                    <button onclick='deleteBook(".$row['id'].")'>
                        Delete
                    </button>

                </td>

            </tr>
            ";
        }
    }

    // UPDATE BOOK
    if($action == "update")
    {
        $id = $_POST['id'];

        $title = $_POST['title'];

        $author = $_POST['author'];

        $category = $_POST['category'];

        $status = $_POST['status'];

        if(updateBookController($id, $title, $author, $category, $status))
        {
            echo "Book Updated";
        }
        else
        {
            echo "Update Failed";
        }
    }

    // DELETE BOOK
    if($action == "delete")
    {
        $id = $_POST['id'];

        if(deleteBookController($id))
        {
            echo "Book Deleted";
        }
        else
        {
            echo "Delete Failed";
        }
    }
}

?>