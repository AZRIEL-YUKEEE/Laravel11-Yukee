<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    //CRUD Logic
    public function loadAllUsers(){
        $all_users = User::all();
        return view('users', compact('all_users'));  // Make sure there are no quotes around the variable
    }
    

    public function loadAddUserForm(){
        return view('add-user');
    }

    public function AddUser(Request $request){
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required',
            'password' => 'required|confirmed|min:4|max:8',
            'brand' => 'required|string',  // Make sure brand is required
            'car_model' => 'required|string',
            'year' => 'required|integer',
        ]);
        
        try {
            $new_user = new User;
            $new_user->name = $request->full_name;
            $new_user->email = $request->email;
            $new_user->phone_number = $request->phone_number;
            $new_user->brand = $request->brand; // Set brand before saving
            $new_user->car_model = $request->car_model;
            $new_user->year = $request->year;
            $new_user->password = Hash::make($request->password);
            $new_user->save(); // Save the user with all required fields
    
            return redirect('/users')->with('success','User Added Successfully');
        } catch (\Exception $e) {
            return redirect('/add/user')->with('fail', $e->getMessage());
        }
    }
}    