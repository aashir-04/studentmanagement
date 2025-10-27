<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
        display: flex;
        height: 100vh;
        overflow: hidden;
        background-color: #f4f7fa;
    }

    /* Sidebar */
    .sidebar {
        width: 230px;
        background-color: #157575;
        color: white;
        display: flex;
        flex-direction: column;
        padding-top: 20px;
    }

    .sidebar h2 {
        text-align: center;
        margin-bottom: 30px;
        font-size: 22px;
        font-weight: bold;
    }

    .sidebar ul {
        list-style: none;
        padding: 0;
        margin-top: 20px;
    }

    .sidebar ul li {
        text-align: center;
        margin-bottom: 15px;
    }

    .sidebar ul li a {
        display: block;
        padding: 12px;
        color: white;
        text-decoration: none;
        font-weight: 500;
        transition: 0.3s;
        border-radius: 6px;
        width: 80%;
        margin: auto;
    }

    .sidebar ul li a:hover,
    .sidebar ul li a.active {
        background-color: #0e5454;
    }

    /* Main Section */
    .main {
        flex: 1;
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .header {
        background-color: #8bd3dd;
        color: #000;
        padding: 15px 25px;
        font-size: 20px;
        font-weight: bold;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 60px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .header a {
        color: black;
        text-decoration: none;
        font-weight: 600;
    }

    .header a:hover {
        text-decoration: underline;
    }

    /* Iframe */
    .content {
        flex: 1;
        background-color: #f5f7fa;
        padding: 15px;
        overflow: hidden;
    }

    iframe {
        width: 100%;
        height: 100%;
        border: none;
        border-radius: 10px;
        background: white;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.08);
    }
</style>

</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="add_student.php" target="contentFrame" class="active">Add Student</a></li>
            <li><a href="view_student.php" target="contentFrame">View Student</a></li>
        </ul>
    </div> 

    

    <!-- Main Content -->
    <div class="main">
        <div class="header">
            <span>Admin Dashboard</span>
            <a href="logout.php">Logout</a>
        </div>
        <div class="content">
            <iframe name="contentFrame" src="view_student.php"></iframe>
        </div>
    </div>

   <script>
    // Select all sidebar links
    const sidebarLinks = document.querySelectorAll('.sidebar ul li a');

    sidebarLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            
            sidebarLinks.forEach(l => l.classList.remove('active'));
            
            this.classList.add('active');
        });
    });
</script>


</body>
</html>
