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
        return view('dashboard.members.member-table',['member'=>$member]);
        
    }
    public function edit(User $member, $id)
    {
        $member = $member->find($id);
            return view('dashboard.members.edit',
                [
                    'mbr'=>$member,
                    'id'=>$id,
                ] );
        
    }

    public function avataredit(Request $request, User $member, $id)
    {
        $member = $users->find($id);
        $member->update($request->all());
        return redirect('dashboard/book')->with('pesan', 'Data Berhasil Diubah');
        
    }
}
