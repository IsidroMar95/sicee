<?php

namespace App\Http\Controllers;

use App\Career;
use App\Grade_level;
use App\School_period;
use App\Subject;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\SubjectRequest;

class SubjectController extends Controller
{

    /**
     * SubjectController constructor.
     */
    public function __construct()
    {
        $this->middleware('can:materias.create')->only(['create', 'store']);
        $this->middleware('can:materias.index')->only('index');
        $this->middleware('can:materias.edit')->only(['edit', 'update']);
        $this->middleware('can:materias.show')->only('show');
        $this->middleware('can:materias.destroy')->only('destroy');
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $subjects = Subject::allowed()->get();

        return view('subjects.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('subjects.create', [
            'schoolPeriods' => School_period::all(),
            'gradeLevels' => Grade_level::all(),
            'teachers' => Teacher::all(),
            'careers' => Career::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SubjectRequest  $request
     * @return Response
     */
    public function store(SubjectRequest $request)
    {
        Subject::create([
            'name' => $request['name'],
            'career_id' => $request['career_id'],
            'grade_level_id' => $request['grade_level_id'],
            'school_period_id' => $request['school_period_id'],
            'teacher_id' => $request['teacher_id'],
        ]);


        return redirect()
            ->route('materias.index')
            ->with('info', 'La materia ha sido agregada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Subject  $subject
     * @return Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Subject  $subject
     * @return Response
     */
    public function edit(Subject $subject)
    {
        return view('subjects.edit', [
            'schoolPeriods' => School_period::all(),
            'gradeLevels' => Grade_level::all(),
            'teachers' => Teacher::all(),
            'careers' => Career::all(),
            'subject' => $subject
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SubjectRequest  $request
     * @param  Subject  $subject
     * @return Response
     */
    public function update(SubjectRequest $request, Subject $subject)
    {
        $foundSubject = Subject::findOrFail($subject->id);


        $foundSubject->update([
            'name' => $request['name'],
            'career_id' => $request['career_id'],
            'grade_level_id' => $request['grade_level_id'],
            'school_period_id' => $request['school_period_id'],
            'teacher_id' => $request['teacher_id'],
            'status' => $request['status'] ? true : false,
        ]);


        return redirect()
            ->route('materias.index')
            ->with('info', 'La materia ha sido editada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Subject  $subject
     * @return Response
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
