<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles.css">

</head>

<body>

    <!-- form section -->

    <div class="form-container">
        <p class="title">Create account</p>
        <br>

        <form class="form" action="includes/formhandler.inc.php" method="post">
            <input type="text" name="username" class="input" placeholder="Name">
            <input type="text" name="email" class="input" placeholder="Email">
            <input type="password" name="pwd" class="input" placeholder="Password">
            <button class="form-btn" name="submit">Sign up</button>
        </form>
        <p class="sign-up-label">
            Already have an account?&nbsp;<span class="sign-up-link">Sign in</span>
        </p>

        <br>

        <p class="sign-up-label">
            Do you want to update the user?&nbsp;<a href="update.php"><span class="sign-up-link">Update User</span></a>
        </p>

        <p class="sign-up-label">
            Do you want to delete the user?&nbsp;<a href="delete.php"><span class="sign-up-link">Delete User</span></a>
        </p>
    </div>

    <!-- /form -->

</body>

</html>