<?php

namespace App\Http\Controllers;

use App\Models\Inventary;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;


/**
 * Class InventaryController
 * @package App\Http\Controllers
 */
class InventaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventaries = Inventary::paginate(10);

        return view('inventary.index', compact('inventaries'))
            ->with('i', (request()->input('page', 1) - 1) * $inventaries->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventary = new Inventary();
        return view('inventary.create', compact('inventary'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Inventary::$rules);

        $inventary = Inventary::create($request->all());

        return redirect()->route('inventaries.index')
            ->with('success', 'Inventary created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventary = Inventary::find($id);

        return view('inventary.show', compact('inventary'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventary = Inventary::find($id);

        return view('inventary.edit', compact('inventary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Inventary $inventary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventary $inventary)
    {
        request()->validate(Inventary::$rules);

        $inventary->update($request->all());

        return redirect()->route('inventaries.index')
            ->with('success', 'Inventary updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $inventary = Inventary::find($id)->delete();

        return redirect()->route('inventaries.index')
            ->with('success', 'Inventary deleted successfully');
    }

}
