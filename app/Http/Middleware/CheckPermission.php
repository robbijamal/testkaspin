<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,...$roles)
    {
       // $is_admin = DB::table('users')->where('id',$request->user()->id)->first();
        if($request->user()->is_admin==1){
            return $next($request);
        }
        else{

            if(in_array($request->user()->privilege_id,$roles)){
                return $next($request);
            }
        }
        
        return redirect('/');
        
    }
}
