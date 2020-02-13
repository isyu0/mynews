<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;

class ProfileController extends Controller
{
    //追記
    public function add()
    {
        return view('admin.profile.create');
    }
    
    //Laravel16課題1:admin/profile/createから送信されてきたフォーム情報をデータベースに保存するようにしましょう

    public function create(Request $request)
    {
        // Varidationを行う
      $this->validate($request, Profile::$rules);
      
      $news = new Profile;
      $form = $request->all();
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      
      // データベースに保存する
      $news->fill($form);
      $news->save();
      
      return redirect('admin/profile/create');
    }
    
    public function edit(Request $request)
    {
        // Profile Modelからデータを取得する
      $profile = Profile::find($request->id);
      if (empty($profile)) {
        abort(404);    
      }
      return view('admin.profile.edit', ['profile_form' => $profile]);
    }
    
    public function update()
    {
        return redirect('admin/profile/edit');
    }
    
}
