function loadData() {
    var xhr = new XMLHttpRequest();

    xhr.open("GET", "data.php", true);

    xhr.onload = function () {
        if (xhr.status === 200) {

            var data = JSON.parse(xhr.responseText);

            document.getElementById("result").innerHTML =
                "<h3>Student Details</h3>" +
                "Name: " + data.name + "<br>" +
                "ID: " + data.id + "<br>" +
                "Department: " + data.department + "<br>" +
                "CGPA: " + data.cgpa;
        }
    };

    xhr.send();
}