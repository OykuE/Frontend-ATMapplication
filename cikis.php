<?php
session_start();
session_destroy();
ob_start();
Header("Location:index.php");
ob_end_flush();
?>