<?php
session_start();
include 'db.php';


if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $user;
        $_SESSION['role'] = $row['role'];
        if ($_SESSION['role'] == 'admin') {
            header("Location: admin.php");
        } else {
            header("Location: grading.php");
        }
    } else {
        echo "Incorrect username or password.";
    }
}
?>

<link rel="stylesheet" href="style.css">
<form method="POST">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit" name="login">Login</button>
</form>
 