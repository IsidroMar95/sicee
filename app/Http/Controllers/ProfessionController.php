<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfessionRequest;
use App\Profession;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfessionController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:profesiones.create')->only(['create', 'store']);
        $this->middleware('can:profesiones.index')->only('index');
        $this->middleware('can:profesiones.edit')->only(['edit', 'update']);
        $this->middleware('can:profesiones.show')->only('show');
        $this->middleware('can:profesiones.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $professions = Profession::latest('created_at')->get();
        return view('professions.index', compact('professions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('professions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProfessionRequest  $request
     * @return void
     */
    public function store(ProfessionRequest $request)
    {
        $profession = Profession::create($request->all());
        return redirect()
            ->route('profesiones.index')
            ->with('info', 'La profesión ha sido agregada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Profession  $profession
     * @return void
     */
    public function show(Profession $profession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Profession  $profession
     * @return Response
     */
    public function edit(Profession $profession)
    {
        return view('professions.edit', compact('profession'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProfessionRequest  $request
     * @param  Profession  $profession
     * @return Response
     */
    public function update(ProfessionRequest $request, Profession $profession)
    {

        $prof = Profession::findOrFail($profession->id);

        $prof->fill($request->all());

        $prof->save();
        return redirect()
            ->route('profesiones.index')
            ->with('info', 'La profesión ha sido editado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */
    public function destroy($id)
    {
        $profession = Profession::findOrFail($id);
        $typeMsg = '';
        $msg = '';
        try {
            $profession->delete();
            $typeMsg = 'info';
            $msg = 'La profesión ha sido eliminada exitosamente.';
        } catch (QueryException $e) {
            if ($e->getCode() == "23000") {
                $typeMsg = 'error';
                $msg = 'No puedes eliminar la profesión relacionada con el profesor, elimina primero el profesor.';
            }
        }
        return redirect()
            ->route('profesiones.index')
            ->with($typeMsg, $msg);
    }
}
