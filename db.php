<?php
$connection = mysqli_connect('localhost', 'homestead', 'secret', 'Ivan');

if (!$connection) {
    var_dump(mysqli_connect_error());
    die();
}

mysqli_set_charset($connection, "utf8");
