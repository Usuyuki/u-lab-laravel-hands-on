<?php

namespace App\Http\Middleware;

use Closure;

class ExsitTokenMiddleware
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


        // $tokenが空か判定。
        if (empty($request->header('X-API-TOKEN'))) {
            // 空だったら処理中止
            return abort('401'); // 認証エラー
        }
        // end Middleware で処理がいい

        return $next($request);
    }
}
