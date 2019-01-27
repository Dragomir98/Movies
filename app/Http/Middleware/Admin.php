<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 18.1.2019 г.
 * Time: 18:32 ч.
 */

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->isAdmin()) {
            return $next($request);
        }
        return redirect('/home');
    }
}