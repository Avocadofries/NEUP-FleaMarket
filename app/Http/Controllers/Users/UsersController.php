<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\users;

class UsersController extends Controller
{
    //
    public function index()
    {
        return view('Users')->withPages(users::all());
    }
}
