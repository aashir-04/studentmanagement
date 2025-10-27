<?php
include("connection.php"); // My DB 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>View Students</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f7fb;
      margin: 0;
      padding: 0;
    }

    .container {
      margin: 50px auto;
      width: 90%;
      max-width: 1000px;
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #004d7a;
      margin-bottom: 20px;
    }

    .search-bar {
      text-align: right;
      margin-bottom: 20px;
    }

    .search-bar input[type="text"] {
      padding: 8px 10px;
      width: 250px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .search-bar input[type="submit"] {
      padding: 8px 15px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .search-bar input[type="submit"]:hover {
      background-color: #0056b3;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      text-align: center;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 12px;
    }

    th {
      background-color: #004d7a;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    .btn {
      padding: 5px 10px;
      border-radius: 5px;
      text-decoration: none;
      color: #fff;
    }

    .edit-btn {
      background-color: #28a745;
    }

    .delete-btn {
      background-color: #dc3545;
    }

    .edit-btn:hover {
      background-color: #218838;
    }

    .delete-btn:hover {
      background-color: #c82333;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Student Records</h2>

    
    <form method="GET" class="search-bar">
      <input type="text" name="search" placeholder="Search students..." value="<?php if(isset($_GET['search'])) echo $_GET['search']; ?>">
      <input type="submit" value="Search">
    </form>

    
    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Course</th>
        <th>Address</th>
        <th>Action</th>
      </tr>

      <?php
      //select
      $query = "SELECT * FROM students";
      //search
      if (isset($_GET['search']) && $_GET['search'] != "") {
        $search = mysqli_real_escape_string($conn, $_GET['search']);
        $query = "SELECT * FROM students WHERE 
                  name LIKE '%$search%' 
                  OR email LIKE '%$search%'
                  OR phone LIKE '%$search%'
                  OR course LIKE '%$search%'
                  OR address LIKE '%$search%'";
      }

      $result = mysqli_query($conn, $query);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>{$row['id']}</td>
                  <td>{$row['name']}</td>
                  <td>{$row['email']}</td>
                  <td>{$row['phone']}</td>
                  <td>{$row['course']}</td>
                  <td>{$row['address']}</td>
                  <td>
                    <a href='update_student.php?id={$row['id']}' class='btn edit-btn'>Edit</a>
                    <a href='delete_student.php?id={$row['id']}' class='btn delete-btn' onclick='return confirm(\"Are you sure?\");'>Delete</a>
                  </td>
                </tr>";
        }
      } else {
        echo "<tr><td colspan='7'>No matching records found.</td></tr>";
      }
      ?>
    </table>
  </div>
</body>
</html>
