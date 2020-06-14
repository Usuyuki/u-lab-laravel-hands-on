<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserLocation;
use App\User;
use Illuminate\Http\Request;

class UserLocationController extends Controller
{
    /**
     * ユーザーの位置情報を取得   GETに該当
     */
    public function index(Request $request)
    {
        // start Middleware で処理がいい
        $token = $request->header('X-API-TOKEN');
        \Log::debug($token);
        // $tokenが空か判定。
        if (empty($token)) {
            // 空だったら処理中止
            return abort('401'); // 認証エラー
        }
        // end Middleware で処理がいい ↓ヒントの箇所はここから

        // start 処理を書く
        $user = User::where('token', '=', $token)->first();
        \Log::debug('Userは'.$user);
        \Log::debug('Useridは'.$user->id);
        $user_location = UserLocation::where('user_id', '=', $user->id)->first();
        //user_idが$userのlocationを取ってくる
        \Log::debug('userlocationは'.$user_location);
        //::はスコープ定義演算子 場所::中身
        //->はインスタンスプロパティとインスタントメソッドにアクセスする
        //=>は連想配列で使うやつ
        //firstは１つだけデータ取得する
        // 

        //User_locationの連想配列を作る

        //


        // hint where を使って、userを絞る
        //$user_location = UserLocation::paginate(10);
        $user_location = UserLocation::where('user_id'.'='.$user_location)->paginate(10); // ぺーじねーしょんのしょりをする
        //where(::前のuserlocation内のカラム.'='.カラムの中の値)のやつだけ取り出してpaginateする

        \Log::debug($user_location);
        /**
        $user_location = UserLocation::create([
            'user_id' => $user->id,
            'park_id' => $park_id,
            'longitude' => $longitude,
            'latitude' => $latitude,
        ]);
        */

        // end


        return [
            "data" => $user_location
        ];
    }

    /**
     * ユーザーの位置情報を記録      POSTに該当
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
        \Log::debug('デバッグ４'.$user_location);
        return [
            "data" => $user_location
        ];
    }
}
