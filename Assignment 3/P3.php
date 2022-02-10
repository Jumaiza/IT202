<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The Art Of Hair Salon</title>
  <style>
    body {
      background-image: url("salon.jpg");
    }

    div.box {
      line-height: 2;
      text-align: center;
      margin: auto;
      width: 60%;
      background-color: #ffffff;
      border: 2px solid black;
      opacity: 0.8;
    }

    .button:hover {
      background-color: blue;
    }
  </style>
</head>

<body>
  <div class="box">
    <div class="heading">
      <h1>The Art Of Hair</h1>
    </div>
    <?php

    function db()
    {
      $servername = "sql1.njit.edu";
      $username = "zma4";
      $password = "Z_viper908";
      $dbname = "zma4";
      static $con;
      if ($con === NULL) {
        $con = mysqli_connect($servername, $username, $password, $dbname);
      }
      return $con;
    }

    if (array_key_exists('button1', $_POST)) {
      button1();
    }
    if (array_key_exists('button2', $_POST)) {
      button2();
    }
    if (array_key_exists('button3', $_POST)) {
      button3();
    } else if (array_key_exists('button4', $_POST)) {
      button4();
    }

    function button1()
    {

      $con = db();
      $sql = "SELECT * FROM `it3`";

      $result = $con->query($sql);

      if ($result->num_rows > 0) {
        echo "<table><tr><th>Stylist First Name</th><th>Stylist Last Name</th><th>Stylist Password</th><th>Stylist ID Number</th><th>Stylist Phone Number</th><th>Stylist Email Address</th></tr>";

        while ($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row['Stylist First Name'] . "</td><td>" . $row['Stylist Last Name'] . "</td><td>" . $row['Stylist Password'] . "</td><td>" . $row['Stylist ID Number'] . "</td><td>" . $row['Stylist Phone Number'] . "</td><td>" . $row['Stylist Email Address'] . "</td></tr>";
        }
        echo "</table>";
      } else {
        echo "0 results";
      }
    }
    function button2()
    {

      $con = db();
      $sql2 = "SELECT * FROM `tbl2`";
      $result2 = $con->query($sql2);

      if ($result2->num_rows > 0) {
        echo "<table><tr><th>Client First Name</th><th>Client Last Name</th><th>Client ID</th><tr>";

        while ($row = $result2->fetch_assoc()) {
          echo "<tr><td>" . $row['Client First Name'] . "</td><td>" . $row['Client Last Name'] . "</td><td>" . $row['Client ID'] . "</td><tr>";
        }
        echo "</table>";
      } else {
        echo "0 results";
      }
    }
    function button3()
    {

      $con = db();
      $sql3 = "SELECT * FROM `tbl3`";

      $result3 = $con->query($sql3);

      if ($result3->num_rows > 0) {
        echo "<table><tr><th>Client ID</th><th>Stylist ID</th><th>Appointment Type</th><th>Date and Time</th><th>Appointment ID</th><tr>";

        while ($row = $result3->fetch_assoc()) {
          echo "<tr><td>" . $row['Client ID'] . "</td><td>" . $row['Stylist ID'] . "</td><td>" . $row['Appointment Type'] . "</td><td>" . $row['Date and Time'] . "</td><td>" . $row['Appointment ID'] . "</td><tr>";
        }
        echo "</table>";
      } else {
        echo "0 results";
      }
    }
    function button4()
    {

      $con = db();
      $sql4 = "SELECT * FROM `tbl4`";

      $result4 = $con->query($sql4);

      if ($result4->num_rows > 0) {
        echo "<table><tr><th>Client ID</th><th>Stylist ID</th><th>Appointment ID</th><th>Products and Quantity</th><th>Shipping Address</th><th>Order Number</th><tr>";

        while ($row = $result4->fetch_assoc()) {
          echo "<tr><td>" . $row['Client ID'] . "</td><td>" . $row['Stylist ID'] . "</td><td>" . $row['Appointment ID'] . "</td><td>" . $row['Products and Quantity'] . "</td><td>" . $row['Shipping Address'] . "</td><td>" . $row['Order Number'] . "</td><tr>";
        }
        echo "</table>";
      } else {
        echo "0 results";
      }
    }

    db()->close();
    ?>
    <form method="post">

      <input id="show_button" type="submit" name="button1" class="button" value="Stylist DB" />

      <input id="show_button" type="submit" name="button2" class="button" value="Client DB" />

      <input id="show_button" type="submit" name="button3" class="button" value="Client Appointment DB" />

      <input id="show_button" type="submit" name="button4" class="button" value="Client Order DB" />

      <button onclick="location.href='P3.php'" class="button">Home</button>
    </form>

    <br>
  </div>
  <script>
    
  </script>
</body>

</html>