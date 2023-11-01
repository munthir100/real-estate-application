<?php

namespace App\Http\Controllers\Dashboard\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Account\UpdateProfileRequest;

class SettingsController extends Controller
{
    function edit()
    {
        return view('dashboard.account.settings.edit');
    }
    function updateProfile(UpdateProfileRequest $request)
    {
        request()->user()->update($request->validated());

        return back()->with('success','profile data updated');
    }
}
