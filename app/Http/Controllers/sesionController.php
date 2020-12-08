<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class sesionController extends Controller
{
    public function index(){

        return view('welcome');
    }

    public function sesion() {
        $user = Auth::user();
        $item = Item::find($user);
        // return Inertia::render('Dashboard' , ['item' => $item, 'user' => $user]);
        return $item;
        
    }
}
