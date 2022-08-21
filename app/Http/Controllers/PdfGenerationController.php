<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group PDF
 * @authenticated
 */
class PdfGenerationController extends Controller
{
    /**
     * Print specified Card
     *
     * <small class="badge badge-purple">App authorization available</small>
     *
     * Generate PDF for the given Card-ID. You can control the response with the Query-Params listed below.
     * If none is given it will generate a json with the base64 encoded PDF-File.
     *
     * @queryParam download Download generated PDF No-example
     * @queryParam raw Show PDF in Browser No-example
     *
     * @param Request $request
     * @param Card $card
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function printCard(Request $request, Card $card): Response|Application|ResponseFactory
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
