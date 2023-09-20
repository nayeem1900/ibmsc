<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    //

    public function AdminDashboard(){


        return view ('admin.admin-dashbord');

    }


//LogOut

     public function AdminLogout(Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }


//Profile

public function AdminProfile (){
    $id =   Auth::user()->id;
    $profileData    =   User::find($id);
    return view('admin.admin-profile-view',compact('profileData'));


} //endprofile

public function EditProfile(){
    $id =   Auth::user()->id;
    $editData    =   User::find($id);
    return view('admin.admin_profile_edit',compact('editData'));


}//endEdit






}
        
      









