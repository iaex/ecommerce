<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

require __DIR__ . '/config/database.php';

function e($str){
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}