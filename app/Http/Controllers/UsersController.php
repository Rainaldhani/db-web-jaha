<?php

namespace App\Http\Controllers;
use App\Models\User;

class UsersController extends Controller
{
    public function index() {
        $users = User::all();
        return view("main_page", compact("users"));
    }
}