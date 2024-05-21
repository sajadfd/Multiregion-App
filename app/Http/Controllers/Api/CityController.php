<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CityController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:cities,name',
        ]);

        $city = City::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return response()->json([
            'message' => 'City created successfully',
            'city' => $city,
        ], 201);
    }

    public function destroy(City $city)
    {
        if ($city->delete()) {
            return response()->json([
                'message' => 'City deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Failed to delete city',
            ], 500);
        }
    }
}
