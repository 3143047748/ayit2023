<?php
if(isset($_GET['c'])){
$c=$_GET['c'];
if(!preg_match("/;|flag/i", $c)){
    system($c." >/dev/null 2>&1"); 
    }
else{
    die("513666!!!");
}
}else{
highlight_file(__FILE__);
}
?>
