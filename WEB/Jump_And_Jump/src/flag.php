<?php
ob_start();
error_reporting(0);
echo("flag{testflag}");
header("Location: index.php");
exit;
?>
