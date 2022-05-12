<?php
include('databaseclass.php');
include_once('StudentController.php');

if(isset($_POST['update_student']))
{
    $id = $_POST['student_id'];
    $inputData = [
        'fullname'=>$_POST['fullname'],
        'email'=>$_POST['email'],
        'phone'=>$_POST['phone'],
        'course'=>$_POST['course'],
    ];
    $student = new StudentController;
    $result = $student->update($inputData, $id);

    if($result)
    {
        $_SESSION['message'] = "Student Added Successfully";
        header("Location:studentsfech.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Added";
        header("Location:studentsfech.php");
        exit(0);
    }
}

?>