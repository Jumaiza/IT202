<?php

    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 11
    </title>
</head>
<body>
<form action="submit11.php" method="post">
        <div>
        <label for="stdID">Student Id: </label>
        <input placeholder="Example: 1234" id="stdID" name="stdID" type="text" required/>
    </div>
    <input type="submit" id="submit" name="submit" />
<?php

    $_SESSION["idsession"];

?>
</body>
</html>