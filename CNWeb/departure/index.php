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
        $query = "SELECT * FROM phongban";
        $result = $conn -> query($query);
        
        echo "<table border='1'>

        <tr>

        <th>Id</th>

        <th>Name</th>

        <th>Description</th>
        
        </tr>";


        while($row = $result->fetch_assoc()) 
        {
            echo "<tr>";

            echo "<td>" . $row['IDPB'] . "</td>";

            echo "<td>" . $row['TenPB'] . "</td>";

            echo "<td>" . $row['MoTa'] . "</td>";

            echo "</tr>";
        }

    echo "</table>";
    CloseCon($conn);
    ?>



</body>

</html>