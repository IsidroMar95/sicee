<?php

namespace App\Http\Controllers;

use App\Career;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\CareerRequest;

class CareerController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:carreras.create')->only(['create', 'store']);
        $this->middleware('can:carreras.index')->only('index');
        $this->middleware('can:carreras.edit')->only(['edit', 'update']);
        $this->middleware('can:carreras.show')->only('show');
        $this->middleware('can:carreras.destroy')->only('destroy');
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $careers = Career::latest('created_at')->get();
        return view('careers.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('careers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(CareerRequest $request)
    {
        $profession = Career::create($request->all());
        return redirect()
            ->route('carreras.index')
            ->with('info', 'La carrera ha sido agregada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Career  $career
     * @return Response
     */
    public function show(Career $career)
    { }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Career  $career
     * @return Response
     */
    public function edit(Career $career)
    {
        //dd($career);
        return view('careers.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Career  $career
     * @return Response
     */
    public function update(CareerRequest $request, Career $career)
    {

        $foundCareer = Career::findOrFail($career->id);

        $foundCareer->update([
            'name' => $request['name'],
            'status' => $request['status'] ? true : false,
            'start_date' => $request['start_date']
        ]);

        return redirect()
            ->route('carreras.index')
            ->with('info', 'La carrera ha sido editada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Career  $career
     * @return Response
     */
    public function destroy(Career $career)
    {
        //
    }
}
