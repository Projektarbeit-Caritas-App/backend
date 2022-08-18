<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Barryvdh\Snappy\Facades\SnappyPdf;

class PdfGenerationController extends Controller
{
    public function printCard(Request $request, Card $card)
    {
        $pdfCard = SnappyPdf::loadView('pdf.card', [
            'card' => Card::withCount('people')->find($card->id)
        ]);
        if ($request->has('download')) {
            return response($pdfCard->download(), 200);
        } else if ($request->has('raw')) {
            return response($pdfCard->inline(), 200);
        } else {
            return response([
                'file' => base64_encode($pdfCard->output())
            ], 200);
        }
    }
}
