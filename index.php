<?php
/**
 * Created by PhpStorm.
 * User: reedm
 * Date: 8/3/14
 * Time: 9:53 PM
 */

require __DIR__ . "/config/config.php";
require __DIR__ . "/config/database.php";

$db = connect();

var_dump($db);