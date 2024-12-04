<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpHelper
{
    public static function http_post($url, $data)
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post($url, $data);
        if ($response->successful()) {
            return $response->json();
        }
        return redirect()->back()->with('error', '');
    }
}
