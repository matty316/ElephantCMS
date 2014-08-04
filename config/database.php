<?php
/**
 * Created by PhpStorm.
 * User: reedm
 * Date: 8/3/14
 * Time: 9:53 PM
 */

/**
 * Connect to database
 */
function connect() {
    try {
        $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT, DB_USER, DB_PASS);
    } catch (PDOException $e) {
        echo $e->getMessage();
        die();
    }
    return $db;
}
