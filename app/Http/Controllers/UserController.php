<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
//        Role::create([
//            'name'=>'admin'
//        ]);
//        Role::create([
//            'name'=>'user'
//        ]);
//
//        User::create([
//            'username'=>'antesevic',
//            'first_name'=>'Filip',
//            'last_name'=>'Antesevic',
//            'email'=>'antesevicfotovideo@gmail.com',
//            'password'=>bcrypt('Filip123!'),
//            'image'=>'filip.png',
//            'role_id'=>1
//        ]);

        return view('pages.users.login');
    }

    public function performLogin(Request $request){
        $form_fields = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(auth()->attempt($form_fields)){
            return redirect('/admin');
        }

        return redirect()->back()->with('wrong_credentials', 'Kredencijali nisu ispravni.');
    }
}
