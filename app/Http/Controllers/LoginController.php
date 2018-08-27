<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\User;
class LoginController extends Controller
{
    //
    public function index(Request $request)
    {
        if($request->session()->has('user'))
        {
            
            return redirect()->route('dashboard');
           
        }
        else
        {
            return view('login.index');
        }
    	
    }

    public function verify(LoginRequest $request)
    {
        /*raw query*/
        // $sql = "SELECT * FROM users WHERE username='$request->username' AND password='$request->password'";
        // $result = DB::select($sql);
        /*query builder*/
        // $user = DB::table('users')
        //     ->where('username', $request->username)
        //     ->where('password', $request->password)
        //     ->first();

        $findUser = new User();

        // dd($user::where('username', '=', $request->username)
        //     ->where('password', '=', $request->password)
        //     ->select('username', 'password')
        //     ->first());
        /*eloquent orm select by me*/
        // dd($findUser);
        $user = $findUser::where('user_email', '=', $request->email)
            ->where('password', '=', $request->password)
            ->select('user_email', 'password')
            ->first();
            //dd($user);
        if(isset($user))
        {   
            //dd(isset($user));
            $request->session()->put('user', $user);
            
            return redirect()->route('dashboard');
        }
        else
        {
            $request->session()->flash('message', 'Invalid username or password');
            return redirect()->route('login');
            //return $user;
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login');
    }
}
