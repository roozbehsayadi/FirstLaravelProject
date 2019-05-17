<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function add( Request $request ) {
//		dd( $request->all() );
		dump( $request->input( 'title' ) );
		dump( $request->input( 'body' ) );
		dump( $request->input( 'test' ) );

		$title = $request->input( 'title' );
		$body = $request->input( 'body' );

	}
}
