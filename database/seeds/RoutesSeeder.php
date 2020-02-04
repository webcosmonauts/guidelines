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
        $wroclaw = \App\Route::create([
            'title' => 'Wroclaw',
        ]);

        $wroclaw->pois()->createMany([
            [
                'title' => 'Galeria Dominikańska',
                'latitude' => '51.108315',
                'longitude' => '17.040418',
            ],
            [
                'title' => 'Arkady Wrocławskie',
                'latitude' => '51.099514',
                'longitude' => '17.029194',
            ],
            [
                'title' => 'Wroclavia',
                'latitude' => '51.097223',
                'longitude' => '17.033422',
            ],
        ]);

        factory(\App\Route::class, 100)->create()->each(function (\App\Route $route) {
            $route->pois()->saveMany(factory(\App\Poi::class, rand(3, 7))->create());
        });
    }
}
