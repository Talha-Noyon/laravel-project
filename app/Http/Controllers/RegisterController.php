<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Support\Facades\DB;
class RegisterController extends Controller
{
    //
    public function index(Request $request)
    {
    	return view('register.index');
    }
    public function register(RegistrationRequest $request)
    {
        $file = $request->file('file');
        
        $data = [
            'username' => $request->username,
            'password' => $request->password,
            'user_email' => $request->email,
            'phone' => $request->phone,
            'nid' => $request->nid,
            'user_pic' => $file->getClientOriginalName()
        ];

        //$data = $request->all();
        $file->move('assets/images',$file->getClientOriginalName());
        DB::table('users')
            ->insert($data);

        /*$user = new User();
        $user->username => $request->username;
        $user->password => $request->password;
        $user->user_email => $request->email;
        $user->phone => $request->phone;
        $user->save();*/

         $request->session()->flash('regMsg', 'Successfully Registered Click Here To LogIn');
         return redirect()->route('register');
    }
}
