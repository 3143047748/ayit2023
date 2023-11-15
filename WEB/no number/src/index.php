<?php
highlight_file(__FILE__);
 include("flag.php");
$AG=$_POST["AG"];
if (is_numeric($AG)) {
    echo "AG can't be number</br>";
}elseif ($AG == 513) {
  echo $flag;
}