<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

function validName($name){

    return !empty($name); //return true if is not empty
}