<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "student_management";

$conn = mysqli_connect($host, $user, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // convert to integer for safety
} else {
    die("<h2 style='color:red; text-align:center;'>Invalid Request: No student ID provided.</h2>");
}


$query = "SELECT * FROM students WHERE id = $id";
$result = mysqli_query($conn, $query);

if (!$result || mysqli_num_rows($result) == 0) {
    die("<h2 style='color:red; text-align:center;'>No student found with this ID.</h2>");
}

$row = mysqli_fetch_assoc($result);


if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    $address = $_POST['address'];

    $updateQuery = "UPDATE students 
                    SET name='$name', email='$email', phone='$phone', course='$course', address='$address' 
                    WHERE id=$id";

    if (mysqli_query($conn, $updateQuery)) {
        echo "<script>alert('Student updated successfully!'); window.location='view_student.php';</script>";
    } else {
        echo "<script>alert('Error updating record.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #f5f7fa;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 400px;
            margin: 60px auto;
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #004aad;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 12px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #004aad;
            color: white;
            border: none;
            padding: 10px 15px;
            margin-top: 20px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0078ff;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Update Student</h1>
    <form method="POST">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required>

        <label>Email:</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required>

        <label>Phone:</label>
        <input type="text" name="phone" value="<?php echo htmlspecialchars($row['phone']); ?>" required>

        <label>Course:</label>
        <input type="text" name="course" value="<?php echo htmlspecialchars($row['course']); ?>" required>

        <label>Address:</label>
        <textarea name="address" required><?php echo htmlspecialchars($row['address']); ?></textarea>

        <button type="submit" name="update">Update Student</button>
    </form>
</div>

</body>
</html>
