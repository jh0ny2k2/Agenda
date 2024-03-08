<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $rol, $rol2): Response
    {
        if ($request->user()->rol != $rol && $request->user()->rol != $rol2) {

            //No tiene permiso

            return redirect("/");

        }



        return $next($request);
    }
}
