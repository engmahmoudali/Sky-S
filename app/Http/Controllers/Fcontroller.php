<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Fcontroller extends Controller
{
    public function fcweb()
    {
    	
    	$data['name'] = 'Mahmoud Ali';
    	$data['age']  = '56';
    	$data ['it'] = 'All Here Listen Me I Am Eng Mahmoud Ali';
    	return view('welcome' , $data);
    }
}
