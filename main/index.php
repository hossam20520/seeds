<?php
require_once("../vendor/autoload.php");
use Inc\home\Classes\Core;
use Inc\home\Classes\Facade;
use Inc\connection\connection;


header("Content-Type: application/json; charset=UTF-8");




$obj = new Facade();

$obj->DB("inject")->table("users")->Generate(1);
//Data(["name"=>"name" , "email"=>"email" , "password"=> "passwords" , "timestamp"=> "num"])




// $c = new Core("inject");  //initilaoz core object
// $arr = array(["name"=>"name" , "email"=>"email" , "password"=> "passwords"]);
// $c->setDataType($arr);
// $c->get_cols('users');
// $c->get_col_name();
// //$c->seedData();
// $c->generate_set(5);
















?>