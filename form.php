<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>

<form action="form-handler.php" method="post">
    <label for="fname">First name: </label>
    <input type="text" name="fname" id="fname"><br>
    <label for="lname">Last name: </label>
    <input type="text" name="lname" id="lname"><br>

    <label for="password">Password: </label>
    <input type="password" name="password" id="password"><br>

    Gender:
    <input type="radio" name="gender" id="male" value="Male">
    <label for="male">Male</label>
    <input type="radio" name="gender" id="female" value="Female">
    <label for="female">Female</label>

    <br>
    Receive news from:
    <input type="checkbox" name="receive[]" id="email" value="email">
    <label for="email">Email</label>
    <input type="checkbox" name="receive[]" id="postal" value="postal">
    <label for="postal">Postal</label>
    <br>

    <label for="car">Car: </label>
    <select name="car[]" id="car" size="4" multiple>
        <option value="volvo">Volvo</option>
        <option value="tesla">Tesla</option>
        <option value="isuzu">Isuzu</option>
        <option value="honda">Honda</option>
    </select>

    <br>
    <label for="address">Address: </label>
    <textarea name="address" id="address" cols="25" rows="4"></textarea>

    <br>
    <input type="hidden" name="Subject" value="CN334">

    <br>
    <input type="submit" value="ส่งข้อมูล">
    <input type="reset" value="ล้างข้อมูล">
</form>

</body>
</html>

