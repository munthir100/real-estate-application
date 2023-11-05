<?php

namespace App\Http\Controllers\Dashboard\Account;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Dashboard\Account\UpdateProfileRequest;
use App\Http\Requests\Dashboard\Account\ChangePasswordRequest;

class SettingsController extends Controller
{
    function edit()
    {
        return view('dashboard.account.settings.edit');
    }
    function updateProfile(UpdateProfileRequest $request)
    {
        request()->user()->update($request->validated());

        return back()->with('success', 'profile data updated');
    }
    function security()
    {
        return view('dashboard.account.security.change-password');
    }
    public function changePassword(ChangePasswordRequest $request)
    {
        dd('dd');
        $user = request()->user();

        if (!Hash::check($request->old_password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->new_password),
            ]);

            return redirect()->route('account.settings.change-password')->with('error', 'The provided password does not match your current password.');
        } else {
            return redirect()->route('dashboard')->with('success', 'Password changed successfully.');
        }
    }
}
