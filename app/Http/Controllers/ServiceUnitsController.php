<?php

namespace CodeMat\Http\Controllers;

use Illuminate\Http\Request;

use CodeMat\Http\Requests;
use CodeMat\Http\Controllers\Controller;
use CodeMat\ServiceUnit;
use CodeMat\State;
use CodeMat\City;

class ServiceUnitsController extends Controller
{
    private $service_unitModel;

    public function __construct(ServiceUnit $service_unitModel)
    {
        $this->service_unitModel = $service_unitModel;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       $service_units = $this->service_unitModel->all();
       
       return view('service_units.index', compact('service_units'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(State $state, City $city)
    { 
        $states = $state->select('nome', 'id')->orderBy('nome', 'asc')->lists('nome', 'id');
        $cities = $city->select('cidade_nome', 'id')->orderBy('cidade_nome', 'asc')->lists('cidade_nome', 'id');

        return view('service_units.create', compact('states','cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
