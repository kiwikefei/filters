<?php

namespace App\Http\Controllers;

use App\User;
use App\Filters\UserFilter;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(UserFilter $filter)
    {
        return User::filter($filter)->get();
    }
}
