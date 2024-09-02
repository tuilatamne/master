<?php
require_once '../../config.php';
require_once '../../source/database.php';

$db = new Database();

$contact_info = $_POST['contact_info'];
$data_insert = [
    'info' => $contact_info
];
$db->insert('custommer', $data_insert);
