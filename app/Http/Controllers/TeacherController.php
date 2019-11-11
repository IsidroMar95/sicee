<?php

namespace App\Http\Controllers;


use App\Http\Requests\TeacherRequest;
use App\User;
use App\Profession;
use App\Teacher;
use Illuminate\Http\Response;


class TeacherController extends Controller
{
    /**
     * TeacherController constructor.
     */
    public function __construct()
    {
        $this->middleware('can:profesores.create')->only(['create', 'store']);
        $this->middleware('can:profesores.index')->only('index');
        $this->middleware('can:profesores.edit')->only(['edit', 'update']);
        $this->middleware('can:profesores.show')->only('show');
        $this->middleware('can:profesores.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $teachers = Teacher::latest('created_at')->get();
        return view('teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $professions = Profession::all();
        return view('teachers.create', compact('professions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  TeacherRequest  $request
     * @return Response
     */
    public function store(TeacherRequest $request)
    {
        $user = User::create([
            'name' => $request['name'],
            'middleName' => $request['middleName'],
            'firstLastName' => $request['firstLastName'],
            'secondLastName' => $request['secondLastName'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'address' => $request['address'],
            'zipCode' => $request['zipCode'],
            'birthday' => $request['birthday'],
            'curp' => $request['curp'],
            'username' => $request['username'],
            'password' => bcrypt($request['password']),
        ]);

        $user->assignRoles('Profesor');

        $user->givePermissionTo('alumnos.index', 'profesores.index', 'carreras.index', 'horarios.index', 'periodo.index', 'grupos.index');

        $teacher = Teacher::create([
            'user_id' => $user->id,
            'profession_id' => $request['profession_id'],
            'start_date' => $request['start_date']
        ]);

        return redirect()
            ->route('profesores.index')
            ->with('info', 'El Profesor ha sido agregado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Teacher  $teacher
     * @return void
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Teacher  $teacher
     * @return Response
     */
    public function edit(Teacher $teacher)
    {
        $professions = Profession::all();
        return view('teachers.edit', compact('teacher', 'professions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TeacherRequest  $request
     * @param  Teacher  $teacher
     * @return Response
     */
    public function update(TeacherRequest $request, Teacher $teacher)
    {

        $foundUser = User::findOrFail($teacher->user->id);
        $foundteacher = Teacher::findOrFail($teacher->id);


        $foundUser->update([
            'name' => $request['name'],
            'middleName' => $request['middleName'],
            'firstLastName' => $request['firstLastName'],
            'secondLastName' => $request['secondLastName'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'address' => $request['address'],
            'zipCode' => $request['zipCode'],
            'birthday' => $request['birthday'],
            'curp' => $request['curp'],
            'username' => $request['username'],
            'password' => bcrypt($request['password']),
            'status' => $request['status'] ? true : false,
        ]);

        $foundteacher->update([
            'profession_id' => $request['profession_id'],
            'start_date' => $request['start_date']
        ]);

        return redirect()
            ->route('profesores.index')
            ->with('info', 'El Profesor ha sido editado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return void
     */
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->user()->delete();
        $teacher->delete();

        return redirect()
            ->route('profesores.index')
            ->with('info', 'El profesor ha sido eliminado exitosamente.');
    }
}
