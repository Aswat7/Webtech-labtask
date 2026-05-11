<!DOCTYPE html>

<html>

<head>

    <title>Library Management System</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <h2>Library Management System</h2>

    <form id="bookForm">

        <input type="hidden" id="book_id">

        <label>Book Title</label>
        <input type="text" id="title">

        <label>Author Name</label>
        <input type="text" id="author">

        <label>Category</label>
        <input type="text" id="category">

        <label>Status</label>

        <select id="status">

            <option value="Available">
                Available
            </option>

            <option value="Not Available">
                Not Available
            </option>

        </select>

        <button type="submit" id="saveBtn">
            Add Book
        </button>

    </form>

    <br><br>

    <table border="1" width="100%" cellpadding="10">

        <thead>

            <tr>

                <th>ID</th>

                <th>Title</th>

                <th>Author</th>

                <th>Category</th>

                <th>Status</th>

                <th>Action</th>

            </tr>

        </thead>

        <tbody id="bookData">

        </tbody>

    </table>

    <script src="script.js"></script>

</body>

</html>