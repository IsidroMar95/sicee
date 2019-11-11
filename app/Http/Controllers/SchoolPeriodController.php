<?php

namespace App\Http\Controllers;

use App\Http\Requests\School_periodRequest;
use App\School_period;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SchoolPeriodController extends Controller
{

    /**
     * SchoolPeriodController constructor.
     */
    public function __construct()
    {
        $this->middleware('can:periodos-escolares.create')->only(['create', 'store']);
        $this->middleware('can:periodos-escolares.index')->only('index');
        $this->middleware('can:periodos-escolares.edit')->only(['edit', 'update']);
        $this->middleware('can:periodos-escolares.show')->only('show');
        $this->middleware('can:periodos-escolares.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $school_periods = School_period::latest('created_at')->get();
        return view('school_periods.index', compact('school_periods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('school_periods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  School_periodRequest  $request
     * @return Response
     */
    public function store(School_periodRequest $request)
    {
        //dd($request->all());
        $school_period = School_period::create($request->all());
        return redirect()
            ->route('periodos-escolares.index')
            ->with('info', 'El periodo ha sido agregado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  School_period  $school_period
     * @return Response
     */
    public function show(School_period $school_period)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  School_period  $school_period
     * @return Response
     */
    public function edit(School_period $school_period)
    {
        return view('school_periods.edit', compact('school_period'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  School_period  $school_period
     * @return Response
     */
    public function update(Request $request, School_period $school_period)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  School_period  $school_period
     * @return Response
     */
    public function destroy(School_period $school_period)
    {
        //
    }
}
