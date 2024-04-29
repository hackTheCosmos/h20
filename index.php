<?php
// echo realpath('index.php');
// die;
session_start();

//Load Composer's autoloader
require_once 'PHPMailer/PHPMailerAutoload.php';

require_once "autoloader.php";

Router::route();






