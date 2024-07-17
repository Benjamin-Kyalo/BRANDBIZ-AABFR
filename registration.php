<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="C:\xampp\htdocs\BRANDBIZ-AABFR\CSS\signup.css">
</head>

<body>
    <form action="C:\xampp\htdocs\BRANDBIZ-AABFR\PHP\register.php" method="POST" id="register_form">
        <div class="container">
            <h1>Register Form</h1>
            <p>Create an account</p>
            <label for="Firstname">First Name</label>
            <input type="text" placeholder="Enter your First Name" name="firstname" required />

            <label for="Lastname">Last Name</label>
            <input type="text" placeholder="Enter your Last name" name="lastname" required />

            <label for="Email">Email</label>
            <input type="email" placeholder="Enter your Email" name="email" required />

            <label for="password">Password</label>
            <input type="password" placeholder="Enter your password" name="password" required />

            <button type="submit" class="register-btn">Register</button>
        </div>

        <div class="container-signin">
            <p>Already have an account? <a href="login.html">Sign in</a></p>
        </div>
    </form>
</body>

</html>