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
        <p class="delete-title">Delete User Account</p>
        <br>

        <form class="form" action="includes/delete.inc.php" method="post">
            <input type="text" name="username" class="input" placeholder="Name">
            <input type="password" name="pwd" class="input" placeholder="Password">
            <button class="form-btn-del" name="submit">Delete User</button>
        </form>

        <?php

        if (isset($_GET['userdlt'])) {
            if ($_GET['userdlt'] == "success") {
                echo '<p class="delete-msg">User Delete Successfully!</p>';
            } elseif ($_GET['userdlt'] == "unsuccess") {
                echo '<p class="delete-msg">User Delete Unsuccessfully!</p>';
            }
        } elseif (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyinputfields") {
                echo '<p class="delete-msg-un">User Delete Unsuccessfully!</p>';
            }
        }

        ?>
    </div>

</body>

</html>