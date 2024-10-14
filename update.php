<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="form-container">
        <p class="update-title">Update User Account</p>
        <br>

        <form class="form" action="includes/update.inc.php" method="post">
            <input type="text" name="username" class="input" placeholder="Name">
            <input type="text" name="email" class="input" placeholder="Email">
            <input type="password" name="pwd" class="input" placeholder="Password">
            <button class="form-btn-up" name="submit">Update User</button>
        </form>
    </div>

    <?php

    if (isset($_GET['userupdate'])) {
        if ($_GET['userupdate'] == "success") {
            echo '<p class="update-msg">User Update Successfully!</p>';
        } elseif ($_GET['userdlt'] == "unsuccess") {
            echo '<p class="update-msg-un">User Delete Unsuccessfully!</p>';
        }
    } elseif (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyinputfields") {
            echo '<p class="update-msg-un">User Delete Unsuccessfully!</p>';
        }
    }

    ?>

</body>

</html>