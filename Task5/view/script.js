// LOAD BOOKS
function loadBooks()
{
    let xhr = new XMLHttpRequest();

    xhr.open("POST", "../ajax/book_ajax.php", true);

    xhr.setRequestHeader(
        "Content-type",
        "application/x-www-form-urlencoded"
    );

    xhr.onload = function()
    {
        document.getElementById("bookData").innerHTML =
            this.responseText;
    };

    xhr.send("action=fetch");
}

loadBooks();


// FORM SUBMIT
document.getElementById("bookForm")

.addEventListener("submit", function(e){

    e.preventDefault();

    let id =
        document.getElementById("book_id").value;

    let action = "add";

    if(id != "")
    {
        action = "update";
    }

    let title =
        document.getElementById("title").value;

    let author =
        document.getElementById("author").value;

    let category =
        document.getElementById("category").value;

    let status =
        document.getElementById("status").value;

    let xhr = new XMLHttpRequest();

    xhr.open("POST", "../ajax/book_ajax.php", true);

    xhr.setRequestHeader(
        "Content-type",
        "application/x-www-form-urlencoded"
    );

    xhr.onload = function()
    {
        alert(this.responseText);

        loadBooks();

        document.getElementById("bookForm").reset();

        document.getElementById("book_id").value = "";

        document.getElementById("saveBtn").innerHTML =
            "Add Book";
    };

    xhr.send(

        "action=" + action +

        "&id=" + id +

        "&title=" + title +

        "&author=" + author +

        "&category=" + category +

        "&status=" + status

    );

});


// EDIT BOOK
function editBook(id, title, author, category, status)
{
    document.getElementById("book_id").value = id;

    document.getElementById("title").value = title;

    document.getElementById("author").value = author;

    document.getElementById("category").value = category;

    document.getElementById("status").value = status;

    document.getElementById("saveBtn").innerHTML =
        "Update Book";
}


// DELETE BOOK
function deleteBook(id)
{
    if(confirm("Are you sure?"))
    {
        let xhr = new XMLHttpRequest();

        xhr.open("POST", "../ajax/book_ajax.php", true);

        xhr.setRequestHeader(
            "Content-type",
            "application/x-www-form-urlencoded"
        );

        xhr.onload = function()
        {
            alert(this.responseText);

            loadBooks();
        };

        xhr.send(
            "action=delete&id=" + id
        );
    }
}