<?php


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['submit'])) {

        try {

            require_once "dbh.inc.php";

            $username = $_POST['username'];
            $userpwd = $_POST['pwd'];
            $useremail = $_POST['email'];

            if (empty($username) || empty($useremail) || empty($userpwd)) {
                header("Location: ../index.php?error=emptyinputfields");
                exit();
            } else {

                // $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";

                // $stmt = $pdo->prepare($query);

                // $stmt->execute([$username, $userpwd, $useremail]);

                // $pdo = null;
                // $stmt = null;

                $query = "INSERT INTO users (username, pwd, email) VALUES (:uname, :upwd, :uemail);";

                $stmt = $pdo->prepare($query);

                $stmt->bindParam(":uname", $username);
                $stmt->bindParam(":upwd", $userpwd);
                $stmt->bindParam(":uemail", $useremail);

                $stmt->execute();

                $pdo = null;
                $stmt = null;

                header("Location: ../index.php?signup=success");
                die();

            }


        } catch (PDOException $e) {
            die("Query Failed " . $e->getMessage());
            header("Location: ../index.php");
        }
    }
} else {
    header("Location: ../index.php");
    exit();
}
