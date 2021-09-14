<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->has('admin'))
        {
            return $next($request);
        }

        return redirect("/adminlogin");
        // return '<script> 
        
        // alert("Unauthorized Login! Return Back");
        // var baseurl=window.location.origin; 
        // window.location.href=baseurl+"/";
        
        
        // </script>';
    }
}
