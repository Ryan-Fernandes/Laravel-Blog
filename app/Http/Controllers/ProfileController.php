<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth');
    }

    public function index()
    {
        if(\Gate::allows('isAdmin')){
            $profile = Profile::all();
            return view('user.index',compact('profile'));
        }
        else{
            abort(403);
        }
        
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Profile $profile)
    {
        //
    }

    public function edit(Profile $user)
    {
        if(\Gate::allows('isAdmin')){
            return view('user.edit', compact('user'));
        }
        else{
            abort(403);
        }
        //$user = Auth::user();
        
        
    }

    public function update(Profile $user)
    {
        //$user = Profile::find($id);

        $this->validate(request(),[
            'name' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
        ]);

        $user->name = request('name');
        $user->email = request('email');
        $user->save();
        
        return redirect('/user');
    }

    public function destroy(Profile $profile)
    {
        //
    }
}
