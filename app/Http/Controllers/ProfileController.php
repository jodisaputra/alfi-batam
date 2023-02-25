<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = User::find(Auth::user()->id)->first();
        return view('pages.auth-backend.profile', [
            'user' => $user,
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required'],
        ]);
        $user = User::findOrFail(Auth::user()->id)->first();
        $user->update([
            'name' => $request->name,
        ]);
        Alert::toast('Profile berhasil diubah', 'success');
        return redirect()->route('admin.profile');
    }
}
