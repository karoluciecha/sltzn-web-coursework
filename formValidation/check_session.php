<?php
session_start();
echo isset($_SESSION['user_timezone']) ? $_SESSION['user_timezone'] : "";
?>