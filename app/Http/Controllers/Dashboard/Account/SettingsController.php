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
    public function updateProfile(UpdateProfileRequest $request)
    {
        $user = $request->user();
        $data = $request->validated();

        $user->update($data);

        if ($request->profile_image) {
            $user->clearMediaCollection('profile_images');

            // Handle profile image update logic here
            $media = $user->addMedia($request->file('profile_image'))->toMediaCollection('profile_images');
            $data['profile_image'] = $media->getUrl();
        }

        if ($user->isBroker) {
            $user->broker()->update([
                'val_license_number' => $data['val_license_number'],
                'commercial_registration' => $data['commercial_registration'],
                'license_number' => $data['license_number'],
            ]);
        }

        return back()->with('success', 'Profile data updated');
    }

    function security()
    {
        return view('dashboard.account.security.change-password');
    }
    public function changePassword(ChangePasswordRequest $request)
    {
        $user = request()->user();

        if (!Hash::check($request->old_password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->new_password),
            ]);

            return redirect()->route('dashboard.account.settings.change-password')->with('error', 'The provided password does not match your current password.');
        } else {
            return redirect()->route('dashboard')->with('success', 'Password changed successfully.');
        }
    }
}
