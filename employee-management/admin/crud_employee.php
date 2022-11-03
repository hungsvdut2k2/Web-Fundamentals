<?php
    session_start();
    include '/opt/lampp/htdocs/employee-management/db_connection.php';
    $conn = OpenCon();
    if(isset($_POST['delete_employee'])) {
        $employee_id = (int)$_POST['delete_employee'];
        $query = "DELETE FROM nhanvien WHERE IDNV=$employee_id ";
        $query_run = mysqli_query($conn, $query);
        if($query_run)
        {   
            $_SESSION['message'] = "Employee Deleted Successfully";
            header("Location: admin.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Employee Not Deleted";
            header("Location: admin.php");
            exit(0);
        }
    } else if(isset($_POST['update_employee'])) {
        echo "UPDATE";
    }
    CloseCon($conn);
?>