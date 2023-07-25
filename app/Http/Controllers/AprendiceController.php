<?php

namespace App\Http\Controllers;

use App\Ficha;
use App\Programa;
use App\Aprendice;
use Illuminate\Http\Request;

/**
 * Class AprendiceController
 * @package App\Http\Controllers
 */
class AprendiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Cargar los aprendices con la relación 'programa'
        $aprendices = Aprendice::with('programa')->paginate();

        return view('aprendice.index', compact('aprendices'))
            ->with('i', (request()->input('page', 1) - 1) * $aprendices->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aprendice = new Aprendice();
        $fichas = Ficha::all(); // Obtener todas las fichas disponibles
        $programas = Programa::pluck('nombre', 'id'); // Obtener todos los programas disponibles

        return view('aprendice.create', compact('aprendice', 'fichas', 'programas'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Aprendice::$rules);

        $aprendice = Aprendice::create($request->all());

        return redirect()->route('aprendice.index')
            ->with('success', 'Aprendice created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aprendice = Aprendice::find($id);

        return view('aprendice.show', compact('aprendice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aprendice = Aprendice::findOrFail($id);
        $fichas = Ficha::all(); // Obtener todas las fichas disponibles
        $programas = Programa::pluck('nombre', 'id'); // Obtener todos los programas disponibles

        return view('aprendice.edit', compact('aprendice', 'fichas', 'programas'));
    }


    /**s
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Aprendice $aprendice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aprendice $aprendice)
    {
        request()->validate(Aprendice::$rules);

        $aprendice->update($request->all());

        return redirect()->route('aprendice.index')
            ->with('success', 'Aprendice updated successfully');
    }


    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $aprendice = Aprendice::find($id)->delete();

        return redirect()->route('aprendice.index')
            ->with('success', 'Aprendice deleted successfully');
    }
}
