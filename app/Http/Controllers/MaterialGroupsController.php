<?php

namespace CodeMat\Http\Controllers;

//use Illuminate\Http\Request;

use CodeMat\Http\Requests;
use CodeMat\Http\Controllers\Controller;
use CodeMat\MaterialGroup;

class MaterialGroupsController extends Controller
{
    private $material_groupModel;

    public function __construct(MaterialGroup $material_groupModel)
    {
        $this->material_groupModel = $material_groupModel;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $material_groups = $this->material_groupModel->orderBy('mat_classe_cod', 'asc')->get();
        #dd($material_groups);
        return view('material_groups.index', compact('material_groups'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('material_groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\MaterialGroupRequest $request)
    {
        $input = $request->all();
        $material_group = $this->material_groupModel->fill($input);
        $material_group->save();

        return redirect('material_groups');
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
        $material_group = $this->material_groupModel->find($id);
        
        return view('material_groups.edit', compact('material_group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Requests\MaterialGroupRequest $request, $id)
    {
        $material_group = $this->material_groupModel->find($id);
        $material_group->update($request->all());
        
        return redirect('material_groups');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->material_groupModel->find($id)->delete();

        return redirect('material_groups');
    }
}