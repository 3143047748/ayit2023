<?php
highlight_file(__FILE__);
if(isset($_GET['a']) && isset($_GET['b'])){
    $c=$_GET['a'];
    $d=$_GET['b'];
    if($c != $d && md5($c) == md5($d)){
	$flag1 = True;
    }else{
        die("nope,this is level 1");
    }
}
if($flag1){
    if($_POST['x'] == md5($_POST['x'])){
         echo file_get_contents("flag.php");
    }
}
//命令执行完毕后，记得查看源码哦~