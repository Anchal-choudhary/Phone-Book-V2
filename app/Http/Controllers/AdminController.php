<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vcard;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard(){
        $data['count_vcards'] = Vcard::all()->count();
        $data['count_users'] = User::all()->count();
        return view("admin.dashboard",$data);
    }
}
