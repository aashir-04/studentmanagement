<?php include('db_connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="admission-form">
        <h2>Add Student</h2>
        <form method="POST" action="">
            <label>Name:</label>
            <input type="text" name="name" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Phone:</label>
            <input type="text" name="phone" required>

            <label>Course:</label>
            <input type="text" name="course" required>

            <label>Address:</label>
            <textarea name="address"></textarea>

            <button type="submit" name="submit">Add Student</button>
        </form>
    </section>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    $address = $_POST['address'];

    $query = "INSERT INTO students (name, email, phone, course, address)
              VALUES ('$name', '$email', '$phone', '$course', '$address')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Student Added Successfully');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>
</body>
</html>
