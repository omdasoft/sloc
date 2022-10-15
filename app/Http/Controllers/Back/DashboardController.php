<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
class DashboardController extends Controller
{
    public function index() {
        return view('back.index');
    }

    public function editProfile() {
        $user = User::findOrFail(auth()->user()->id);
        return view('back.edit_profile', compact('user'));
    }

    public function updateProfile(UpdateProfileRequest $request) {
       
        $id = $request->id;
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if(!empty($request->password)) {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        
        return redirect()->route('dashboard.index')->with('status','تم تحديث البيانات بنجاح');
    }
}
