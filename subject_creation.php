<?php

$conn = mysqli_connect("localhost", "root", "", "creslms");
$department = $_POST['department'];
$subject_name = $_POST['subject'];
$courseCode = $_POST['courseCode'];
$semester = $_POST['semester'];
$image = $_POST['image'];


$sql = "INSERT INTO subject (department,name,course_code,semester,subject_image)
     VALUES ('$department','$subject_name','$courseCode','$semester','$image')";

if (mysqli_query($conn, $sql)) {
   echo "New record has been added successfully !";
} else {
   echo "Error: " . $sql . ":-" . mysqli_error($conn);
}
$conn->close();
?>