<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(){
    	$users = [
    		['fname'=>'علی', 'lname'=>'محمّدی', 'age'=>26 ],
			['fname'=>'رسول', 'lname'=>'زمانی', 'age'=>25 ],
			['fname'=>'محمّد', 'lname'=>'ساکت', 'age'=>24 ],
			['fname'=>'زهرا', 'lname'=>'ملّی', 'age'=>23 ],
			['fname'=>'زهره', 'lname'=>'سیفی', 'age'=>22 ],
			['fname'=>'اضافی', 'lname'=>'فامیلیش', 'age'=>10]
		];
    	$data = [ 'x'=>$users ];
    	return view( 'show', $data );
	}
}
