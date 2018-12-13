<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Item;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {        
        return view('home');
    }

    public function user_index()
    {
        $users = User::all();
        return view('users')->with('users', $users);
    }

    public function user_create(Request $request) {

        if(Input::get('password') == Input::get('retype_password')) {
            $createUser = [
                'name' => Input::get('name'),
                'sector' => Input::get('sector'),
                'designation' => Input::get('designation'),
                'id_no' => Input::get('id_no'),
                'phone' => Input::get('phone'),
                'password' => Input::get('password'),
            ];

            $response = User::create($createUser);

            if($response) {
                return redirect()->back()->with('success','User created!');
            }
        } else {
            return redirect()->back()->with('fail','Password mismatch!');
        }
    }

    public function user_update(Request $request, $userid) {

        $updateUser = [
            'name' => Input::get('name'),
            'sector' => Input::get('sector'),
            'designation' => Input::get('designation'),
            'id_no' => Input::get('id_no'),
            'phone' => Input::get('phone'),
        ];

        $response = User::where('id', $userid)->update($updateUser);

        if($response) {
            return redirect()->back()->with('success','User info updated!');
        }
    }

    public function user_delete($userid) {

        $response = User::where('id', $userid)->delete();

        if($response) {
            return redirect()->back()->with('fail','User deleted!');
        }
    }

    public function item_index() {
        $items = Item::orderBy('id', 'desc')->get();
        return view('items')->with('items', $items);
    }

    public function item_create(Request $request) {

        $createItem = [
            'heading' => Input::get('heading'),
            'details' => Input::get('details'),
            'user_id' => Input::get('user_id'),
        ];

        $response = Item::create($createItem);

        if($response) {
            return redirect()->back()->with('success','Item created!');
        }
    }

    public function item_update(Request $request, $itemid) {

        $updateItem = [
            'heading' => Input::get('heading'),
            'details' => Input::get('details'),
        ];

        $response = Item::where('id', $itemid)->update($updateItem);

        if($response) {
            return redirect()->back()->with('success','Item updated!');
        }
    }

    public function item_delete($itemid) {

        $response = Item::where('id', $itemid)->delete();

        if($response) {
            return redirect()->back()->with('fail','Item deleted!');
        }
    }
}