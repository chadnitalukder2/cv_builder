<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CVController extends Controller
{
    public function index()
    {
        return CV::all();
    }

    public function store(Request $request)
    {
        return CV::create($request->all());
    }

    public function show($id)
    {
        return CV::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $cv = CV::findOrFail($id);
        $cv->update($request->all());
        return $cv;
    }

    public function destroy($id)
    {
        return CV::destroy($id);
    }

    public function generatePdf($id)
{
    $cv = Cv::findOrFail($id);
    $pdf = Pdf::loadView('pdf.cv', ['cv' => $cv]);
    return $pdf->download('cv.pdf');
}
}
