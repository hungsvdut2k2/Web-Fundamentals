<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button>Add Employee</button>
    <?php
        include '/opt/lampp/htdocs/employee-management/db_connection.php';
        $conn = OpenCon();
        $query = "SELECT * FROM nhanvien";

        $result = $conn -> query($query);

        echo "<table border='1'>
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Departure</th>
        <th>Address</th>
        <th>Update</th>
        <th>Delete</th>
        </tr>";

 

    while($row = $result->fetch_assoc()) 
    {
        ?>
    <tr>
        <td><?= $row['IDNV']; ?></td>
        <td><?= $row['HoTen']; ?></td>
        <td><?= $row['IDPB']; ?></td>
        <td><?= $row['DiaChi']; ?></td>
        <td align="center">
            <form action="crud_employee.php" method="POST">
                <button type="submit" name="update_employee">Update</button>
            </form>
        </td>
        <td align="center">
            <form action="crud_employee.php" method="POST">
                <button type="submit" name="delete_employee" value="<?= $row['IDNV']; ?>">Delete</button>
            </form>
        </td>
    </tr>
    <?php
    }

    echo "</table>";
    CloseCon($conn);
    ?>
</body>

</html>