<?php

namespace App\Http\Controllers;

use App\Models\ejmplo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyects = DB::table('ejmplos')->get();
        return view("projects/index", ['proyectos' => $proyects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("projects/new");
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        Ejmplo::create($request->all());
        return redirect('project/')
            ->with('success', 'Proyecto creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(ejmplo $ejmplo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ejmplo $ejmplo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ejmplo $ejmplo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ejmplo $ejmplo)
    {
        //
    }
}
