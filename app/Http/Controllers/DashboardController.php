<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use App\Comment;

use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    //
    public function index(Request $request)
    {
    	
    	$recentPost = DB:: table('posts')
                ->get();
        $recentComment = DB::table('comments')
                ->join('users','users.user_id','=','comments.user_id')
    			->get();
        //$recentComment = Comment::all();
		$usrData = DB::table('users')
    			->where('user_email','=',$request->session()->get('user')->user_email)
    			->get();

    	$totalUsr = User::all();
    	return View('dashboard.index',compact('recentPost','recentComment','usrData','totalUsr'));
    }
    public function profile(Request $request)
    {
    	$usrData = DB::table('users')
    			->where('user_email','=',$request->session()->get('user')->user_email)
    			->first();
    			//dd($usrData);

    	return View('dashboard.profile',compact('usrData'));
    }
    public function update(ProfileUpdateRequest $request)
    {
        $file = $request->file('file');
        if (isset($file)) {
            $data = [
            'username' => $request->username,
            'password' => $request->password,
            'user_email' => $request->email,
            'phone' => $request->phone,
            'user_pic' => $file->getClientOriginalName()
            ];
            $file->move('assets/images',$file->getClientOriginalName());
            DB::table('users')
            ->where('user_id', $request->id)
            ->update($data);

            return redirect()->route('dashboard.profile');
        }
        $data = [
            'username' => $request->username,
            'password' => $request->password,
            'user_email' => $request->email,
            'phone' => $request->phone,
            
            ];
        
        
        DB::table('users')
            ->where('user_id', $request->id)
            ->update($data);

        return redirect()->route('dashboard.profile');
    }
    public function post(Request $request)
    {
    	$usrData = DB::table('users')
    			->where('user_email','=',$request->session()->get('user')->user_email)
    			->first();
			//dd($usrData->user_id);
		/*$usrPost = DB::table('posts')
				
    			->join('categories',  'posts.category_id', '=', 'categories.category_id')
				->where('user_id','=',$usrData->user_id)
				->get();*/
				
        $usrPost = Post::where('user_id','=',$usrData->user_id)
                ->get();
        //dd($usrPost);

		return View('dashboard.post',compact('usrPost','usrData'));		
    }


    public function create(Request $request)
    {
    	$usrData = DB::table('users')
    			->where('user_email','=',$request->session()->get('user')->user_email)
    			->first();
    	$catItem = DB::table('categories')
    			->get();
    	//dd(date("Y-m-d"));
    	return View('dashboard.create',compact('usrData','catItem'));
    }
    public function store(CreatePostRequest $request)
    {
        $file = $request->file('file');
    	$usrData = DB::table('users')
    			->where('user_email','=',$request->session()->get('user')->user_email)
    			->first();
        if (isset($file)) {

            $data = [
            'post_title' => $request->title,
            'post_description' => $request->desc,
            'post_description' => $request->desc,
            'post_pic' => $file->getClientOriginalName(),
            'post_date' => date("Y-m-d"),
            'user_id' => $usrData->user_id,
            'category_id' => $request->catid
            
            ];

            //$data = $request->all();
            $file->move('assets/images',$file->getClientOriginalName());
            DB::table('posts')
                ->insert($data);

            /*$user = new User();
            $user->username => $request->username;
            $user->password => $request->password;
            $user->user_email => $request->email;
            $user->phone => $request->phone;
            $user->save();*/


            $request->session()->flash('publishMsg','Successfully Published Click Here To See The Post');
            return redirect()->route('post.create');
            
        }
        $data = [
            'post_title' => $request->title,
            'post_description' => $request->desc,
            'post_date' => date("Y-m-d"),
            'user_id' => $usrData->user_id,
            'category_id' => $request->catid
            
        ];

        //$data = $request->all();
        
        DB::table('posts')
            ->insert($data);

        /*$user = new User();
        $user->username => $request->username;
        $user->password => $request->password;
        $user->user_email => $request->email;
        $user->phone => $request->phone;
        $user->save();*/


        $request->session()->flash('publishMsg','Successfully Published Click Here To See The Post');
        return redirect()->route('post.create');
    }
    public function edit(Request $request,$id)
    {
    	//query builder
        /*$post = DB::table('posts')
            ->where('post_id','=', $id)
            ->first();*/
        $usrData = DB::table('users')
    			->where('user_email','=',$request->session()->get('user')->user_email)
    			->first();
    	$catItem = DB::table('categories')
    			->get();
    	//Eloquent
        $post = Post::find($id);

        //dd($post);
        return view('dashboard.edit',compact('usrData','post','catItem'));
    }
    public function postUpdate(CreatePostRequest $request,$id)
    {
        $file = $request->file('file');
        

        if (isset($file)) {

            $data = [
            'post_id' => $request->pid,
            'post_title' => $request->title,
            'post_description' => $request->desc,
            'post_description' => $request->desc,
            'post_pic' => $file->getClientOriginalName(),
            'post_date' => date("Y-m-d"),
            'user_id' => $request->uid,
            'category_id' => $request->catid
            
            ];

            //$data = $request->all();
            $file->move('assets/images',$file->getClientOriginalName());

            DB::table('posts')
                ->where('post_id', $request->pid)
                ->update($data);
            
            //return redirect()->route('post.list');
            return redirect()->action('DashboardController@edit', ['id' => $id]);
        }

        $data = [
            'post_id' => $request->pid,
            'post_title' => $request->title,
            'post_description' => $request->desc,
            'post_date' => date("Y-m-d"),
            'user_id' => $request->uid,
            'category_id' => $request->catid
            
        ];
        //dd($request->pid);
        DB::table('posts')
            ->where('post_id', $request->pid)
            ->update($data);
        
        //return redirect()->route('post.list');
        return redirect()->action('DashboardController@edit', ['id' => $id]);
    }
    public function delete(Request $request,$id)
    {
    	//query builder
        /*$post = DB::table('posts')
            ->where('post_id','=', $id)
            ->first();*/
        $usrData = DB::table('users')
    			->where('user_email','=',$request->session()->get('user')->user_email)
    			->first();
    	$catItem = DB::table('categories')
    			->get();
    	//Eloquent
        $post = Post::find($id);

        //dd($post);
        return view('dashboard.delete',compact('usrData','post','catItem'));
    }
    public function destroy(Request $request, $id)
    {
        DB::table('posts')
            ->where('post_id', $request->pid)
            ->delete();

        return redirect()->route('post.list');
    }
    public function search(Request $request)
    {
        $usrData = DB::table('users')
                ->where('user_email','=',$request->session()->get('user')->user_email)
                ->first();
        $usrPost = Post::where('post_title','like','%'.$request->search.'%')
            ->orWhere('post_description','like','%'.$request->search.'%')
            ->get();

            

        return View('dashboard.post',compact('usrPost','usrData'));
    }

}
