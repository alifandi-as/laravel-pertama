<?php

namespace App\Http\Middleware;

use Closure;
use App\Helpers\JwtToken;
use Illuminate\Http\Request;
use Firebase\JWT\ExpiredException;

class ApiAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $token = JwtToken::getToken();

        try{
            $decodedToken = JwtToken::decode($token);
            $user = $decodedToken->data;

            if($user->role_id!==2){
                return $this->sendForbidden("You don't have access to this endpoint");
            }
            return $next($request);

            $request->merge([
                'userCredential' => [
                    'id' => $user->id,
                ]
            ]);


        }catch(\Exception $e){
            if($e instanceof ExpiredException)  return $this->sendUnauthorized("Your token was expired !");

            return $this->sendUnauthorized('Your token was invalid');
        }
        return $next($request);
    }

    private function sendUnauthorized($message)
    {
        return response()->json([
            'code' => 403,
            'message' => $message,
            403
        ]);
    }
}
