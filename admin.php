<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}

$sql = "SELECT judge, SUM(total) as total_score FROM grades GROUP BY judge";
$result = $conn->query($sql);

echo "<table border='1'>";
echo "<tr><th>Judge</th><th>Total Score</th></tr>";

$total_sum = 0;
$count = 0;

while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['judge'] . "</td><td>" . $row['total_score'] . "</td></tr>";
    $total_sum += $row['total_score'];
    $count++;
}
echo "<tr><td>Average</td><td>" . ($count ? $total_sum / $count : 0) . "</td></tr>";
echo "</table>";
?>

<a href="logout.php">Logout</a>
