<?php
//untuk membedakan page antara admin dan user
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user() && Auth::user()->roles = 'admin'){ //user adalah table, roles adalah fieldnya, cek apakah authnya admin atau bukan setelahnya middleware harus didaftarkan ke kernel.php
            return $next($request);
        }
        return redirect('/');
    }
}