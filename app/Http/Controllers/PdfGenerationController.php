<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Barryvdh\Snappy\Facades\SnappyPdf;

/**
 * @group PDF
 * @authenticated
 */
class PdfGenerationController extends Controller
{
    /**
     * Print specified Card
     *
     * @queryParam "" Base64 encoded PDF No-example
     * @queryParam download download generated PDF No-example
     * @queryParam raw inline generated PDF (show in browser) No-example
     *
     * @param Request $request
     * @param Card $card
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
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
