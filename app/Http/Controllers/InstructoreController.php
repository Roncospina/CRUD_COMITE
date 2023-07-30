<?php

namespace App\Http\Controllers;

use App\Area;
use App\Instructore;
use Illuminate\Http\Request;

/**
 * Class InstructoreController
 * @package App\Http\Controllers
 */
class InstructoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructores = Instructore::paginate();

        return view('instructore.index', compact('instructores'))
            ->with('i', (request()->input('page', 1) - 1) * $instructores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all();
        $instructore = new Instructore();
        return view('instructore.create', compact('instructore','areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Instructore::$rules);

        $instructore = Instructore::create($request->all());

        return redirect()->route('instructore.index')
            ->with('success', 'Instructore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $instructore = Instructore::find($id);

        return view('instructore.show', compact('instructore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
    $instructore = Instructore::find($id);
    $areas = Area::all();

    return view('instructore.edit', compact('instructore', 'areas'));
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Instructore $instructore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instructore $instructore)
    {
        request()->validate(Instructore::$rules);

        $instructore->update($request->all());

        return redirect()->route('instructore.index')
            ->with('success', 'Instructore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $instructore = Instructore::find($id)->delete();

        return redirect()->route('instructore.index')
            ->with('success', 'Instructore deleted successfully');
    }
}
