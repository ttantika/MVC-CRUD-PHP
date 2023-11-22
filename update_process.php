<?php
require_once  'db_model.php';

$id = isset($_GET['id']) ? $_GET['id'] : False;

if(update_data($_POST))
    $message = 'Update data successfully.';
else
    $message = 'Cannot update data.';

//file message กลาง
require_once 'message.view.php';