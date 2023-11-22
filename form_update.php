<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Data</title>
</head>
<body>
<?php
    require_once "update.php"
?>

    <form action="update_process.php" method="post">
        <input hidden="hidden" type="number" name="id" id="id" value="<?php echo $person['id']?>"><br>

        <label for="name">Name: </label>
        <input type="text" name="name" id="name" value="<?php echo $person['name'] ?>" required><br>

        <label for="surname">Surname: </label>
        <input type="text" name="surname" id="surname" value="<?php echo $person['surname'] ?>" required><br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" value="<?php echo $person['email'] ?>" required><br>

        <label for="phone">Phone: </label>
        <input type="tel" name="phone" id="phone" value="<?php echo $person['phone'] ?>" required><br>

        <input type="submit">
        <input type="reset">

    </form>

</body>
</html>
