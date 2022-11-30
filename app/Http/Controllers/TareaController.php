<?php

namespace App\Http\Controllers;

use App\Models\tareas;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = tareas::orderByDesc('id')->get();
        return view('tarea.index', compact('tareas'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tarea.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->validate(
            [
                'name' => 'required|max:60',
                'description' => 'nullable|max:255',
                'state' =>  'required|max:255',
                'register_date' =>  'nullable|date_format:Y-m-d\TH:i'
            ]);
            $tarea = tareas::create($datos);
            return redirect()->route('tarea.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tareas  $tareas
     * @return \Illuminate\Http\Response
     */
    public function show(tareas $tareas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tareas  $tareas
     * @return \Illuminate\Http\Response
     */
    public function edit(tareas $tareas)
    {
        /*return view('tarea.edit', compact('tarea'));*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tareas  $tareas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tareas $tareas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tareas  $tareas
     * @return \Illuminate\Http\Response
     */
    public function destroy(tareas $tareas)
    {
        $tareas->delete();
        return redirect()->route('tarea.index')->with('success', 'Item deleted');
    }
}
