<?php 
session_start(); 
include "db_conn.php";

if (
    isset($_POST['username']) && isset($_POST['password'])
    && isset($_POST['email']) && isset($_POST['password_hash']) && isset($_POST['age'])
) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    $password_hash = validate($_POST['password_hash']);
    $email = validate($_POST['email']);
    $age = validate($_POST['age']);

    $user_data = 'username=' . $username . '&email=' . $email . '&age=' . $age;

    if (empty($username)) {
        header("Location: signup.php?error=User Name is required&$user_data");
        exit();
    } else if (empty($password)) {
        header("Location: signup.php?error=Password is required&$user_data");
        exit();
    } else if (empty($password_hash)) {
        header("Location: signup.php?error=Re Password is required&$user_data");
        exit();
    } else if (empty($email)) {
        header("Location: signup.php?error=Email is required&$user_data");
        exit();
    } else if (empty($age)) {
        header("Location: signup.php?error=Age is required&$user_data");
        exit();
    } else if ($password !== $password_hash) {
        header("Location: signup.php?error=The confirmation password does not match&$user_data");
        exit();
    } else {

        // hashing the password using bcrypt
        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "SELECT * FROM user WHERE username='$username' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: signup.php?error=The username is taken, try another&$user_data");
            exit();
        } else {
            $sql2 = "INSERT INTO user(username, email, password_hash, age) VALUES('$username', '$email', '$password', '$age')";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                header("Location: signup.php?success=Your account has been created successfully");
                exit();
            } else {
                // Debugging statements
                echo "Error: " . mysqli_error($conn);
                exit();
            }
        }
    }
} else {
    header("Location: signup.php");
    exit();
}