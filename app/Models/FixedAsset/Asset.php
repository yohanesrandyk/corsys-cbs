<?php

namespace App\Models\FixedAsset;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Asset extends Model
{
    use HasFactory;
    public static function db($conn)
    {
        $instance = new static;
        $instance->setConnection($conn);
        return $instance;
    }

    public function lastNoref($kdcab)
    {
        $sql = DB::table('retsit')->selectRaw("MAX(NOREF) as TERAKHIR")->unionAll(DB::table('retsito')->selectRaw("MAX(NOREF) as TERAKHIR"))->whereRaw("MID(NOREF,0,16) = '" . "FIX-" . $kdcab . "-" . date("dmY") . "'")->get();
        // $sql = DB::select("SELECT MAX(NOREF) TERAKHIR FROM(
        //     SELECT NOREF FROM RETSIT WHERE MID(NOREF,0,16) = '" . "FIX-" . $kdcab . "-" . date("dmY") . "'
        //     UNION ALL
        //     SELECT NOREF FROM RETSITO WHERE MID(NOREF,0,16) = '" . "FIX-" . $kdcab . "-" . date("dmY") . "')");
        // $row = $sql->row();
        $lastID = $sql[0]->terakhir;
        $lastNoUrut = substr($lastID, 16);
        if (empty($lastNoUrut)) {
            $lastNoUrut = '00000';
        }
        $nextNoUrut = $lastNoUrut + 1;
        $noref = "FIX-" . $kdcab . "-" . date("dmY") . sprintf("%04s", $nextNoUrut);
        return $noref;
    }


