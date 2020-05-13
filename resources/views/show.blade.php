@extends('layout')





<?php

foreach ($user as $name){
    echo $name->username;
    echo $name->file_id;
}


?>

