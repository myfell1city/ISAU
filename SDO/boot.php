<?php
session_start();
function get_mysqli()
{
    static $mysqli;
    if (!$mysqli) {
        $config = include('bd_config.php');
        $mysqli = mysqli_connect($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);
        return $mysqli;
    }
}
?>