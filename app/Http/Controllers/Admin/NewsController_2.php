<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\News_2;

class NewsController_2 extends Controller
{
    public function add()
  {
      return view('admin.news.create_2');
  }
  public function create(Request $request)
  {
       // Varidationを行う
      $this->validate($request, News_2::$rules);
      $news_2 = new News_2;
      $form = $request->all();
      
      // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $news_2->image_path = basename($path);
      } else {
          $news_2->image_path = null;
      
​
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);
​
      // データベースに保存する
      $news_2->fill($form);
      $news_2->save();
      // admin/news/createにリダイレクトする
      return redirect('admin/news/create');
  } 
}
