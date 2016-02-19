<?php
class Explode{
    public $array = array();

    public function arrExplode ($array){
        for ($i=0;$i<count($array);$i++) {
            $this->array[$i] = explode(":", $array[$i]);
        }
    }
}