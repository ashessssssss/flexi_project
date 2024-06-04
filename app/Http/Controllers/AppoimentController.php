<?php

namespace App\Http\Controllers;

use App\Models\Appoiment;
use Illuminate\Http\Request;

/**
 * Class AppoimentController
 * @package App\Http\Controllers
 */
class AppoimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appoiments = Appoiment::paginate(10);

        return view('appoiment.index', compact('appoiments'))
            ->with('i', (request()->input('page', 1) - 1) * $appoiments->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $appoiment = new Appoiment();
        return view('appoiment.create', compact('appoiment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Appoiment::$rules);

        $appoiment = Appoiment::create($request->all());

        return redirect()->route('appoiments.index')
            ->with('success', 'Appoiment created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appoiment = Appoiment::find($id);

        return view('appoiment.show', compact('appoiment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appoiment = Appoiment::find($id);

        return view('appoiment.edit', compact('appoiment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Appoiment $appoiment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appoiment $appoiment)
    {
        request()->validate(Appoiment::$rules);

        $appoiment->update($request->all());

        return redirect()->route('appoiments.index')
            ->with('success', 'Appoiment updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $appoiment = Appoiment::find($id)->delete();

        return redirect()->route('appoiments.index')
            ->with('success', 'Appoiment deleted successfully');
    }
}
