<?php
header("Content-Type: application/json");

// Student data array
$student = array(
    "name" => "ASwat Shahriar",
    "id" => "23-55250-3",
    "department" => "CSE",
    "cgpa" => 3.85
);

// Convert to JSON and send response
echo json_encode($student);
?>