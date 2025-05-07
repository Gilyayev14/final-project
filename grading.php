
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Grading Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<form action="submit_grade.php" method="post">
    <table>
        <tr><th colspan="4" style="text-align:center;">Computer Science Project</th></tr>
        <tr>
            <td colspan="2">Group Members:<br><input type="text" name="group_members" required></td>
            <td colspan="2">Group Number:<br><input type="text" name="group_number" required></td>
        </tr>
        <tr>
            <th>Criteria</th>
            <th>Developing(0-10)</th>
            <th>Accomplished(10-15)</th>
        </tr>
        <tr><td>Articulate requirements</td><td><input type="number" name="req_dev" min="0" max="10"></td><td><input type="number" name="req_acc" min="10" max="15"></td></tr>
        <tr><td>Choose appropriate tools and methods for each task</td><td><input type="number" name="tools_dev" min="0" max="10"></td><td><input type="number" name="tools_acc" min="10" max="15"></td></tr>
        <tr><td>Give clear and coherent oral presentation</td><td><input type="number" name="oral_dev" min="0" max="10"></td><td><input type="number" name="oral_acc" min="10" max="15"></td></tr>
        <tr><td>Functioned well as a team</td><td><input type="number" name="team_dev" min="0" max="10"></td><td><input type="number" name="team_acc" min="10" max="15"></td></tr>
        <tr><td colspan="3">Total: [Calculated in backend]</td></tr>
        <tr><td colspan="3">Judge's name:<br><input type="text" name="judge_name" required></td></tr>
        <tr><td colspan="3">Comments:<br><textarea name="comments" rows="4"></textarea></td></tr>
        <tr><td colspan="3" style="text-align:right;"><input type="submit" value="Submit"></td></tr>
    </table>
</form>
</body>
</html>
