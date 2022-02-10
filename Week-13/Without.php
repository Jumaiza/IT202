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

    $servername = "sql1.njit.edu";
    $username = "zma4";
    $password = "Z_viper908";
    $dbname = "zma4";
    $con = mysqli_connect($servername, $username, $password, $dbname);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $name = $_POST['name'];

    $sqlid = "SELECT * FROM Student WHERE Name='$name'";

    $resultid = $con->query($sqlid);

    if ($resultid->num_rows > 0) {

        echo $sqlid;
        echo "<table><tr><th>Student Name</th><th>Student ID</th><th>Major</th></tr>";

        while ($row = $resultid->fetch_assoc()) {
            echo "<tr><td>" . $row['Name'] . "</td><td>" . $row['StudentID'] . "</td><td>" . $row['Major'] . "</td></tr>";
        }
        echo "</table>";
    }

    ?>
    <form action="Without.php" method="POST">
        <label for="name">Student Name</label>
        <input id="name" name="name" type="text">
        <input type="submit" id="submit" name="submit" />
    </form>
</body>

</html>