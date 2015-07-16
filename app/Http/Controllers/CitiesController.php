<?php

namespace CodeMat\Http\Controllers;

use Illuminate\Http\Request;

use CodeMat\Http\Requests;
use CodeMat\Http\Controllers\Controller;

use CodeMat\City;
use CodeMat\State;

class CitiesController extends Controller
{
    private $cityModel;

    public function __construct(City $cityModel)
    {
        $this->cityModel = $cityModel;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
       $cities = $this->cityModel->OfSearchNome($request->get('search_name'));
       ##dd($cities);

       return view('cities.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(State $state)
    { 
        $states = $state->select('nome', 'id')->orderBy('nome', 'asc')->lists('nome', 'id');

        return view('cities.create', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\CityRequest $request)
    {
        $input = $request->all();
        $city = $this->cityModel->fill($input);
        $city->save();

        return redirect('cities');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id, State $state)
    {
        $city = $this->cityModel->find($id);
        $states = $state->select('nome', 'id')->orderBy('nome', 'asc')->lists('nome', 'id');
        
        return view('cities.edit', compact('city', 'states'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Requests\CityRequest $request, $id)
    {
        $input = $request->all();
        $city = $this->cityModel->find($id);
        $city->update($input);

        return redirect('cities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->cityModel->find($id)->delete();

        return redirect('cities');
    }

    public function state($id)
    {
        $cities = $this->cityModel->OfSearchState($id);
        #$cities = $this->cityModel->OfState($id);
        #$cities = City::all();

        #dd($cities);

        return response()->json($cities);
    }
}