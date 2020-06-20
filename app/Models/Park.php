<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Park
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Park newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Park newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Park query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Park whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Park whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Park whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Park whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Park extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * 更新を許可するものを入れる
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
}
