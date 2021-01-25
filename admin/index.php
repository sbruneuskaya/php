<?php
require_once '../db.php';
$action = $_GET['action'] ?? 'other_content';
$FullPath = __DIR__.'/template/views/'.$action.'.php';
require_once __DIR__.'/template/admin_layout.php';

