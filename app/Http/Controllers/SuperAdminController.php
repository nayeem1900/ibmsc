<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    //
    public function SuperAdminDashboard(){


        return view ('super_admin.super-admin-dashboard');

    }


}
