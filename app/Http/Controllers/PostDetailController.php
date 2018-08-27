<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddCommentRequest;
use Illuminate\Support\Facades\DB;
class PostDetailController extends Controller
{
    //
    public function index(Request $request,$id)
    {
    	$postlist = DB::table('posts')
    		->join('users',  'posts.user_id', '=', 'users.user_id')
    		->join('categories',  'posts.category_id', '=', 'categories.category_id')
    		->get();

    	$detailpost = DB::table('posts')
    	->join('users',  'posts.user_id', '=', 'users.user_id')
    	->join('categories',  'posts.category_id', '=', 'categories.category_id')
    	->where('posts.post_id',$id)
    	->first();
    	//dd(['detailpost'=>$detailpost]);

        $commentDetail = DB::table('comments')
            ->join('users',  'comments.user_id', '=', 'users.user_id')
            ->join('posts',  'comments.post_id', '=', 'posts.post_id')
            ->where('comments.post_id',$id)
            ->get();
           // dd($commentDetail);
        if($request->session()->has('user'))
        {
            $usrData = DB::table('users')
                ->where('user_email','=',$request->session()->get('user')->user_email)
                ->first();
            //dd(compact('usrData'));
            return view('home.postdetail',compact('detailpost','postlist','commentDetail','usrData'));
           
        }
        else
        {
            $usrData = array();
            return view('home.postdetail',compact('detailpost','postlist','commentDetail','usrData'));
        }

    	
    }
    public function addComment(AddCommentRequest $request,$id)
    {
        //dd($id);
        $data = [
            'comment_detail' => $request->comment,
            'comment_date' => date("Y-m-d"),
            'user_id' => $request->uid,
            'post_id' => $request->pid
            
        ];
        $id = $id;
        DB::table('comments')
            ->insert($data);
        
        return redirect()->action('PostDetailController@index', ['id' => $id]);
    

    }
    public function delComment(Request $request,$commid,$id)
    {
        DB::table('comments')
            ->where('comment_id', $commid)
            ->delete();
        
        return redirect()->action('PostDetailController@index', ['id' => $id]);
    }

}
