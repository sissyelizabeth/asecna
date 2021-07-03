<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class UserManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function list(){
    //   $profiles = Profile::all();
      $context = [
        // 'profiles' => $profiles,
      ];

      return view('usermanagement.all', $context);
    }


    function form(){
        // $profile = Profile::where('id', $profile)->firstOrFail();
        $roles = ['Technicien','Chef service'];
        $context = [
            // 'profile' => $profile,
            'roles' => $roles,
        ];

        return view('usermanagement.edit', $context);
    }

    // public function modifier($profile)
    // {
    //     // $profile = Profile::where('id', $profile)->firstOrFail();
    //     $data = request()->validate([
    //         'nom' => 'required|string|max:255',
    //         'prenom' => 'required|string|max:255',
    //         'telephone' => 'required|string|min:9',
    //         'adresse' => 'required|string|max:255',
    //         'role' => 'required',
    //     ]);

    //     // $profile->update($data);

    //     return redirect()->route('liste_profiles');
    // }
}
