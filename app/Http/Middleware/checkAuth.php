<?php

namespace App\Http\Middleware;

use Closure;
use App\Token;
use App\User;


class checkAuth
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
        $token_encoded = $request->header('Authorization');

        if (isset($token_encoded)) 
        {
            $token = New Token;
            $data_token = $token->decode($token_encoded);
            $user = User::where('email',$data_token->email)->first();

            if (isset($user)) 
            {
                return $next($request);
            }

    } 
    var_dump('no tienes permisos'); exit;
    }
}