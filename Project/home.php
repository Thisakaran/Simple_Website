<?php session_start(); ?>
<h1> Welcome <?php echo $_SESSION["username"]; ?> </h1>
<a class="logout" href="logout.php">Logout</a>
<a class="details" href="employeeDetails.php">Employee Details</a>

<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="home">
            <h3>Fill the details here..!</h3>
            <form action="employeeInsert.php" method="post">
                <h4>First Name:</h4>
                <p><input type="text" name="firstname" required=""></p>
                <h4>Last Name:</h4>
                <p><input type="text" name="lastname" required=""></p>
                <h4>Contact No:</h4>
                <p><input type="text" name="phone" required=""></p>
                <h4>Email:</h4>
                <p><input type="email" name="email" required=""></p>
                <button>Submit</button>
            </form>
        </div>
    </body>
</html>