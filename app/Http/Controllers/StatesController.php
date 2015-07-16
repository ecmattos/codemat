<?php

namespace CodeMat\Http\Controllers;

use Illuminate\Http\Request;

use CodeMat\Http\Requests;
use CodeMat\Http\Controllers\Controller;
use CodeMat\State;

class StatesController extends Controller
{
    private $stateModel;

    public function __construct(State $stateModel)
    {
        $this->stateModel = $stateModel;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $states = $this->stateModel->orderBy('uf', 'asc')->get();
        #dd($states);
        return view('states.index', compact('states'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('states.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\StateRequest $request)
    {
        $input = $request->all();
        $state = $this->stateModel->fill($input);
        $state->save();

        return redirect('states');
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
        $state = $this->stateModel->find($id);
        
        return view('states.edit', compact('state'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Requests\StateRequest $request, $id)
    {
        $state = $this->stateModel->find($id);
        $state->update($request->all());

        return redirect('states');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->stateModel->find($id)->delete();

        return redirect('states');
    }
}
