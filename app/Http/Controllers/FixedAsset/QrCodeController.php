<?php

namespace App\Http\Controllers\FixedAsset;

use App\Http\Controllers\Controller;
use App\Models\FixedAsset\Asset;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    //
    public function qrcode(Request $request)
    {
        $qrcode = QrCode::size(300)
            ->merge('https://corsys.co.id/logo.png', 0.3, true)
            ->generate('https://corsys.co.id');
        return response($qrcode)
            ->header('Content-Type', 'image/png');
    }

    public function scanner()
    {
        return view('qrcode.scanner');
    }
    public function scanner2()
    {
        return view('qrcode.barcode');
    }

    public function getData(Request $request)
    {

        $barcode = $request->barcode;
        $svg = QrCode::size(250)
            ->style('round')
            // ->gradient(42, 64, 182, 30, 112, 233, 'vertical')
            ->generate(route('fixaset.barcode', $barcode));
        $aset = Asset::db($this->dbConnect)->getAssetByBarcode($barcode);
        // dd($aset);
        $return = '<div class="d-flex flex-column ">
                <div class="icon mb-4 d-flex justify-content-center">
                    ' . $svg . '
                </div>
                <div class="d-flex flex-column">
                    <span>Aset : ' . $aset->ket . '</span>
                    <span>Noref : ' . $aset->noref . '</span>
                    <span>Nilai Buku: ' . $aset->nilai . '</span>
                    <span>Nilai Amor : </span>
                    <span>Sisa Amor : ' . $aset->sisaamor . '</span>
                    <span>Posisi Cabang : ' . $aset->nm_cabang . '</span>
                </div>
            </div>        
        ';
        return response($return);

    }
}
