<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    // public function handle($request, Closure $next)
    // {
    //     return $next($request);
    // }
    public function handle($request, Closure $next)
    {
                $user_id = Auth::id();
        // Get the list of user roles
//        $UserRoles=DB::table('users')->where('id','=',$userid)
//        ->pluck('type');
        //        dd($UserRoles);
        $UserRoles = DB::table('roles')
            ->join('user_roles', 'roles.id', '=', 'user_roles.role_id')
            ->where('user_id', '=', $user_id)
            ->pluck('role');
        // check if this user has the admin role
        $isAdmin = false;
        foreach ($UserRoles as $role) {
//        $role=$role[0];
            if ($role == 'admin') {
                $isAdmin = true;

            }
        }
//        ddd($UserRoles);

        // snippet ci-dessous selon doc de Laravel
//
        if (!$isAdmin) {

//            if ($request->ajax()) {
            return abort(401);
//            }
        }

            return $next($request);



    }
}
