<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        dd('UserController@index');
    }

    public function show($id)
    {
        dd('UserController@index', $id);
    }
}
