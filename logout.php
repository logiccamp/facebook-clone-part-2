<?php
session_start();
$_SESSION['uid'] = "";

session_destroy();
session_unset();

header("Location: login.php");