<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController_2 extends Controller
{
    public function add()
    {
        return view('admin.profile.create_2');
    }

    public function create()
    {
        return redirect('admin/profile/create_2');
    }

    public function edit()
    {
        return view('admin.profile.edit_2');
    }

    public function update()
    {
        return redirect('admin/profile/edit_2');
    }
}
