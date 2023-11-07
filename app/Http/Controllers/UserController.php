<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $current_user_id = Auth::id();
        $user = User::where('id', $current_user_id)->first();
        
        return view( view: 'user.index', data:[
            'user' => $user,
        ]);
        
    }
}
