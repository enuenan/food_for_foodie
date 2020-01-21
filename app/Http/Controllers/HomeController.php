<?php

namespace App\Http\Controllers;

use App\User;
use App\Consumer;
use App\Restaurant;
use Image;
use Illuminate\Http\Request;
use Session;
use DB;

class HomeController extends Controller
{
    public function welcome()
    {
        if(session()->get('userrole')==='restaurant')
        {
            return redirect()->to('owner');
        }
        elseif(session()->get('userrole')==='foodie')
        {
            return redirect()->to('foodie');
        }
        else
        {
            $restaurant = User::where('role','restaurant')->count();
            $foodie = User::where('role','foodie')->count();
            // dd($restaurant);
            return view('website.pages.welcome',['restaurant' => $restaurant, 'foodie' => $foodie]);
        }
        
    }

    public function login()
    {
        return view('website.pages.login');
    }

    public function signup()
    {
        return view('website.pages.signup');
    }

    public function loginstore(Request $request)
    {
        $validatedData = $request -> validate([
            'email'   =>  'required|email|',
            'password' => 'required|min:8'
        ]);

        $email = $request -> email;
        $password = md5($request -> password);
        $user = User::where('email', '=', $email)
                    ->first();
        $role = $user['role'];
        // dd($role);
        if($role==='foodie')
        {
            $foodie = User::where('email', '=', $email)
                        ->where('password', '=', $password)
                        ->where('role', '=', $role)
                        ->first();
            
            $request -> session() -> put('userid', $foodie->id);
            $request -> session() -> put('username', $foodie->name);
            $request -> session() -> put('userrole', $foodie->role);
            $request -> session() -> put('usercontact', $foodie->contact);
            $request -> session() -> put('useraddress', $foodie->address);
            $request -> session() -> put('useremail', $foodie->email);
            return Redirect() -> to('foodie');
        }

        elseif($role==='restaurant')
        {
            $restaurant = User::where('email', '=', $email)
                        ->where('password', '=', $password)
                        ->where('role', '=', $role)
                        ->first();
            
            $request -> session() -> put('userid', $restaurant->id);
            $request -> session() -> put('username', $restaurant->name);
            $request -> session() -> put('userrole', $restaurant->role);
            $request -> session() -> put('usercontact', $restaurant->contact);
            $request -> session() -> put('useraddress', $restaurant->address);
            $request -> session() -> put('useremail', $restaurant->email);
            return Redirect() -> to('owner');
        }
        else {
            return redirect()->to('unauthorized2');
        }
    }

    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request -> validate([
            'name'    =>  'required|regex:/(^[A-Za-z ]+$)+/',
            'user'    =>  'required|not_in:0',
            'email'   =>  'required|email|unique:users,email',
            'contact' =>  'required|unique:users,contact',
            'password' => 'required|min:8',
            'confirm_password' => 'required|min:8|required_with:password|same:password'
        ]);

        $obj = new User();
        $obj -> name = $request-> name;
        $obj -> role = $request-> user;
        $obj -> email = $request-> email;
        $obj -> address = $request-> address;
        $obj -> contact = $request-> contact;
        $obj -> password = md5($request-> password);
        $save = $obj->save();
        
        if ($save) 
        {
            $email = $request -> email;
            $password = md5($request -> password);
            $role = $request-> user;
            
            if($role==='foodie')
            {
                $foodie = User::where('email', '=', $email)
                            ->where('password', '=', $password)
                            ->where('role', '=', $role)
                            ->first();
                
                $request -> session() -> put('userid', $foodie->id);
                $request -> session() -> put('username', $foodie->name);
                $request -> session() -> put('userrole', $foodie->role);
                $request -> session() -> put('usercontact', $foodie->contact);
                $request -> session() -> put('useraddress', $foodie->address);
                $request -> session() -> put('useremail', $foodie->email);
                return Redirect() -> to('foodie');
            }

            if($role==='restaurant')
            {
                $restaurant = User::where('email', '=', $email)
                            ->where('password', '=', $password)
                            ->where('role', '=', $role)
                            ->first();
                
                $request -> session() -> put('userid', $restaurant->id);
                $request -> session() -> put('username', $restaurant->name);
                $request -> session() -> put('userrole', $restaurant->role);
                $request -> session() -> put('usercontact', $restaurant->contact);
                $request -> session() -> put('useraddress', $restaurant->address);
                $request -> session() -> put('useremail', $restaurant->email);
                return Redirect() -> to('owner');
            }
        }
    }

    public function logout()
    {
        session::flush();
        return redirect() -> to('/');
    }

    public function consumer()
    {
        return view('consumer.pages.home');
    }
}
