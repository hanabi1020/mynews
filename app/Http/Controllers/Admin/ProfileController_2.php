<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile_2;

class ProfileController_2 extends Controller
{
    public function add()
    {
        return view('admin.profile.create_2');
    }

    public function create()
    {
        
        // dd($request);
        // Varidationをおこなう
        $this->validate($request,Profile_2::$rules);
        
        $profile_2 = new Profile_2();
        $form = $request->all();
        
        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
      
        // データベースに保存する
        $profile_2->fill($form);
        $profile_2->save();
      
        
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
