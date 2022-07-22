<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title> Login </title>
    </head>
    <body>
        <h1>Welcome to Group Project Web-02 Register Page...!</h1>
        <div class="login-body">
            <h3>Registor Now..!</h3>
            <form action="insert.php" method="post">
            <h4>User Name:</h4>
                <p><input type="text" name="username"></p>
                <h4>Password:</h4>
                <p><input type="password" name="password"></p>
                <h4>Re-Type Password:</h4>
                <p><input type="password" name="retype_password"></p>
                <button>Register Now</button>
                <p class="message">You are alredy register. Please Login!</p>
            </form>
        </div>
    </body>
</html>