<?php

require_once 'db_model.php';

$id = isset($_GET['id']) ? $_GET['id'] : False;

if(delete_data($id))
    $message = 'Delete data successfully.';
else
    $message = 'Cannot delete data.';

//file message กลาง
require_once 'message.view.php';
