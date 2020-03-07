<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	$name = "Home Page";
    	return view("home",compact("name"));
    }

    public function phpPage(){
    	$data = array(
    		"lesson1" => "this is php lesson1",
    		"lesson2" => "this is php lesson2",
    		"lesson3" => "this is php lesson3"
    	);
    	return view("php",compact("data"));
    }

    public function jsPage(){
    	$data = array(
    		"lesson1" => "this is JS lesson1",
    		"lesson2" => "this is JS lesson2",
    		"lesson3" => "this is JS lesson3"
    	);
    	return view("js",compact("data"));
    }
}


