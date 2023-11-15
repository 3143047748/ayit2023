<?php
highlight_file(__FILE__);
class flag{
    public $username;
    public $code;
    public function __wakeup(){
        $this->username = "guestcard";
    }
    public function __destruct(){
        if($this->username = "admin513"){
            include($this->code);
        }
    }
}
unserialize($_GET['try_try']);