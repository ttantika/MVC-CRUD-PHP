<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Handler</title>
</head>
<body>
<?php
    echo $_POST['fname'] . ' ' . $_POST['lname'] . "<br>\n";
    echo $_POST['password'] . "<br>\n";
    echo $_POST['gender'] . "<br>\n";
    if (isset($_POST['receive'])) {
       foreach ($_POST['receive'] as $value) {
           echo "$value ";
        }
    }
    echo "<br>\n";
    if (isset($_POST['car'])) {
        foreach ($_POST['car'] as $value) {
            echo "$value ";
        }
    }
    echo "<br>\n";
    echo nl2br($_POST['address']) . "<br>\n";
    echo $_POST['Subject'] . "<br>\n";

?>

</body>
</html>
