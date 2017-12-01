<?php
/**
 * Created by PhpStorm.
 * User: Clemence
 * Date: 01/12/2017
 * Time: 14:21
 */

try {
    $conn = new PDO('mysql:dbname=speedrun;host=localhost', 'root', '');
} catch (PDOException $exception) {
    die($exception->getMessage());
}