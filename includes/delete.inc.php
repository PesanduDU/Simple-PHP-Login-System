<?php


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['submit'])) {

        try {

            require_once "dbh.inc.php";

            $username = $_POST['username'];
            $userpwd = $_POST['pwd'];

            if (empty($username) || empty($userpwd)) {
                header("Location: ../delete.php?error=emptyinputfields");
                exit();
            } else {

                $query = "DELETE FROM users WHERE username = ? AND pwd = ?;";

                $stmt = $pdo->prepare($query);

                $stmt->execute([$username, $userpwd]);

                $pdo = null;
                $stmt = null;

                header("Location: ../delete.php?userdlt=success");
                die();
            }
        } catch (PDOException $e) {
            die("Query Failed " . $e->getMessage());
            header("Location: ../delete.php?userdl=unsuccess");
        }
    }
} else {
    header("Location: ../delete.php");
    exit();
}
