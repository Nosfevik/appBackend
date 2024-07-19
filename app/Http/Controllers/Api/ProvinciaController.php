<?php

namespace App\Http\Controllers\Api;

use App\Models\Provincia;
use Illuminate\Http\Request;
use App\Http\Requests\ProvinciaRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProvinciaResource;
use Illuminate\Support\Facades\DB;

class ProvinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $provincias = DB::select('SELECT p.id, p.name, r.name as "Region", p.name as "Provincia" FROM provincias as p, regions as r WHERE r.id = p.region_id;');
        return $provincias;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProvinciaRequest $request): Provincia
    {
        return Provincia::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Provincia $provincia): Provincia
    {
        return $provincia;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProvinciaRequest $request, Provincia $provincia): Provincia
    {
        $provincia->update($request->validated());

        return $provincia;
    }

    public function destroy(Provincia $provincia): Response
    {
        $provincia->delete();

        return response()->noContent();
    }

    public function buscar_prov($request) {
        //$value = request()->get('id'); // Get the searched keyword value
        //$result = ModelName::where('region_id', 'like', '%'.$search.'%')->get();
        
        /* $result = DB::table('provincias')
                ->where('region_id', ' LIKE', '%' . $value)
                ->get(); */

         $result = DB::select('select * from provincias where region_id = :id', ['id' => $request]);

        return $result;
   }
   
    /* public function getProv_reg(){
        $provincias = DB::select('');
        return response()->json(["response" => $provincias]);
    } */
    
}
