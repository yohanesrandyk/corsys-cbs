<?php

namespace App\Http\Controllers\FixedAsset;

use App\Http\Controllers\Controller;
use App\Models\FixedAsset\Asset;
use Carbon\Carbon;
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
        $return = '
        <div class="d-flex flex-column">
            <div class="icon mb-4 d-flex justify-content-center">
                ' . $svg . '
            </div>
            <div class="row">
                <div class="col">
                Barcode
                </div>
                <div class="col">
                : ' . $aset->qrcode . '
                </div>
            </div>
            <div class="row">
                <div class="col">
                No Referensi
                </div>
                <div class="col">
                : ' . $aset->noref . '
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                Nama Aset
                </div>
                <div class="col">
                : ' . $aset->ket . '
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                Nilai
                </div>
                <div class="col">
                : ' . $aset->ccy . ' ' . number_format($aset->nilai, 2) . '
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                Sisa Amor 
                </div>
                <div class="col">
                : ' . $aset->ccy . ' ' . number_format($aset->nlperubahan, 2) . '
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                Posisi Cabang
                </div>
                <div class="col">
                : ' . $aset->nm_cabang . '
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                Penanggung Jawab
                </div>
                <div class="col">
                : ' . $aset->nama_lengkap . '
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                Jangka Waktu
                </div>
                <div class="col">
                : ' . $aset->jkwkt . '
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                Tanggal Buku
                </div>
                <div class="col">
                : ' . date_format(date_create($aset->tglval), 'd-m-Y') . '
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                Kondisi
                </div>
                <div class="col">
                : ' . $aset->kondisi . '
                </div>
            </div>
        </div>        
        ';
        return response($return);

    }
}
