<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class ContactPageController extends Controller {

    public function show(){
       return view('contact');
    }
	
}