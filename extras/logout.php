<?php
session_start();
session_destroy();
$redirectionPage = '../sessions.php';
header("Location: $redirectionPage");
