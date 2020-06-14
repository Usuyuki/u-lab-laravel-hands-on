<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserLocation;
use App\User;
use Illuminate\Http\Request;

class UserLocationController extends Controller
{
    /**
     * ユーザーの位置情報を取得
     */
    public function index(Request $request)
    {
        // start Middleware で処理がいい
        $token = $request->header('X-API-TOKEN');

        // $tokenが空か判定。
        if (empty($token)) {
            // 空だったら処理中止
            return abort('401'); // 認証エラー
        }
        // end Middleware で処理がいい ↓ヒントの箇所はここから

        // start 処理を書く

        // hint where を使って、userを絞る

        $user_location = UserLocation::paginate(10); // ぺーじねーしょんのしょりをする

        // end


        return [
            "data" => $user_location
        ];
    }

    /**
     * ユーザーの位置情報を記録
     */
    public function create(Request $request)
    {
        // start Middleware で処理がいい
        $token = $request->header('X-API-TOKEN');

        // $tokenが空か判定。
        if (empty($token)) {
            // 空だったら処理中止
            return abort('401'); // 認証エラー
        }
        // end Middleware で処理がいい

        $park_id = $request->parkID;
        $longitude = $request->longitude;
        $latitude = $request->latitude;

        $user = User::where('token', '=', $token)->first(); // $userを拾ってくる

        $user_location = UserLocation::create([
            'user_id' => $user->id,
            'park_id' => $park_id,
            'longitude' => $longitude,
            'latitude' => $latitude,
        ]);

        return [
            "data" => $user_location
        ];
    }
}
