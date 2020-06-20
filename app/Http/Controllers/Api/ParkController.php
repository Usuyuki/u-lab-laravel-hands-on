<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Park;
use Illuminate\Http\Request;

class ParkController extends Controller
{
    public function index(Request $request)
    {

    }

    public function show(Request $request, $id)
    {
        $park = Park::find($id);
        $user_locations = $park->user_location;

        // 人数取得
        $count = count($user_locations);
        

        return [
            'data' => [
                'id' => $park->id,
                'name' => $park->name,
                'count' => $count,
                'people' => $user_locations
            ]
        ];
    }
}