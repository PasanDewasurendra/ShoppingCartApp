<?php namespace App\Controllers;

class MyController extends BaseController{
    public function index(){
        return view('pages/index');
    }
}