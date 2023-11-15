<?php
error_reporting(0);
highlight_file(__FILE__);

class Start{
    public $barking;
    public function __toString(){
        return $this->barking->dosomething();
    }
}

class Flag{
    public $v;
    public function dosomething(){
        include($this->v);
        return "You Win!!!";

    }
}

$code=$_GET['code'];
if(isset($code)){
    echo unserialize($code);
}
else{
    echo "give me a way!";
} 