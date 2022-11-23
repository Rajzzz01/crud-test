<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function createProfile()
    {
        return view('createProfile');
    }

    public function storeProfile(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required|max:25',
            'email' => 'required|email',
            'phone' => 'required|regex:/^(\+\d{1,3}[- ]?)(\d{3}[- ]?)(\d{3}[- ]?)?\d{4}$/',
        ]);

        $fileUrl = null;
        if ($request->file('profile_image')) {
            $fileName       = time().'.'.$request->file('profile_image')->extension();  
            $filePath       = $request->file('profile_image')->storeAs('uploads', $fileName, 'public');
            $fileUrl        = url('/').'/storage/'.$filePath;
        }

        $data = [
            'profile_image_url' => $fileUrl,
            'name'              => $request->name,
            'phone'             => $request->phone,
            'email'             => $request->email,
            'street_address'    => $request->street_address,
            'city'              => $request->city,
            'state'             => $request->state,
            'country'           => $request->country
        ];

        $user = User::create($data);
        return redirect()->route('userList');
    }

    public function userList()
    {
        $users = User::all();
        return view('list',compact('users'));
    }

    public function export() 
    {
        return Excel::download(new UsersExport, 'users.csv');
    }
}
