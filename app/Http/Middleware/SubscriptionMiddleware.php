<?php

namespace App\Http\Middleware;

use App\Models\UserPlan;
use App\Models\UserType;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SubscriptionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        if ($user->isAgent) {
            $agent = $user->agent;
            $subscriberUser = $agent->subscriber->user;
            $request->merge(['agent' => $agent]);
        } else {
            $subscriberUser = $user;
        }
        $planExist = UserPlan::where('user_id', $subscriberUser->id)->first();

        $request->merge(['subscriberUser' => $subscriberUser]);

        if (!$planExist) {
            return redirect()->route('plans.index');
        }

        return $next($request);
    }
}
