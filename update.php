<?php
//เรียก form_update
require_once 'db_model.php';

$id = isset($_GET['id']) ? $_GET['id'] : False;
$person = get_data($_GET['id']);

require_once 'form_update.php';