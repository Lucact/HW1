<?php
session_start();
session_destroy();
header("location: Accesso.php");
exit();
?>
