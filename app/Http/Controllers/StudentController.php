<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Teacher;
use App\User;
use Illuminate\Http\Request;
use App\Student;
use App\originSchool;
use Illuminate\Http\Response;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:alumnos.create')->only(['create', 'store']);
        $this->middleware('can:alumnos.index')->only('index');
        $this->middleware('can:alumnos.edit')->only(['edit', 'update']);
        $this->middleware('can:alumnos.show')->only('show');
        $this->middleware('can:alumnos.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $students = Student::latest('created_at')->get();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StudentRequest  $request
     * @return Response
     */
    public function store(StudentRequest $request)
    {
      // dd($request->all());
        $user = User::create([
            'name'              => $request['name'],
            'middleName'        => $request['middleName'],
            'firstLastName'     => $request['firstLastName'],
            'secondLastName'    => $request['secondLastName'],
            'phone'             => $request['phone'],
            'email'             => $request['email'],
            'address'           => $request['address'],
            'zipCode'           => $request['zipCode'],
            'birthday'          => $request['birthday'],
            'curp'              => $request['curp'],
            'username'          => $request['username'],
            'password'          => bcrypt($request['password']),
        ]);

        $user->assignRoles('alumno');

        $user->givePermissionTo('carreras.index', 'horarios.index', 'periodo.index','materias.index');


        Student::create([
            'user_id'   => $user->id,
            'oldSchool' => $request['oldSchool'],
        ]);

        return redirect()
            ->route('alumnos.index')
            ->with('info', 'El alumno ha sido agregado correctamente.');
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
     * @param  Student  $student
     * @return Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StudentRequest  $request
     * @param  Student  $student
     * @return Response
     */
    public function update(StudentRequest $request, Student $student)
    {
        $foundUser = User::findOrFail($student->user->id);
        $foundstudent = Student::findOrFail($student->id);


        $foundUser->update([
            'name'              => $request['name'],
            'middleName'        => $request['middleName'],
            'firstLastName'     => $request['firstLastName'],
            'secondLastName'    => $request['secondLastName'],
            'phone'             => $request['phone'],
            'email'             => $request['email'],
            'address'           => $request['address'],
            'zipCode'           => $request['zipCode'],
            'birthday'          => $request['birthday'],
            'curp'              => $request['curp'],
            'username'          => $request['username'],
            'password'          => bcrypt($request['password']),
            'status' => $request['status'] ? true : false,
        ]);

        $foundstudent->update([
            'oldSchool' => $request['oldSchool']
        ]);

        return redirect()
            ->route('alumnos.index')
            ->with('info', 'El alumno ha sido editado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $student= Student::findOrFail($id);
        $student->user()->delete();
        $student->delete();

        return redirect()
            ->route('alumnos.index')
            ->with('info', 'El alumno ha sido eliminado exitosamente.');
    }
}
