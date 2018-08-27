<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    //
	public function index(Request $request)
    {
    	

    	//dd(User::all());

    	// if(!$request->session()->has('user'))
    	// {
    	// 	return redirect()->route('login');
    	// }
    	$postlist = DB::table('posts')
    		->join('users',  'posts.user_id', '=', 'users.user_id')
            ->join('categories',  'posts.category_id', '=', 'categories.category_id')
    		->get();
        $commentDetail = DB::table('comments')

            ->get();
        
            return view('home.index',compact('postlist','commentDetail'));
            //->with('postlist', $result); 
    }
    public function search(Request $request)
    {
        $commentDetail = DB::table('comments')

            ->get();
        $postlist = DB::table('posts')
            ->join('users',  'posts.user_id', '=', 'users.user_id')
            ->join('categories',  'posts.category_id', '=', 'categories.category_id')
            ->where('post_title','like','%'.$request->search.'%')
            ->orWhere('post_description','like','%'.$request->search.'%')
            ->get();
        return view('home.index',compact('postlist','commentDetail'));
    }

}
