<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MemberControl extends Controller
{
    public function index()
    {
        $member = User::all();
        // dd($member);
        return view('dashboard.member-table',['member'=>$member]);
        
    }
}
