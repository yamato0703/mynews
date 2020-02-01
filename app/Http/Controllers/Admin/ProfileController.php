<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\ProfileHistory;
use Carbon\Carbon;

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view ('admin.profile.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Profile::$rules);
        
        $profile = new Profile;
        $form = $request->all();
        
       
      unset($form['_token']);
      
      

      
      $profile->fill($form);
      $profile->save();

     return redirect ('admin/profile/create');
    }
    
    public function edit(Request $request)
    {
        
      // News Modelからデータを取得する
      $profile = Profile::find($request->id);
      $profile_histories = $profile->profile_histories()->get();

      if (empty($profile)) {
        abort(404);    
      }
      return view('admin.profile.edit', ['profile_form' => $profile, 'profile_histories' => $profile_histories]);
    

    }
    
    public function update(Request $request)
    {
       $this->validate($request, Profile::$rules);
      // News Modelからデータを取得する
      $profile = Profile::find($request->id);
      // 送信されてきたフォームデータを格納する
      $profile_form = $request->all();
      unset($profile_form['_token']);

      // 該当するデータを上書きして保存する
      $profile->fill($profile_form)->save();
      
        $profilehistory = new ProfileHistory;
        $profilehistory->profile_id = $profile->id;
        $profilehistory->edited_at = Carbon::now();
        $profilehistory->save();

 
        return redirect ('admin/profile/edit?id=1');
    }
     
}
