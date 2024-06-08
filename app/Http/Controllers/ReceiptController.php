<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;


/**
 * Class ReceiptController
 * @package App\Http\Controllers
 */
class ReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receipts = Receipt::paginate(10);

        return view('receipt.index', compact('receipts'))
            ->with('i', (request()->input('page', 1) - 1) * $receipts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $receipt = new Receipt();
        return view('receipt.create', compact('receipt'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Receipt::$rules);

        $receipt = Receipt::create($request->all());

        return redirect()->route('receipts.index')
            ->with('success', 'Receipt created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $receipt = Receipt::find($id);

        return view('receipt.show', compact('receipt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $receipt = Receipt::find($id);

        return view('receipt.edit', compact('receipt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Receipt $receipt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receipt $receipt)
    {
        request()->validate(Receipt::$rules);

        $receipt->update($request->all());

        return redirect()->route('receipts.index')
            ->with('success', 'Receipt updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $receipt = Receipt::find($id)->delete();

        return redirect()->route('receipts.index')
            ->with('success', 'Receipt deleted successfully');
    }
    public function downloadPdf()
    {
        $receipt = Receipt::all();

       view()->share('receipts.pdf',$receipt);

        $pdf = PDF::loadView('receipt.pdf', ['receipts' => $receipt]);

        return $pdf->download('receipt.pdf');
    }
}
