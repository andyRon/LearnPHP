<?php

session_save_path("./sessions");
session_start();
if (isset($_SESSION['name'])) {
    echo $_SESSION['name'];
    exit();
}
$_SESSION['name'] = 'andyron';