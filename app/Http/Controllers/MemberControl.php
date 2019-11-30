<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


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
    public function register(Request $request)
        {
            $this->validator($request->all());
            $this->create($request->all());
            return redirect('dashboard/member');
        }

    protected function create(array $data)
        {
            return User::create([
                'name'      => $data['name'],
                'username'  => $data['username'],
                'email'     => $data['email'],
                'password'  => Hash::make($data['password']),
                'position'  => $data['position'],
            ]);
        }
    
        protected function validator(array $data)
        {
            return Validator::make($data, 
            [
            
                'name'      => ['required', 'string', 'max:255'],
                'username'  => ['required', 'string', 'max:20', 'unique:users'],
                'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password'  => ['required', 'string', 'min:8'],
                'position'  => ['required', 'string'],
            
            ]);
        }
    
    public function destroy(User $member, $id)
        {   
            $member = $member->find($id);
            $member->delete();
            return redirect('dashboard/member')->with('pesan', 'Data Berhasil Dihapus');
        }
     
    
}
