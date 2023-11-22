<?php
// Open a connection to MariaDB Server
$host = 'localhost';
$user = 'db_user';
$password = 'db_pw';
$database = 'my_db';

function db_connect($host, $user, $password, $database){
    $link = mysqli_connect($host, $user, $password, $database);
    return $link;
}

$link = db_connect($host, $user, $password, $database);

// default arg
function get_all_data($sort='id') {
    //ทำให้ตัวแปร link ถูกมองเห็น
    global $link;
    $query = "select * from persons2 order by $sort";
    $result = mysqli_query($link, $query);

    // Fetch data
    while ($row = mysqli_fetch_assoc($result)) {
        $persons[] = $row;
    }
    return $persons;
}
function get_data($id) {
    global $link;
    $query = "SELECT * FROM persons2 WHERE id='$id'";
    $result = mysqli_query($link, $query);

    $row = mysqli_fetch_assoc($result);
    return $row;
}
function insert_data($data) {
    global $link;
    extract($data);
    $query = "INSERT INTO persons2 (name, surname, email, phone) 
            VALUES ('$name', '$surname', '$email', '$phone')";
    $result = mysqli_query($link, $query);
    return $result;
}

function delete_data($id) {
    global $link;
    $query = "DELETE FROM persons2 WHERE id='$id'";
    $result = mysqli_query($link, $query);
    return $result;
}

function update_data($data) {
    global $link;
    extract($data);
    $query = "UPDATE persons2
              SET name='$name', surname='$surname', email='$email', phone='$phone'
              WHERE id='$id'";
    $result = mysqli_query($link, $query);
    return $result;

}