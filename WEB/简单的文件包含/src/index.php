<?php
highlight_file(__FILE__);
    if(isset($_POST['admin'])){
        $filename  = $_POST['password'];
        include($filename);
    }
?>