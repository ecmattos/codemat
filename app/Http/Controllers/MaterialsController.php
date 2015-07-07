<?php

namespace CodeMat\Http\Controllers;

use Illuminate\Http\Request;

use CodeMat\Http\Requests;
use CodeMat\Http\Controllers\Controller;
use CodeMat\Material;
use CodeMat\MaterialUnit;
use CodeMat\MaterialType;
use CodeMat\MaterialGroup;
//use CodeMat\MaterialStatus;

class MaterialsController extends Controller
{
    private $materialModel;

    public function __construct(Material $materialModel)
    {
        $this->materialModel = $materialModel;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
       $materials = $this->materialModel->searchCodDesc($request->get('search_cod_desc'));
       
       return view('materials.index', compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(MaterialUnit $material_unit, MaterialType $material_type, MaterialGroup $material_group)
    { 
        $material_units = $material_unit->select('mat_unid', 'id')->orderBy('mat_unid', 'asc')->lists('mat_unid', 'id');
        $material_types = $material_type->select('mat_tipo_desc', 'id')->orderBy('mat_tipo', 'asc')->lists('mat_tipo_desc', 'id');
        $material_groups = $material_group->select('mat_classe_desc', 'id')->orderBy('mat_classe_desc', 'asc')->lists('mat_classe_desc', 'id');

        return view('materials.create', compact('material_units','material_units','material_types','material_groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\MaterialRequest $request)
    {
        $input = $request->all();
        $numberFormatter_ptBR2en = new \NumberFormatter('pt_BR',\NumberFormatter::DECIMAL);
        $input['mat_vlr_ult_aquis'] = $numberFormatter_ptBR2en->parse($input['mat_vlr_ult_aquis']);
        $material = $this->materialModel->fill($input);
        $material->save();

        return redirect('materials');
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
    public function edit($id, MaterialUnit $material_unit, MaterialType $material_type, MaterialGroup $material_group)
    {
        $material_units = $material_unit->select('mat_unid', 'id')->orderBy('mat_unid', 'asc')->lists('mat_unid', 'id');
        $material_types = $material_type->select('mat_tipo_desc', 'id')->orderBy('mat_tipo', 'asc')->lists('mat_tipo_desc', 'id');
        $material_groups = $material_group->select('mat_classe_desc', 'id')->orderBy('mat_classe_desc', 'asc')->lists('mat_classe_desc', 'id');
        $material = $this->materialModel->find($id);
        
        return view('materials.edit', compact('material','material_units','material_types','material_groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Requests\MaterialRequest $request, $id)
    {
        $input = $request->all();
        $numberFormatter_ptBR2en = new \NumberFormatter('pt_BR',\NumberFormatter::DECIMAL);
        $input['mat_vlr_ult_aquis'] = $numberFormatter_ptBR2en->parse($input['mat_vlr_ult_aquis']);
        $material = $this->materialModel->find($id);
        $material->update($input);

        return redirect('materials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->materialModel->find($id)->delete();

        return redirect('materials');
    }
}
