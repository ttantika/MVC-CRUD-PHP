<?php

require_once  "db_model.php";

// isset => check ว่า key มีค่าหรือเปล่า กัน url sort=
$sort = isset($_GET['sort']) ? $_GET['sort'] : False;
$fields = ['id', 'name', 'email', 'phone'];
// check ว่าค่าของsort มีอยู่ใน field ไหม
//ถ้าไม่มีให้เท่ากับ id
if(!in_array($sort, $fields))
    $sort = 'id';

$persons = get_all_data($sort);

require_once "data.view.php";
