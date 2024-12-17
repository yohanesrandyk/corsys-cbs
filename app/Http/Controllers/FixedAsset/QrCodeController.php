<?php

namespace App\Http\Controllers\FixedAsset;

use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    //
    public function qrcode(Request $request)
    {
        $qrcode = QrCode::size(300)->merge('https://corsys.co.id/logo.png', 0.3, true)->generate('https://corsys.co.id');
        return response($qrcode)
            ->header('Content-Type', 'image/png');
    }

    public function scanner()
    {
        return view('qrcode.scanner');
    }
}
