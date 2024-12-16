<?php

namespace App\Http\Controllers;

use App\Helpers\FtpHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function showImage(Request $req)
    {
        $filename = $req->filename;
        if (!empty($filename) && Storage::disk('ftp')->exists($filename)) {
            $mimeType = Storage::disk('ftp')->mimeType($filename);
            if (strpos($mimeType, 'image/') === 0) {
                $fileContents = Storage::disk('ftp')->get($filename);
                return response($fileContents)
                    ->header('Content-Type', $mimeType);
            } else {
                return abort(404, 'File is not an image.');
            }
        } else {
            return abort(404, 'File not found.');
        }

    }

    public function downloadFile($encodedFilename)
    {
        $filename = base64_decode($encodedFilename);
        $ftpHelper = new FtpHelper();
        $path = '';
        return $ftpHelper->downloadFile($path, $filename);
    }
}
