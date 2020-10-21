<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class AdminInformationPageController extends Controller {

    public function show(){
       return view('admininformation');
    }
	
}