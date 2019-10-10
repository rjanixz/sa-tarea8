<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SA - Tarea 8</title>
</head>
<body style="background-color:green; color:white;">
    <h1>Software Avanzado</h1>
    <h2>Tarea 8 - Rainman Sián</h2>

    <?php


    $conn = new mysqli("database", "root", ".sweetpwd.", "my_db");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT name FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo $row['name']."<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

</body>
</html>