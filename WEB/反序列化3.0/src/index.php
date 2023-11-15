<?php
highlight_file(__FILE__);
class misca{
    public $gao;
    public $fei;
    public function __get($key){
        $this->gao=$this->fei;
        die($this->gao);
    }
}
class musca{
    public $ding;
    public $dong;
    public function __wakeup(){
        return $this->ding->dong;
    }
}
class milaoshu{
    public $v;
    public function __tostring(){
        echo"misca~musca~milaoshu~~~";
        include($this->v);
    }
}
unserialize($_GET["fotsec"]);