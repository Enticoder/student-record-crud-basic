<!DOCTYPE html>
<html>
<head>
    <title>Display Students</title>
</head>
<body>

<h2>Student List</h2>
<table border="1" cellpadding="10">
    <tr>
        <th>Student Name</th>
        <th>Class & Division</th>
        <th>Roll Number</th>
        <th>Action</th>
    </tr>

<?php
$conn = mysqli_connect("localhost","root","","student_db");
$result = mysqli_query($conn,"SELECT * FROM students");

while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
            <td>".$row['student_name']."</td>
            <td>".$row['class_division']."</td>
            <td>".$row['roll_number']."</td>
            <td>
               <a href='action.php?id=".$row['id']."'>Edit</a> |
               <a href='action.php?id=".$row['id']."&delete=1' onclick='return confirm(\"Are you sure?\");'>Delete</a>

            </td>
        </tr>";
}
?>

</table><br>
<a href="add_student.php">Add New Student</a>
</body>
</html>