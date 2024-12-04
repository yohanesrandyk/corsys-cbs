<?php

namespace App\Http\Controllers;

use App\Helpers\HttpHelper;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    private function handleApiResponse($status)
    {
        switch ($status) {
            case '00':
                return ['status' => 'success', 'message' => 'Login successful, redirecting to the dashboard.'];
            case '01':
                return ['status' => 'error', 'message' => 'User ID not found. Please check your credentials.'];
            case '02':
                return ['status' => 'error', 'message' => 'Incorrect password. Please try again.'];
            default:
                return ['status' => 'error', 'message' => 'An unexpected error occurred. Please try again later.'];
        }
    }

    private function getDatabaseName($selectedDatabase)
    {
        switch ($selectedDatabase) {
            case 'live_system':
                return '001';
            case 'cetak':
                return '002';
            case 'bulanan':
                return '003';
            default:
                return '';
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'database' => 'required|in:live_system,cetak,bulanan',
            'userid' => 'required|string',
            'password' => 'required|string',
        ]);


        $data = [
            'userid' => $request->input('userid'),
            'password' => $request->input('password'),
            'database' => $this->getDatabaseName($request->input('database'))
        ];


        try {
            $response = HttpHelper::http_post('http://servercorsys:8090/api-server-corsys-cbs/login', $data);
            $result = $this->handleApiResponse($response['status']);

            if ($result['status'] === 'success') {
                return redirect()->route('dashboard');
            } else {
                session()->flash('error', $result['message']);
                return redirect()->back();
            }
        } catch (\Exception $e) {
            session()->flash('error', 'An error occurred. Please try again later.');
            return redirect()->back();
        }
    }
}
