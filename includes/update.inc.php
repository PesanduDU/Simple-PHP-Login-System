<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['submit'])) {

        try {

            require_once "dbh.inc.php";

            $username = $_POST['username'];
            $userpwd = $_POST['pwd'];
            $useremail = $_POST['email'];

            if (empty($username) || empty($useremail) || empty($userpwd)) {
                header("Location: ../update.php?error=emptyinputfields");
                exit();
            } else {

                $query = "UPDATE users SET username = :username, pwd = :pass, email = :email WHERE id = 8;";

                $stmt = $pdo->prepare($query);

                $stmt->bindParam(":username", $username);
                $stmt->bindParam(":pass", $userpwd);
                $stmt->bindParam(":email", $useremail);

                $stmt->execute();

                $pdo = null;
                $stmt = null;

                header("Location: ../update.php?userupdate=success");
                die();
            }
        } catch (PDOException $e) {
            die("Query Failed " . $e->getMessage());
            header("Location: ../update.php?userupdate=unsuccess");
        }
    }
} else {
    header("Location: ../update.php");
    exit();
}
