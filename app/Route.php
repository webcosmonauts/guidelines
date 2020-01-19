<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Route
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 *
 * @property int id
 * @property string title
 * @property \Carbon\Carbon created_at
 * @property \Carbon\Carbon updated_at
 *
 * @property \Illuminate\Database\Eloquent\Collection pois
 */
class Route extends Model
{
    protected $fillable = ['title'];

    public function pois() {
        return $this->hasMany(Poi::class);
    }
}
