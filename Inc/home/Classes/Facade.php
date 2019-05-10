<?php
namespace Inc\home\Classes;
use Inc\home\Classes\Core;

class Facade{
private $obj;

public function __construct(){

}

public function Generate($val){

    $this->obj->Generate($val);
}

public function Table($val){
$this->obj->get_cols($val);
$this->obj->get_col_name();
return $this;
}

public function DB($val){
    $this->obj = new Core($val);
    return $this;
}

public function Data($arr = null){
    $arr = array($arr);
    $this->obj->setDataType($arr);
    return $this;
}



}









?>