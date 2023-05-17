<?php
include 'config.php';
$id = $_GET['id'];
// print_r($_GET['id']);
// echo $studentId;
// $id = 0;
$query = "DELETE FROM students WHERE `students`.`id` = $id";
if (mysqli_query($conn, $query)) {

    echo "<script> window.location.href = 'showdata.php' </script>";




}
// echo "delete";

?>