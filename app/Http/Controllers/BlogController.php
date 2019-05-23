<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\Blog;

class BlogController extends Controller
{
    public function add( Request $request ) {
//		dd( $request->all() );
		// dump( $request->input( 'title' ) );
		// dump( $request->input( 'body' ) );
		// dump( $request->input( 'test' ) );

		$title = $request->input( 'title' );
		$body = $request->input( 'body' );
		$blog = new Blog;
		$blog->title = $title;
		$blog->body = $body;
		$blog->save();

		return redirect( '/blogslist' );
		// $time = Carbon::now()->toDateTimeString();
		// $data = array('title'=>$title,'body'=>$body,'created_at'=>$time,'updated_at'=>$time);
		// $id = DB::table('blogs')->insertGetID($data);

		// return redirect()->action('BlogController@list' );
		// return view( "contact" );

	}

	public function edit( Request $request, $id ) {

		$title = $request->input( 'title' );
		$body = $request->input( 'body' );
		$blog = Blog::find( $id );
		$blog->title = $title;
		$blog->body = $body;
		$blog->save();

		return redirect( '/blogslist' );

	}

	public function list() {
		$blogs = DB::table('blogs')->select('id', 'title' )->get();
		$data = [ 'x'=>$blogs ];
    	return view( 'blogslist' )->with( array('x'=>$blogs) );
	}

	public function showContent( $id ) {
		$blog = DB::table('blogs')->where('id', $id );
		$data = [ 'x'=>$blog ];
		return view ('blogcontent', $data );
	}

}
