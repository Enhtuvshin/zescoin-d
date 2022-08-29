<?php
session_start();
require 'dbconnect.php';


if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM students WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: index3.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted";
        header("Location: index3.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $numbers1 = mysqli_real_escape_string($con, $_POST['numbers1']);
    $numbers2 = mysqli_real_escape_string($con, $_POST['numbers2']);
    $numbers3 = mysqli_real_escape_string($con, $_POST['numbers3']);

    $query = "UPDATE students SET name='$numbers1', numbers1='$numbers2', numbers2='$phone', numbers3='$numbers3' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: index3.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Updated";
        header("Location: index3.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $numbers1 = mysqli_real_escape_string($con, $_POST['numbers1']);
    $numbers2 = mysqli_real_escape_string($con, $_POST['numbers2']);
    $numbers3 = mysqli_real_escape_string($con, $_POST['numbers3']);

    $query = "INSERT INTO students (numbers1,numbers2,numbers3) VALUES ('$numbers1','$numbers2','$numbers3')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Created Successfully";
        header("Location: create2.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Created";
        header("Location: create2.php");
        exit(0);
    }
}

?>