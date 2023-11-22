<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Data</title>
</head>
<body>

    <form action="insert_process.php" method="post">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" required><br>

        <label for="surname">Surname: </label>
        <input type="text" name="surname" id="surname" required><br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" required><br>

        <label for="phone">Phone: </label>
        <input type="tel" name="phone" id="phone" required><br>

        <input type="submit">
        <input type="reset">

    </form>

</body>
</html>