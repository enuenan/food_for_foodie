<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consumer;
use App\Restaurant;
use App\User;
use Session;
use DB;

class ConsumerController extends Controller
{
    public function foodie(Request $request)
    {
        $items = DB::table('items')
                ->count();
        $categories = DB::table('categories')
                ->count();
        $data = $request -> session() -> all();
        // dd($data->username);
        // $image = $data['userimage'];
        $id = $data['userid'];
        $images = DB::select('select image from consumers where id = :id', ['id' => $id]);
        return view('consumer.pages.foodie',['data'=>$data, 'image' => $images, 'items' => $items, 'categories' => $categories]);
    }

    public function restaurant()
    {
        $restaurant = DB::table('users')
                    ->where('role', '=', 'restaurant')
                    ->get();
        // $restaurant =  DB::table('users')
        //             ->join('restaurants','users.id','restaurants.restaurant_id')
        //             ->select('users.name', 'users.email', 'users.contact', 'restaurants.owner_name', 'restaurants.address')
        //             ->get();
        // dd($restaurant);
        return view('consumer.pages.restaurant',['restaurant' => $restaurant]);
    }

    public function restaurantabout($id)
    {
        $items = DB::table('items')
                    ->select(DB::raw('*'))
                    ->where('restaurant_id', '=', $id)
                    ->get();
        // dd($items);
        $restaurant = DB::table('users')
                    ->select(DB::raw('name'))
                    ->where('id', '=', $id)
                    ->first();
                    // dd($restaurant);
        return view('consumer.pages.restaurantabout',['items' => $items, 'restaurant' => $restaurant]);
    }

    public function profile()
    {
        $id = session() -> get('userid');
        $role = session() -> get('userrole');
        $about = DB::table('users')
                ->where('id', '=', $id)
                ->first();
                // dd($about);
        // $about1 = DB::table('restaurants')
        //         ->where('restaurant_id', '=', $id)
        //         ->first();
                // dd($about1);
        return view('consumer.pages.profile1',['user' => $about]);
    }

    public function update($id, Request $request)
    {
        $obj = User::find($id);
        $obj -> name = $request -> name;
        $obj -> address = $request -> address;
        $obj -> contact = $request -> contact;
        $obj -> email = $request -> email;
        // dd($request);
        if($obj->save())
        {
            $request -> session() -> put('username', $obj->name);
            $request -> session() -> put('usercontact', $obj->contact);
            $request -> session() -> put('useraddress', $obj->address);
            $request -> session() -> put('useremail', $obj->email);
            return Redirect()->to('userprofile');
        }
    }
}
