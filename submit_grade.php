<?php
session_start();
include 'db.php';

if (isset($_POST['submit'])) {
    $group_number = $_POST['group_number'];
    $group_members = $_POST['group_members'];
    $project_title = $_POST['project_title'];
    $articulate = $_POST['articulate'];
    $tools = $_POST['tools'];
    $presentation = $_POST['presentation'];
    $teamwork = $_POST['teamwork'];

    $total = $articulate + $tools + $presentation + $teamwork;
    $judge = $_SESSION['username'];

    $stmt = $conn->prepare("INSERT INTO grades (judge, group_number, group_members, project_title, articulate, tools, presentation, teamwork, total) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sissiiiii", $judge, $group_number, $group_members, $project_title, $articulate, $tools, $presentation, $teamwork, $total);

    if ($stmt->execute()) {
        echo "Grades submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
<a href="grading.php">Back</a>
