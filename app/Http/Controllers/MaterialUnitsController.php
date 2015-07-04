<?php

namespace CodeMat\Http\Controllers;

//use Illuminate\Http\Request;

use CodeMat\Http\Requests;
use CodeMat\Http\Controllers\Controller;
use CodeMat\MaterialUnit;

class MaterialUnitsController extends Controller
{
    private $material_unitModel;

    public function __construct(MaterialUnit $material_unitModel)
    {
        $this->material_unitModel = $material_unitModel;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $material_units = $this->material_unitModel->orderBy('mat_unid', 'asc')->get();
        #dd($material_units);
        return view('material_units.index', compact('material_units'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('material_units.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\MaterialUnitRequest $request)
    {
        $input = $request->all();
        $material_unit = $this->material_unitModel->fill($input);
        $material_unit->save();

        return redirect('material_units');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $material_unit = $this->material_unitModel->find($id);
        
        return view('material_units.edit', compact('material_unit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Requests\MaterialUnitRequest $request, $id)
    {
        $material_unit = $this->material_unitModel->find($id);
        $material_unit->update($request->all());
        
        return redirect('material_units');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->material_unitModel->find($id)->delete();

        return redirect('material_units');
    }
}