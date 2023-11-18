<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Broker;

class CompletedProfileMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        $requiredFields = [
            'first_name',
            'middle_name',
            'last_name',
            'email',
            'phone',
            'gender',
            'birth_date',
        ];

        if ($user->IsBroker) {
            $broker = Broker::where('user_id', $user->id)->first();

            if (empty($broker->val_license_number) || empty($broker->commercial_registration) || empty($broker->license_number)) {
                return redirect()->route('dashboard.account.settings.edit')->with('error', __('Please complete your profile first'));
            }
        }
        foreach ($requiredFields as $field) {
            if (empty($user->{$field})) {
                return redirect()->route('dashboard.account.settings.edit');
            }
        }

        return $next($request);
    }
}
