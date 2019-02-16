<?php

namespace App\Http\Controllers;

use App\Item;
use App\User;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signup(Request $request)
    {
        $userName = $request->input('user_name', '');
        $password = $request->input('user_password', '');
        $nickName = $request->input('user_nickname', '');
        $designation = $request->input('user_designation', '');
        $user_id = $request->input('user_id_no', '');
        $user_phone = $request->input('user_phone');
        if (User::where('phone', '=', $user_phone)->first() != null) {
            return "exists";
        }
        $user = new User();
        $user->name = $userName;
        $user->password = $password;
        $user->nickname = $nickName;
        $user->designation = $designation;
        $user->id_no = $user_id;
        $user->phone = $user_phone;
        $user->save();
        return $user;
    }

    public function login(Request $request)
    {
        $userPhone = $request->input('user_phone', '');
        $password = $request->input('user_password', '');
        $user = User::where('phone', '=', $userPhone)->where('password', '=', $password)->first();
        if ($user == null) {
            return "failed";
        } else {
            return $user;
        }
    }

    public function getphoto($name)
    {
        $storagePath = Storage::get('photos/'. $name);
       // return $storagePath;

        return response($storagePath, 200)->header('Content-Type', 'image/jpeg');
    }

    public function getallusers()
    {
        return User::orderBy('priority')->get();
    }

    public function getItems()
    {
        return Item::all();
    }
}