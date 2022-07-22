<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user($id){
        return view('user', ['user_id' => $id]);
    }
}
