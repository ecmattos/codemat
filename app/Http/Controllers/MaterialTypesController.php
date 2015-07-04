<?php

namespace CodeMat\Http\Controllers;

use Illuminate\Http\Request;

use CodeMat\Http\Requests;
use CodeMat\Http\Controllers\Controller;
use CodeMat\MaterialType;

class MaterialTypesController extends Controller
{
    private $material_typeModel;

    public function __construct(MaterialType $material_typeModel)
    {
        $this->material_typeModel = $material_typeModel;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $material_types = $this->material_typeModel->orderBy('mat_tipo', 'asc')->get();
        #dd($material_types);
        return view('material_types.index', compact('material_types'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('material_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\MaterialTypeRequest $request)
    {
        $input = $request->all();
        $material_type = $this->material_typeModel->fill($input);
        $material_type->save();

        return redirect('material_types');
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
        $material_type = $this->material_typeModel->find($id);
        
        return view('material_types.edit', compact('material_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Requests\MaterialTypeRequest $request, $id)
    {
        $material_type = $this->material_typeModel->find($id);
        $material_type->update($request->all());

        return redirect('material_types');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->material_typeModel->find($id)->delete();

        return redirect('material_types');
    }
}
