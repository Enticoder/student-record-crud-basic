<?php
$conn = mysqli_connect("localhost","root","","student_db");

// Get ID from URL for both Edit & Delete operations
$id = $_GET['id'];

/* =========================================================
   📌 TASK 4: DELETE A STUDENT RECORD
   ---------------------------------------------------------
   When the user clicks on Delete button in display page,
   'delete' is passed through URL. If it's set, then we 
   remove the student record from the database.
========================================================= */
if (isset($_GET['delete'])) {
    mysqli_query($conn, "DELETE FROM students WHERE id=$id");
    echo "<script>
            alert('Record Deleted Successfully');
            window.location.href='display_records.php';
          </script>";
    exit();
}

/* =========================================================
   📌 TASK 3: EDIT A SPECIFIC STUDENT RECORD - (Step 1)
   ---------------------------------------------------------
   Fetch the current details of the student using its ID.
   The fetched values will be displayed inside the input fields
   so the user can update them easily.
========================================================= */
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$data = mysqli_fetch_assoc($result);

/* =========================================================
   📌 TASK 3: EDIT A SPECIFIC STUDENT RECORD - (Step 2)
   ---------------------------------------------------------
   After the user updates data and clicks Update button,
   the submitted values will update the selected student record
   using the UPDATE SQL query.
========================================================= */
if (isset($_POST['update'])) {
    $name = $_POST['student_name'];
    $class = $_POST['class_division'];
    $roll = $_POST['roll_number'];

    mysqli_query($conn,"UPDATE students 
                        SET student_name='$name', 
                            class_division='$class', 
                            roll_number=$roll 
                        WHERE id=$id");

    echo "<script>
            alert('Record Updated Successfully');
            window.location.href='display_records.php';
          </script>";
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

<h2>Edit Student</h2>

<!-- ============================================
     ✏️ TASK 3: EDIT FORM UI
     This form shows existing data & allows editing
================================================== -->
<form method="post">
    <label>Student Name:</label>
    <input type="text" name="student_name" value="<?php echo $data['student_name']; ?>" required><br><br>

    <label>Class & Division:</label>
    <input type="text" name="class_division" value="<?php echo $data['class_division']; ?>" required><br><br>

    <label>Roll Number:</label>
    <input type="number" name="roll_number" value="<?php echo $data['roll_number']; ?>" required><br><br>

    <input type="submit" name="update" value="Update">
</form>

</body>
</html>
