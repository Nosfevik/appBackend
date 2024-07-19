<?php

namespace App\Http\Controllers\Api;

use App\Models\Calle;
use Illuminate\Http\Request;
use App\Http\Requests\CalleRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\CalleResource;
use Illuminate\Support\Facades\DB;

class CalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $calles = DB::select('SELECT c.id, c.descripcion, cd.name as "Ciudad", p.name as "Provincia", r.name as "Region" 
                            FROM calles c, provincias as p, regions as r, ciudades as cd 
                            WHERE c.ciudad_id = cd.id AND c.provincia_id = p.id AND c.region_id = r.id;');
        return $calles;

        /* $calles = Calle::all();

        return CalleResource::collection($calles); */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CalleRequest $request): Calle
    {
        return Calle::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Calle $calle): Calle
    {
        return $calle;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CalleRequest $request, Calle $calle): Calle
    {
        $calle->update($request->validated());

        return $calle;
    }

    public function destroy(Calle $calle): Response
    {
        $calle->delete();

        return response()->noContent();
    }
}
