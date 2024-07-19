<?php

namespace App\Http\Controllers\Api;

use App\Models\Region;
use Illuminate\Http\Request;
use App\Http\Requests\RegionRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\RegionResource;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $regions = Region::paginate();

        return RegionResource::collection($regions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegionRequest $request): Region
    {
        return Region::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Region $region): Region
    {
        return $region;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RegionRequest $request, Region $region): Region
    {
        $region->update($request->validated());

        return $region;
    }

    public function destroy(Region $region): Response
    {
        $region->delete();

        return response()->noContent();
    }
}
