<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCrudRequest;
use App\Http\Requests\UpdateCrudRequest;
use App\Models\Crud;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cruds = Crud::all();
        return response()->json([
            'data' => $cruds,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCrudRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCrudRequest $request)
    {
        $crud = new Crud();
        $crud->title = $request->input('title');
        $crud->save();
        return response()->json([
            'data' => 'ok'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function show(Crud $crud)
    {
        return response()->json([
            'data' => $crud
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function edit(Crud $crud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCrudRequest  $request
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCrudRequest $request, Crud $crud)
    {
        $crud->title = $request->input('title');
        $crud->save();
        return response()->json([
            'data' => 'ok'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crud $crud)
    {
        $crud->delete();
        return response()->json([
            'data' => 'ok'
        ]);
    }
}
