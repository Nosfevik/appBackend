<?php

namespace App\Http\Controllers\Api;

use App\Models\Ciudade;
use Illuminate\Http\Request;
use App\Http\Requests\CiudadeRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\CiudadeResource;
use Illuminate\Support\Facades\DB;

class CiudadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $ciudades = DB::select('SELECT cd.name as "Ciudad", p.name as "Provincia", r.name as "Region" 
                                FROM provincias as p, regions as r, ciudades as cd 
                                WHERE cd.provincia_id = p.id
                                AND cd.region_id = r.id;');
        return $ciudades;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CiudadeRequest $request): Ciudade
    {
        return Ciudade::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Ciudade $ciudade): Ciudade
    {
        return $ciudade;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CiudadeRequest $request, Ciudade $ciudade): Ciudade
    {
        $ciudade->update($request->validated());

        return $ciudade;
    }

    public function destroy(Ciudade $ciudade): Response
    {
        $ciudade->delete();

        return response()->noContent();
    }
}
