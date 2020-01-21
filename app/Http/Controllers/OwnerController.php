<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Item;
use App\Category;
use App\User;
use App\Restaurant;
use Image;
use DB;

class OwnerController extends Controller
{
    public function owner()
    {
        $user = session()->all();
        $id = $user['userid'];
        $items = DB::table('items')
                ->where('restaurant_id', '=', $id)
                ->count();
        $categories = DB::table('categories')
                ->where('restaurant_id', '=', $id)
                ->count();
                // dd($items);
        // dd($user);
        $about = DB::table('restaurants')
                ->where('restaurant_id', '=', $id)
                ->first();
        return view('restaurant.pages.owner', ['user' => $user,'items' => $items, 'categories' => $categories, 'about' => $about]);
    }

    public function userdetails(Request $request)
    {
        // dd($request);
        $validatedData = $request -> validate([
            'name' => 'required'
        ]);

        $user = session()->all();
        // dd($user);

        $obj = new Restaurant();
        $obj -> owner_name = $request-> name;
        $obj -> restaurant_id = $user['userid'];
        // dd($obj);

      
            // dd('hit');
            $images = request()->file('image');
        //   dd($images);
            $originalimage = Image::make($images);

            $originalpath = public_path().'/restaurant/uploads/restaurant/images/';
            $thumbnailpath = public_path().'/restaurant/uploads/restaurant/thumbnail/';

            $name_with_extension = $images -> getClientOriginalName();
            $only_extension = $images -> getClientOriginalExtension();
            $upload_image_name = time().'.'.$only_extension;

            $originalimage -> save($originalpath.$upload_image_name);

            $thumbnailimage = Image::make($images);
            $thumbnailimage -> resize(150,150);
            $thumbnailimage -> save($thumbnailpath.$upload_image_name);

            $obj -> image = $upload_image_name;
          
        //   dd($obj);
          $obj -> save();
          return back()->with('success', 'Your category has been successfully added');
        
    }

    public function order()
    {
        return view ('restaurant.pages.orders');
    }

    public function profile()
    {
        // return view('restaurant.pages.profile');
        $id = session() -> get('userid');
        // dd($id);
        $role = session() -> get('userrole');
        $about = DB::table('users')
                ->where('id', '=', $id)
                ->first();
                // dd($about);
        $about1 = DB::table('restaurants')
                ->where('restaurant_id', '=', $id)
                ->first();
                // ->get();
                // dd($about1);
        return view('restaurant.pages.profile1',['user' => $about, 'user1' => $about1]);
    }
    

    public function category()
    {
        $id = session() -> get('userid');

        $categories = DB::table('categories')
                    ->where('restaurant_id', '=', $id)
                    ->get();
                    // dd($categories);

        $total = DB::table('categories')
                ->where('restaurant_id', '=', $id)
                ->count();
        // $items =  DB::table('items')
        //         ->join('categories','items.category_id','categories.id')
        //         ->select('items.*', 'categories.id AS category_id','categories.name AS category_name','categories.restaurant_id AS category_restaurant_id')
        //         ->where('items.restaurant_id', '=', $id)
        //         ->DISTINCT()
        //         ->get();
        //dd($items);        
        // $category_id = $categories['id'];
        // dd($categories['id']);

        // $food = DB::table('items')
        //         ->where('restaurant_id', '=', $id)
        //         ->where('category_id', '=', $id)
        //         ->count();

        return view('restaurant.pages.category',[
            'category' => $categories, 
            'total' => $total
            ]);
    }

    public function addcategory(Request $request)
    {   
        $validatedData = $request -> validate([
            'name' => 'required'
        ]);

        $user = session()->all();
        // dd($user);

        $obj = new Category();
        $obj -> name = $request-> name;
        $obj -> restaurant_id = $user['userid'] ;
        $obj -> save();
        return back()->with('success', 'Your category has been successfully added');
    }

    public function menu()
    {
        $user = session()->all();
        // dd($user);
        $user_id = $user['userid'];
        // dd($user_id);
        // $items = Item::all();
        $items = DB::table('items')
                    ->select(DB::raw('*'))
                    ->where('restaurant_id', '=', $user_id)
                    ->get();
        
        return view('restaurant.pages.menu', ['user' => $user, 'items' => $items]);
    }

    public function add()
    {
        $user = session()->all();
        $user_id = $user['userid'];
        $categories = DB::table('categories')
                    ->where('restaurant_id', '=', $user_id)
                    ->get();
        return view('restaurant.pages.addmenu', ['user' => $user, 'categories' => $categories]);
    }

    public function addmenu(Request $request)
    {
        $validatedData = $request -> validate([
            'image' => 'required',
            'name' => 'required|regex:/(^[A-Za-z ]+$)+/',
            'category_id' => 'required',
            'price' => 'required|numeric',
            'details' => 'required|max:255',
            'available' =>  'required',
        ]);
        session(['created_by' => 'enan', 'updated_by' => 'enan']);
        $user = session()->all();

        // dd($user);
        $obj = new Item();
        $obj -> name = $request-> name;
        $obj -> price = $request-> price;
        $obj -> details = $request-> details;
        $obj -> status = $request-> available;
        $obj -> category_id = $request-> category_id;
        $obj -> restaurant_id = $user['userid'] ;
        $obj -> created_by = $user['created_by'] ;
        $obj -> updated_by = $user['updated_by'] ;


        if ($request->hasFile('image')) {
          $images = request()->file('image');
          foreach ($images as $raw_image) {
              $originalimage = Image::make($raw_image);

              $originalpath = public_path().'/restaurant/uploads/items/images/';
              $thumbnailpath = public_path().'/restaurant/uploads/items/thumbnail/';

              $name_with_extension = $raw_image -> getClientOriginalName();
              $only_extension = $raw_image -> getClientOriginalExtension();
              $upload_image_name = time().'.'.$only_extension;

              $originalimage -> save($originalpath.$upload_image_name);

              $thumbnailimage = Image::make($raw_image);
              $thumbnailimage -> resize(150,150);
              $thumbnailimage -> save($thumbnailpath.$upload_image_name);

              $obj -> image = $upload_image_name;
          }
          $obj -> save();
          return back()->with('success', 'Your Product has been successfully added');
        }
    }

    public function update(Request $req, $id)
    {
        $obj = Restaurant::find($id);
        $obj1 = User::find($id);
        $obj -> owner_name = $req -> name;
        $obj -> address = $req -> address;
        $obj1 -> contact = $req -> contact;
        // dd($req);
        if($obj->save() and $obj1->save())
        {
            return Redirect()->to('profile1');
        }
    }

    public function edit($id, Request $request)
    {
        $validatedData = $request -> validate([
            'name' => 'required'
        ]);

        $obj = Category::find($id);
        $obj -> name = $request -> name;
        if($obj->save())
        {
            return Redirect()->to('category');
        }
    }

    public function delete($id)
    {
        $obj = Category::find($id);
        if($obj->delete())
        {
            return Redirect()->to('category');
        }
    }

    public function editmenu($id, Request $request)
    {
        // dd($id);
        $validatedData = $request -> validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'status' => 'required',
            'details' => 'required'
        ]);

        $obj = Item::find($id);
        $obj -> name = $request-> name;
        $obj -> price = $request-> price;
        $obj -> details = $request-> details;
        $obj -> status = $request-> status;
        if($obj->save())
        {
            return Redirect()->to('menu');
        }
    }

    public function deletemenu($id)
    {
        $obj = Item::find($id);
        if($obj->delete())
        {
            return Redirect()->to('menu');
        }
    }

}
