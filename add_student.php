<?php
$showMsg = false;   // default (no message)

if (isset($_POST['submit'])) {
    $student_name = $_POST['student_name'];
    $class_division = $_POST['class_division'];
    $roll_no = $_POST['roll_no'];

    $conn = new mysqli('localhost', 'root', '', 'student_db');

    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    // CORRECT QUERY
    $sql = "INSERT INTO students (student_name, class_division, roll_number) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // CORRECT BIND (3 VALUES)
    $stmt->bind_param("sss", $student_name, $class_division, $roll_no);

    if ($stmt->execute() === TRUE) {
        $showMsg = true; // message should show
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>

    <style>
        .success-msg {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            width: 300px;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            margin-top: 15px;
            display: none;
        }

        .submit-btn {
         background-color: #4a4a4a;
         color: white; 
         padding: 10px 25px;
         border: none;
         border-radius: 6px;
         cursor: pointer;
         font-size: 16px;
         transition: 0.3s ease;
        }

        .submit-btn:hover {
         background-color: red;
         color: white;
        }
    </style>
</head>
<body>

<h2>Add Student Records</h2>

<form action="" method="post">
    <label>Student Name:</label>
    <input type="text" name="student_name" required>
    <br><br>

    <label>Class and Division</label>
    <input type="text" name="class_division" required>
    <br><br>

    <!-- <label>Division</label>
    <input type="text" name="division" required>
    <br><br> -->

    <label>Roll No.</label>
    <input type="text" name="roll_no" required>
    <br><br>

    <input type="submit" name="submit" value="Submit" class="submit-btn">
</form>

<div class="success-msg" id="msgBox">New student record added successfully.</div>

<?php if ($showMsg) { ?>
<script>
    document.getElementById('msgBox').style.display = 'block';
    setTimeout(() => {
        document.getElementById('msgBox').style.display = 'none';
    }, 5000); // hide after 5 seconds
</script>
<?php } ?>

</body>
</html>


