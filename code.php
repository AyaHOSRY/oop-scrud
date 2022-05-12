<?php
session_start();

include('databaseclass.php');
include('StudentController.php');

$db = new Database;

if(isset($_POST['save_student']))
{
    $inputData = [
        'fullname' =>$_POST['fullname'],
        'email' =>$_POST['email'],
        'phone' =>$_POST['phone'],
        'course' =>$_POST['course'],
    ];

    $student = new StudentController;
    $result = $student->create($inputData);
    
    if($result)
    {
        $_SESSION['message'] = "Student Added Successfully";
        header("Location:studentsfech.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Inserted";
        header("Location:studentsfech.php");
        exit(0);
    }
}
?>