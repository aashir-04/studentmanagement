<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Login Section -->
    <section id="login" class="login-section">
    <div class="login-content">
        <h1 class="title_deg">Login Form </h1>
        <form action="login_check.php" method="POST"class="login_form">

        <div>
             <label class="label_deg">Username:</label>
            <input type="text" name="username" placeholder="Enter your user name" required>
        </div>

        <div>
             <label class="label_deg">Password:</label>
            <input type="Password" name="password" placeholder="Enter your user name" minlength="8" maxlength="25" required>
        </div>

        <div>
           
            <button class="login_btn" type="submit" name="submit" value="Login"> Login </button>
        </div>


        </form>
    </div>
</section>
</body>
</html>