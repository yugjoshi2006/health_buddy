<?php
ob_start(); // Start output buffering at the top of the script

session_start(); // Start the session before any output

include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    // Check if email already exists
    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);
    if($result->num_rows > 0){
        echo "Email Address Already Exists!";
    }
    else {
        // Insert new user into the database
        $insertQuery = "INSERT INTO users (firstName, lastName, email, password)
                        VALUES ('$firstName', '$lastName', '$email', '$password')";
        if($conn->query($insertQuery) === TRUE){
            header("Location: index.php"); // Ensure no output before header
            exit(); // Ensure the script stops after redirect
        }
        else {
            echo "Error: " . $conn->error;
        }
    }
}

if(isset($_POST['signIn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    // Check if credentials are valid
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $_SESSION['email'] = $email;
        header("Location: homepage.php"); // Redirect to homepage after successful login
        exit(); // Ensure the script stops after redirect
    }
    else {
        echo "Not Found, Incorrect Email or Password";
    }
}

ob_end_flush(); // End output buffering at the bottom
?>
