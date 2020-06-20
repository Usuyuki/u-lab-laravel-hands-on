<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserLocation
 *
 * @property int $id
 * @property int $user_id
 * @property int $park_id
 * @property float $latitude
 * @property float $longitude
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserLocation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserLocation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserLocation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserLocation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserLocation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserLocation whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserLocation whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserLocation whereParkId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserLocation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserLocation whereUserId($value)
 * @mixin \Eloquent
 */
class UserLocation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * 更新を許可するものを入れる
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'park_id', 'latitude', 'longitude'
    ];
}
