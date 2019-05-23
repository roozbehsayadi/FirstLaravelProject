<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class BlogController extends Controller
{
    public function add( Request $request ) {
//		dd( $request->all() );
		// dump( $request->input( 'title' ) );
		// dump( $request->input( 'body' ) );
		// dump( $request->input( 'test' ) );

		$title = $request->input( 'title' );
		$body = $request->input( 'body' );
		$time = Carbon::now()->toDateTimeString();
		$data = array('title'=>$title,'body'=>$body,'created_at'=>$time,'updated_at'=>$time);
		$id = DB::table('blogs')->insertGetID($data);

		return \Redirect::route( '/blogslist', ['id'=>$id,'title'->$title] );
		// return view( "contact" );

	}

	public function list() {
		$blogs = DB::table('blogs')->select('id', 'title' );
		$data = [ 'x'=>$blogs ];
		return view( 'blogslist', $data );
	}

}
