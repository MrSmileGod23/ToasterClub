<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class LastOnlineAt
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (auth()->guest()) {
            return $next($request);
        }

        $user = auth()->user();

        if ($user && $user->last_online_at->diffInHours(now()) !== 0)
        {
            DB::table("users")
                ->where("id", auth()->user()->id)
                ->update(["last_online_at" => now()]);
        }

        return $next($request);
    }
}
