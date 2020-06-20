<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request)
    {
        // start Middleware で処理がいい
        $token = $request->header('X-API-TOKEN');

        // DBから tokenが等しいものを拾ってくる
        $user = User::where('token', '=', $token)->first();

        return [
            "data" => [
                "name" => $user->name
            ]
        ];
    }

    public function update(USerFormRequest $request)
    {
        // start Middleware で処理がいい
        $token = $request->header('X-API-TOKEN');

        // $tokenが空か判定。
        if (empty($token)) {
            // 空だったら処理中止
            return abort('401'); // 認証エラー
        }
        // end Middleware で処理がいい


        // userの入力値の取得
        $name = $request->name;

        $user = User::where('token', '=', $token)->first(); // $userを拾ってくる
        // その後に更新をする
        $user->update([
            'name' => $name
        ]);

        return [
            "data" => [
                "name" => $user->name
            ]
        ];
    }
}