    public function getBarcode($kdcab, $kdid)
    {
        $sql = DB::select("SELECT MAX(QRCODE) TERAKHIR
        FROM(
        SELECT QRCODE FROM RETSIT
        WHERE MID(RETSIT.QRCODE,2,3) = '" . $this->kdcab . "' AND MID(RETSIT.QRCODE,5,3)  = '" . substr($kdid, 0, 3) . "'
        UNION ALL
        SELECT QRCODE FROM RETSITO
        WHERE MID(RETSITO.QRCODE,2,3) = '" . $this->kdcab . "' AND MID(RETSITO.QRCODE,5,3)  = '" . substr($kdid, 0, 3) . "'
        )");
        $row = $sql[0];
        $lastID = $row->terakhir;
        $lastNoUrut = substr($lastID, 7, 5);
        if (empty($lastNoUrut)) {
            $lastNoUrut = '00000';
        }
        $next = $lastNoUrut + 1;
        $nextID = sprintf("%05s", $next);
        $KODENYA = "1" . $this->kdcab . substr($kdid, 0, 3) . $nextID . "";
        $ean = 0;
        for ($i = 0; $i < 12; $i++) {
            $multiplier = ($i % 2 == 0) ? 1 : 3;
            $ean += substr($KODENYA, $i, 1) * $multiplier;
        }
        $sisa = $ean % 10;
        if ($sisa == 0) {
            $sisa = 10;
        }
        $checksum = 10 - $sisa;
        $KODENYA = "1" . $this->kdcab . substr($kdid, 0, 3) . $nextID . $checksum . "";
        return $KODENYA;
    }

    public function listApproval($kdcab)
    {
        $sql = "SELECT RETSITO.MERK MERK,RETSITO.NOAC,RETSITO.NOREF,RETSITO.NOID,RETSITO.TCD,RETSITO.KDID,RETSITO.KET,RETSITO.TGLVAL,RETSITO.JKWKT,RETSITO.KDCAB,RETSITO.NIK,RETSITO.DEPT,RETSITO.NILAI,RETSITO.SISAAMOR,TBLTCD.TNM,SANDI_BI.KETERANGAN,SHDBLC.ALIASNM CNM,RETSITO.STATUS,RETSITO.STSSI,RETSITO.FILE_UPLOAD,AMOR_PENDING,SISAAMOR_SBL,AMOR_PENDINGSBL,KONDISI.KONDISI,KONDISI.ID,DEPARTMENT.DESCRIPTION,KRWPNJM.NAMA_LENGKAP,RETSITO.ALASAN,RETSITO.QRCODE,RETSITO.USRID,RETSITO.NLPERUBAHAN
		FROM RETSITO INNER JOIN TBLTCD ON RETSITO.TCD = TBLTCD.TRN_CODE
		LEFT OUTER JOIN SANDI_BI ON RETSITO.KDID = SANDI_BI.KD_SANDI AND KD_BI = 'SI'
		LEFT OUTER JOIN SHDBLC ON RETSITO.NOAC = SHDBLC.NOAC
		LEFT OUTER JOIN KONDISI ON RETSITO.STSSI = KONDISI.ID
		LEFT OUTER JOIN DEPARTMENT ON RETSITO.DEPT = DEPARTMENT.DEPTCODE
		LEFT OUTER JOIN KRWPNJM ON RETSITO.NIK = KRWPNJM.NIK
		WHERE RETSITO.KDCAB = '" . $kdcab . "'
		ORDER BY RETSITO.QRCODE ASC";
        $que = DB::select($sql);
        return $que;
    }

    // Index List Asset
    public function listAsset($kdcab = '001')
    {
        $sql = "SELECT RETSIT.MERK,RETSIT.NOREF,RETSIT.NOID,RETSIT.TCD,RETSIT.KDID,RETSIT.KET,RETSIT.TGLVAL,RETSIT.JKWKT,RETSIT.KDCAB,RETSIT.NIK,RETSIT.DEPT,RETSIT.NILAI,RETSIT.SISAAMOR,TBLTCD.TNM,SANDI_BI.KETERANGAN,SHDBLC.ALIASNM CNM,RETSIT.STATUS,RETSIT.STSSI,RETSIT.FILE_UPLOAD,AMOR_PENDING,SISAAMOR_SBL,AMOR_PENDINGSBL,KONDISI.KONDISI,KONDISI.ID,DEPARTMENT.DESCRIPTION,KRWPNJM.NAMA_LENGKAP,RETSIT.QRCODE,RETSIT.USRID,TBLTCD.TRNKOREKSI, RETSIT.NLPERUBAHAN
		FROM RETSIT INNER JOIN TBLTCD ON RETSIT.TCD = TBLTCD.TRN_CODE
		LEFT OUTER JOIN SANDI_BI ON RETSIT.KDID = SANDI_BI.KD_SANDI AND KD_BI = 'SIA'
		LEFT OUTER JOIN SHDBLC ON RETSIT.NOAC = SHDBLC.NOAC
		LEFT OUTER JOIN KONDISI ON RETSIT.STSSI = KONDISI.ID
		LEFT OUTER JOIN DEPARTMENT ON RETSIT.DEPT = DEPARTMENT.DEPTCODE
		LEFT OUTER JOIN KRWPNJM ON RETSIT.NIK = KRWPNJM.NIK
		WHERE RETSIT.KDCAB = '" . $kdcab . "' and RETSIT.STATUS <> '4' ";
        $que = DB::select($sql);
        return $que;
    }

    public function getAssetByID($kdcab, $barcode)
    {
        $sql = "SELECT RETSIT.MERK MERK,RETSIT.NOREF,RETSIT.NOID,RETSIT.TCD,RETSIT.KDID,RETSIT.KET,RETSIT.TGLVAL,RETSIT.JKWKT,RETSIT.KDCAB,RETSIT.NIK,RETSIT.DEPT,RETSIT.NILAI,RETSIT.SISAAMOR,TBLTCD.TNM,X.KETERANGAN KET_KDID,RETSIT.STATUS,RETSIT.STSSI,RETSIT.FILE_UPLOAD,AMOR_PENDING,SISAAMOR_SBL,AMOR_PENDINGSBL,KONDISI.KONDISI,KONDISI.ID,DEPARTMENT.DESCRIPTION NMDEPARTMENT,KRWPNJM.NAMA_LENGKAP,RETSIT.QRCODE,RETSIT.USRID,RETSIT.CCY,CURRENCY.DESCRIPTION MATA_UANG,RETSIT.TGLBEBAN,RETSIT.JENIS_HARTA,Y.KETERANGAN KET_JENIS_HARTA,CABANG.NM_CABANG, RETSIT.NLPERUBAHAN, RETSIT.DUPD, RETSIT.OTR, RETSIT.DOTR, RETSIT.NOGL_BANK, RETSIT.KD_FILTER
		FROM RETSIT INNER JOIN TBLTCD ON RETSIT.TCD = TBLTCD.TRN_CODE
		LEFT OUTER JOIN (SELECT * FROM SANDI_BI WHERE KD_BI ='SIA') X ON RETSIT.KDID = X.KD_SANDI
		LEFT OUTER JOIN (SELECT * FROM SANDI_BI WHERE KD_BI ='SIA') Y ON RETSIT.JENIS_HARTA = Y.KD_SANDI
		LEFT OUTER JOIN KONDISI ON RETSIT.STSSI = KONDISI.ID
		LEFT OUTER JOIN DEPARTMENT ON RETSIT.DEPT = DEPARTMENT.DEPTCODE
		LEFT OUTER JOIN KRWPNJM ON RETSIT.NIK = KRWPNJM.NIK
		INNER JOIN CURRENCY ON RETSIT.CCY = CURRENCY.CURRENCY
		INNER JOIN CABANG ON RETSIT.KDCAB = CABANG.KD_CABANG
		WHERE RETSIT.KDCAB = '" . $kdcab . "' and RETSIT.QRCODE = '" . $barcode . "' and RETSIT.STATUS <> '4' ";
        $que = DB::select($sql);
        if ($que) {
            return $que[0];
        } else {
            return abort(404);
        }
    }
}
