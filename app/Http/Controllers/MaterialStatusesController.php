<?php

namespace CodeMat\Http\Controllers;

use Illuminate\Http\Request;

use CodeMat\Http\Requests;
use CodeMat\Http\Controllers\Controller;
use CodeMat\MaterialStatus;

class MaterialStatusesController extends Controller
{
    private $material_statusModel;

    public function __construct(MaterialStatus $material_statusModel)
    {
        $this->material_statusModel = $material_statusModel;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $material_statuses = $this->material_statusModel->orderBy('mat_sit', 'asc')->get();
        #dd($material_statuses);
        return view('material_statuses.index', compact('material_statuses'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('material_statuses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\MaterialStatusRequest $request)
    {
        $input = $request->all();
        $material_status = $this->material_statusModel->fill($input);
        $material_status->save();

        return redirect('material_statuses');
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
        $material_status = $this->material_statusModel->find($id);
        
        return view('material_statuses.edit', compact('material_status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Requests\MaterialStatusRequest $request, $id)
    {
        $material_status = $this->material_statusModel->find($id)->update($request->all());
        return view('material_statuses.edit', compact('material_status'));
        #dd($material_status);
        return redirect('material_statuses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->material_statusModel->find($id)->delete();

        return redirect('material_statuses');
    }
}
