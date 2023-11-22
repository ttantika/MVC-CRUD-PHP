<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: .5em;
        }
        .material-symbols-outlined {
            font-variation-settings:
                     'FILL' 0,
                     'wght' 400,
                     'GRAD' 0,
                     'opsz' 48
        }
        .material-symbols-outlined {
            font-variation-settings:
                     'FILL' 0,
                     'wght' 400,
                     'GRAD' 0,
                     'opsz' 48
        }
    </style>
</head>
<body>

<h1>6310742355-Tantika Yoothong</h1>
<p style="text-align: center">
    <a href="form_insert.php">Add new data</a>
</p>

<?php

//echo "<pre>\n";
////var_dump($a2); // print all data in array
//print_r($persons);
//echo "</pre>\n";

//foreach( $persons as $person ) {
//    echo $person['id'] . ", ";
//    echo $person['name'] . " ";
//    echo $person['surname'] . ", ";
//    echo $person['email'] . ", ";
//    echo $person['phone'];
//    echo "<br>\n";
//}

echo "<table>
   <thead>
       <tr>        
           <th><a href='index.php?sort=id'>ID</a></th>       
           <th><a href='index.php?sort=name'>Full name</a></th>
           <th><a href='index.php?sort=email'>Email</a></th>
           <th><a href='index.php?sort=phone'>Phone</a></th>
           <th><span class='material-symbols-outlined'>delete</span></th>
           <th><span class='material-symbols-outlined'>edit</span></th>
        </tr>
    </thead>\n";

    echo"<tbody>\n";

    foreach( $persons as $person ) {
        echo "<tr>
                <td>" . $person['id'] . "</td>\n" .
                "<td>" . $person['name'] . " " . $person['surname'] . "</td>\n" .
                "<td>" . $person['email'] . "</td>\n" .
                "<td>" . $person['phone'] . "</td>\n" .
                "<td> <a href='delete_process.php?id=" . $person['id'] . "'>" .
                "<span class='material-symbols-outlined'>delete</span>"."</td>\n" .
                "<td> <a href='form_update.php?id=" . $person['id'] . "'>" .
                "<span <span class='material-symbols-outlined'>edit</span>"."</td>\n" .

            "</tr>";
    }
    echo "</tbody>\n";
echo "</table>";

?>
</body>
</html>
