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
        include 'C:\xampp\htdocs\CNWeb\db_connection.php';
        $conn = OpenCon();
        $query = "SELECT * FROM nhanvien";

        $result = $conn -> query($query);

        echo "<table border='1'>

        <tr>

        <th>Id</th>

        <th>Name</th>

        <th>Departure</th>

        <th>Address</th>
        
        </tr>";

 

    while($row = $result->fetch_assoc()) 
    {
        echo "<tr>";

        echo "<td>" . $row['IDNV'] . "</td>";

        echo "<td>" . $row['HoTen'] . "</td>";

        echo "<td>" . $row['IDPB'] . "</td>";

        echo "<td>" . $row['DiaChi'] . "</td>";

        echo "</tr>";
    }

    echo "</table>";
        CloseCon($conn);
    ?>
</body>

</html>