<?php

$servername = "sql1.njit.edu";
$username = "zma4";
$password = "Z_viper908";
$dbname = "zma4";
$con = mysqli_connect($servername,$username,$password,$dbname);

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

session_start();

$_SESSION["idsession"]=$_POST["stdID"];

$idNum = $_SESSION["idsession"];

  $sqlid = "SELECT * FROM `Student` WHERE `StudentID`=$idNum";

  $resultid = $con->query($sqlid);

   if($resultid->num_rows > 0){

      $sql = "SELECT `Student`.*,`Transcript`.Course,`Transcript`.Grade FROM `Student` inner join `Transcript` ON `Transcript`.StudentID=$idNum AND `Student`.StudentId=$idNum";

      $result = $con->query($sql);

        echo "<table><tr><th>Student Name</th><th>Student ID</th><th>Major</th><th>Course</th><th>Grade</th></tr>";

        while ($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row['Name'] . "</td><td>" . $row['StudentID'] . "</td><td>" . $row['Major'] . "</td><td>" . $row['Course'] . "</td><td>" . $row['Grade'] . "</td></tr>";
        }
        echo "</table>";
      } 
      
      else{
      echo "Wrong Student ID Number";
    }



?>
<button onclick="location.href='//web.njit.edu/~zma4/Week11.php'" class="button">Home</button>