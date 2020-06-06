<?php


class Pages extends Controller
{
public  function __construct()
{

}
public function  index(){

    $data=['title'=>'Ahmed Habeeb'];

$this->view('pages/index',$data);
}

public function about() {
    $data=['title'=>'about me'];

$this->view('pages/about',$data);

}


}