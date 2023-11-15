<?php
highlight_file(__FILE__);

class WEB{
    var $id = 'Baize';
    function __wakeup(){
        eval($this->id);
    }
}

$ctf = $_POST['AG'];

$CTF = unserialize($ctf);

?>