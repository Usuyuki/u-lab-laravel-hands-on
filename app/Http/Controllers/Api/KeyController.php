<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\Api\UserFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KeyController extends Controller
{
    /**
     * 端末 API Key 生成
     *
     * Request型の$requestを受け取る.
     *
     * @param Request $request リクエスト
     */
    public function generate(UserFormRequest $request)
    {
        $name = $request->name; // userの入力値の取得
        $uuid = Str::uuid(); // uuidの生成

        // DBに挿入
        $user = User::create([
            'name'  => $name,
            'token' => $uuid
        ]);

        // 配列を return する
        return [
            "data" => [
                'name'  => $user->name,
                'token' => $user->token
            ]
        ];
    }
}
