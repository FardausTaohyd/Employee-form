<?php
$conn = new mysqli("localhost", "root", "", "employee_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$emp_id = $_GET['emp_id'];

$sql = "SELECT * FROM employees WHERE emp_id='$emp_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<h2>Employee Details</h2>";
    echo "ID: " . $row['emp_id'] . "<br>";
    echo "Name: " . $row['name'] . "<br>";
    echo "Gender: " . $row['gender'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "Department: " . $row['department'] . "<br>";
    echo "Address: " . $row['address'] . "<br>";
    echo "<br><a href='index.html'>Back to Form</a>";
} else {
    echo "No employee found with ID $emp_id <br><a href='index.html'>Try Again</a>";
}

$conn->close();
?>
