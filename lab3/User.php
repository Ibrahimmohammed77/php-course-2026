<?php 

include_once "function.php";
class User{
    public function index(){
        printSingle("welcome in index" );
    }

    public static function get(){

        printSingle("get");
    }
}