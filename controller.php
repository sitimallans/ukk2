<?php

class controller{
    public function view($view, $data=[]){
        require_once'../admin/views/'.$views.'.php';
    }
    