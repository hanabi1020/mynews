<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController_2 extends Controller
{
    public function add()
  {
      return view('admin.news.create_2');
  }
}