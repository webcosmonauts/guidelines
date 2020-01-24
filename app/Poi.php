<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Poi
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 *
 * @property int id
 * @property string title
 * @property float latitude
 * @property float longitude
 * @property \Carbon\Carbon created_at
 * @property \Carbon\Carbon updated_at
 *
 * @property \App\Route[]|\Illuminate\Database\Eloquent\Collection routes
 */
class Poi extends Model
{
    protected $fillable = ['title', 'latitude', 'longitude'];

    protected $casts = [
        'latitude' => 'decimal:8',
        'longitude' => 'decimal:7',
    ];

    public function routes() {
        return $this->belongsToMany(Route::class);
    }
}
