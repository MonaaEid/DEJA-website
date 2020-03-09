<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class isCashier
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
        // Obtenir la liste des roles de l'utilisateur
        $user_id = Auth::id();
        $UserRoles = DB::table('roles')
            ->join('user_roles', 'roles.id', '=', 'user_roles.role_id')
            ->where('user_id', '=', $user_id)
            ->pluck('role');
        // vérifier si cet utilisateur  a le role d'admin
        $isCashier = false;
        foreach ($UserRoles as $role) {
//        $role=$role[0];
            if ($role == 'cashier') {
                $isCashier = true;
            }
        }

        // snippet ci-dessous selon doc de Laravel
        if (!$isCashier) {
//            if ($request->ajax()) {
                return response(abort(401));
//            } else {
//                return redirect()->back(); //todo h peut-etre une fenetre modale pour dire acces refusé ici...
//            }
        }

        return $next($request);
    }
}
