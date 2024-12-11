<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public $db;
    public $dbConnect;
    public $kdcab;

    // construct
    public function __construct()
    {
        $this->kdcab = session()->get('kdcab') ?: '001';
        $this->dbConnect = session()->get('dbca') ?: 'live';
        $this->db = DB::connection($this->dbConnect);
    }

    // public function dashboard()
    // {
    //     $data = $this->getApiData();

    //     // Pass the data to the view
    //     return view('dashboard', compact('data'));
    // }
}
