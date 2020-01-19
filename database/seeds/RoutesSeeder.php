<?php

use Illuminate\Database\Seeder;

class RoutesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Route::class, 100)->create()->each(function (\App\Route $route) {
            $route->pois()->saveMany(factory(\App\Poi::class, rand(3, 7))->create());
        });
    }
}
