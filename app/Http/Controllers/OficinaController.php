<?php

namespace App\Http\Controllers;

use App\Models\Unidad;
use App\Models\Area;
use App\Models\Oficina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OficinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = DB::table('oficinas as o')
        ->join('areas as a', 'a.areaid', '=', 'o.areaid')
        ->join('unidades as u','u.unidadid','=','a.unidadid')
        ->select('o.oficinaid','o.nombreoficina','o.areaid','a.nombrearea','u.nombreunidad',)
        ->orderBy('nombreunidad','asc')
        ->paginate(5);
        $areas = DB::table('areas as a')
        ->join('unidades as u','u.unidadid','=','a.unidadid')
        ->select('a.areaid','a.nombrearea','u.nombreunidad')
        ->get();
        return view('oficinas.index',compact('query','areas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $oficinas = new Oficina;
        $oficinas->nombreoficina=$request->input('oficina');
        $oficinas->areaid=$request->input('area');
        $oficinas->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $oficinas = Oficina::find($id);
        $oficinas->nombreoficina=$request->input('oficina');
        $oficinas->areaid=$request->input('area');
        $oficinas->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $oficinas = Oficina::find($id);
        $oficinas->delete();

        return redirect()->back();
    }
}
