<<?php
session_start();
session_unset($_SESSION['id']);
session_unset($_SESSION['amount']);
session_unset($_SESSION['name']);
session_destroy();
header('location: /index.php');
 ?>
