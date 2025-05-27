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
        $projects = DB::table('ejmplos')->get();
        return view("projects/index", ['proyectos' => $projects]);
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
    public function edit($id)
    {
        $projects = Ejmplo::find($id);
        return view("projects/update", compact('projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'apellido' => 'required'
        ]);
        $projects = Ejmplo::find($id);
        $projects->update($request->all());
        return redirect('project/')
            ->with('success', 'Proyecto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $project = Ejmplo::findOrFail($id);

        $project->delete();

        return redirect('project/')
            ->with('success', 'Proyecto eliminado correctamente.');
    }
}
