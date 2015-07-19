<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
	public function about(){
	    $persons = ['nati' , 'yossi' , 'lior' , 'somhoan'];
		return view('pages.about', compact('persons'));
	}

	public function contact(){
	
		return view('pages.contact');
	}


}
