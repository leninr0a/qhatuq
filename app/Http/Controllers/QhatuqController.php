<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Requests; 

class QhatuqController extends Controller{
	public function home(){
		return view('layouts.qhatuq',['name'=>'Cocodrilo']);
	}
}