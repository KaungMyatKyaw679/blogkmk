<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create(){
        return view('auth.register'); 
    }
    public function store(){
        //validation
        $fromData = request()->validate([
            'name'=> ['required','min:3','max:255'],
            'email'=>['required','email',Rule::unique('users','email')],
            'username'=>['required','min:3',Rule::unique('users','username')],
            'password'=>['required','min:8'],
        ]);

        $user =User::create($fromData);
        
        \auth()->login($user);
        return redirect('/')->with('success','Welcome ,'.$user->name);
    }
    public function login(){
        return \view('auth.login');
    }
    public function post_login(){
        // validation
        $fromData=request()->validate([
            'email'=>['required','email','max:255',Rule::exists('users','email')],
            'password'=>['required','min:8','max:255'],
        ],[
            'email.required'=>'We need your email address'
        ]);
        
        if(auth()->attempt($fromData)){
            if(\auth()->user()->is_admin){
                return \redirect('/admin/blogs')->with('success','Welcome Back');
            }else{
                return \redirect('/')->with('success','Welcome Back');
            }
            
        }else{
            return \redirect()->back()->withErrors([
                'email'=>'User credentials Wrong'
            ]);
        }
            // if user credentials corect -> redirect home
            // if user credentials fail -> redirect back to form with error
    }
    public function logout(){
        \auth()->logout();
        return redirect('/')->with('success','Now you are not logged in!');
    }
    
}
