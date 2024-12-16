<?php
namespace App\Helpers;
use Illuminate\Support\Facades\Storage;

class FtpHelper
{
  public function getFile($path, $filename)
  {
    if (Storage::disk('ftp')->exists($path . '/' . $filename)) {
      return Storage::disk('ftp')->get($path . '/' . $filename);
    }
  }

  public function downloadFile($path = '', $filename)
  {
    if (!empty($filename) && Storage::disk('ftp')->exists($filename)) {
      $fileContents = Storage::disk('ftp')->get($filename);
      $mimeType = Storage::disk('ftp')->mimeType($filename);
      // $mimeType = Storage::disk('ftp')->mimeType($filename);

      return response()->streamDownload(function () use ($fileContents) {
        echo $fileContents;
      }, basename($filename), [
        'Content-Type' => $mimeType,
        'Content-Disposition' => 'attachment; filename="' . basename($filename) . '"',
      ]);
    } else {
      return abort(404, 'File not found.');
    }
  }

  public function moveFile($src, $dest, $file)
  {
    if (Storage::disk('ftp')->exists($src . '/' . $file)) {
      Storage::disk('ftp')->move($src . '/' . $file, $dest . '/' . $file);
      return true;
    }
    return false;
  }

  public function deleteFile($path, $file)
  {
    //  ftp delete file
    if (Storage::disk('ftp')->exists($path . '/' . $file)) {
      Storage::disk('ftp')->delete($path . '/' . $file);
      return true;
    }
    return false;

  }

  public function renameFile($path, $filename, $newname)
  {
    //  ftp rename file with move
    if (Storage::disk('ftp')->exists($path . '/' . $filename)) {
      Storage::disk('ftp')->move($path . '/' . $filename, $path . '/' . $newname);
      return true;
    }
    return false;
  }

  public function copyFile($src, $dest, $file)
  {
    //  ftp copy file
    if (Storage::disk('ftp')->exists($src . '/' . $file)) {
      Storage::disk('ftp')->copy($src . '/' . $file, $dest . '/' . $file);
      return true;
    }
    return false;
  }
}
