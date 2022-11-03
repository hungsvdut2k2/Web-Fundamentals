<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        include '/opt/lampp/htdocs/employee-management/db_connection.php';
        $conn = OpenCon();
        $query = "SELECT * FROM phongban";
        $result = $conn -> query($query);
        
        echo "<table border='1'>
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Employee</th>
        </tr>";


        while($row = $result->fetch_assoc()) 
        {
            echo '<tr>
            <td>'.$row['IDPB'].'</td>
            <td>'.$row['TenPB'].'</td>
            <td>'.$row['MoTa'].'</td>
            <td align="center">
            <a href="/employee-management/employee_in_departure.php?IDPB='.$row['IDPB'].'">View</a>
            </td>
            </tr>';
        }

    echo "</table>";
    CloseCon($conn);
    ?>



</body>

</html>