<?php

require_once  "db_model.php";

if(insert_data($_POST))
    $message = 'Add data successfully.';
else
    $message = 'Cannot insert data.';

//file message กลาง
require_once 'message.view.php';

