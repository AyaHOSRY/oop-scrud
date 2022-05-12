<?php
include('databaseclass.php');
include_once('StudentController.php');

if(isset($_POST['deleteStudent']))
{
    $id = $_POST['deleteStudent'];
    $student = new StudentController;
    $result = $student->delete($id);
    if($result)
    {
        $_SESSION['message'] = "Student Added Successfully";
        header("Location: studentsfech.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Added";
        header("Location: studentsfech.php");
        exit(0);
    }
}
?>