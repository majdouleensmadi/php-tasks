<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM card_1 WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $img = mysqli_real_escape_string($con, $_POST['img']);
    $brand = mysqli_real_escape_string($con, $_POST['brand']);
    $price = mysqli_real_escape_string($con, $_POST['price']);

    $query = "UPDATE card_1 SET Name='$name', img_url='$img', brand='$brand', price='$price' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $img = mysqli_real_escape_string($con, $_POST['img']);
    $brand = mysqli_real_escape_string($con, $_POST['brand']);
    $price = mysqli_real_escape_string($con, $_POST['price']);

    $query = "INSERT INTO card_1 (name,img_url,brand,price) VALUES ('$name','$img','$brand','$price')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Created Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>