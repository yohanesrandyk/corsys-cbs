<?php

namespace App\Http\Controllers\Retail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    //
    public function list()
    {
        return view('otorisasi.list');
    }

    public function view()
    {
        return view('otorisasi.view');
    }
}
