<?php
$conn = new mysqli("localhost", "root", "", "employee_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['save'])) {
    $emp_id = $_POST['emp_id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $address = $_POST['address'];

    $sql = "INSERT INTO employees (emp_id, name, gender, email, department, address)
            VALUES ('$emp_id', '$name', '$gender', '$email', '$department', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Employee saved successfully! <br><a href='index.html'>Go Back</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
