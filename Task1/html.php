<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">

    <label for="name">Name</label>

    <input type="text" name="myname" id="name">

    <button type="submit" name="mysubmit">Save</button>

</form>

<?php

if (isset($_POST['delete'])) {
    $id = $_POST['id']; // Get the ID to delete
    $delete_sql = "DELETE FROM Profile WHERE id = $id"; // SQL delete query

    if ($conn->query($delete_sql) === true) {
        echo "Record deleted successfully"; // Success message
    } else {
        echo "Error deleting record: " . $conn->error; // Show error
    }
}

// Handle update request
if (isset($_POST['update'])) {
    $id = $_POST['id']; // Get the ID to update
    $new_name = $conn->real_escape_string($_POST['new_name']); // Get new name safely
    $update_sql = "UPDATE Profile SET name = '$new_name' WHERE id = $id"; // SQL update query

    if ($conn->query($update_sql) === true) {
        echo "Record updated successfully"; // Success message
    } else {
        echo "Error updating record: " . $conn->error; // Show error
    }
}
  // Fetch all records from table
$sql = "SELECT id, name FROM Profile";
$result = $conn->query($sql);

// Display records
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <p>My name is <?= htmlspecialchars($row['name']) ?></p>

        <!-- Delete button form -->
        <form action="" method="POST" style="display:inline-block;">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <button type="submit" name="delete">Delete</button>
        </form>

        <!-- Update button form -->
        <form action="" method="POST" style="display:inline-block;">
            <input type="text" name="new_name" placeholder="Enter new name">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <button type="submit" name="update">Update</button>
        </form>
        <br><br>
        <?php
    }
} else {
    echo "No records found."; // Show if table is empty
}
?>

</body>
</html>