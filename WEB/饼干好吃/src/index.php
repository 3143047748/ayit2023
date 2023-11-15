<?php
highlight_file(__FILE__);
include("flag.php");
$AG=$_COOKIE["user"];
if ($AG=="admin")
{
    echo $flag;
}