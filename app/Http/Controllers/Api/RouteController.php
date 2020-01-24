<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \App\Route[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index() {
        return Route::with('pois')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request) {
        $data = Validator::make($request->all(), [])->validate();
        return DB::transaction(function () use ($data) {
            $route = Route::create($data);
            $route->pois()->createMany($data['pois'] ?? []);
            return response()->json();
        });
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \App\Route
     */
    public function show($id) {
        return Route::with('pois')->findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $data = Validator::make($request->all(), [])->validate();
        return DB::transaction(function () use ($data, $id) {
            $route = Route::with('pois')->findOrFail($id);
            $route->fill($data)->save();
            $route->pois()->sync($data['pois'] ?? []);
            return response()->json();
        });
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id) {
        Route::destroy($id);
        return response()->json();
    }
}
