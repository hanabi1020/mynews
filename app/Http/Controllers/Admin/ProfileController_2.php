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

    public function create(equest $request)
    {
        
         dd($request);
        // Varidationをおこなう
        $this->validate($request,Profile_2::$rules);
        
        $profile = new Profile_2();
        $form = $request->all();
        
        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
      
        // データベースに保存する
        $profile->fill($form);
        $profile->save();
      
        return redirect('admin/profile/create_2');
    }
    
    public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          $posts = Profile_2::where('title', $cond_title)->get();
      } else {
        // それ以外はすべてのニュースを取得する
          $posts = Profile_2::all();
      }
      return view('admin.profile.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }


    public function edit(Request $request)
    {
          // Profile Modelからデータを取得する
      $profile = Profile_2::find($request->id);
      if (empty($profile)) {
        abort(404);    
      }
        return view('admin.profile.edit_2',['profile_form' => $profile]);
    }

    public function update(Request $request)
    {
        // Validationをかける
      $this->validate($request, Profile_2::$rules);
      // Profile Modelからデータを取得する
      // dd($request);
      $profile = Profile_2::find($request->id);
      // 送信されてきたフォームデータを格納する
      $profile_form = $request->all();
      
      unset($profile_form['_token']);
      

      // dd($profile);
      // 該当するデータを上書きして保存する
      $profile->fill($profile_form)->save();
      
        return redirect('admin/profile/');
    }
}
