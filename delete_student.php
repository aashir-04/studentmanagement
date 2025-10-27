<?php
include('db_connect.php');

$id = $_GET['id'];

$query = "DELETE FROM students WHERE id=$id";
if (mysqli_query($conn, $query)) {
    echo "<script>alert('Student Deleted Successfully'); window.location='view_student.php';</script>";
} else {
    echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
}
?>
