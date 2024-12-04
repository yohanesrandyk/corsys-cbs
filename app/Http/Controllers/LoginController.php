<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    private function handleApiResponse($status)
    {
        switch ($status) {
            case '00':
                return ['status' => 'success', 'message' => 'Login successful. Redirecting...'];
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
        return match ($selectedDatabase) {
            'live_system' => '001',
            'cetak' => '002',
            'bulanan' => '003',
            default => '',
        };
    }

    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'database' => 'required|in:live_system,cetak,bulanan',
            'userid' => 'required|string',
            'password' => 'required|string',
        ]);

        $data = [
            'userid' => $request->input('userid'),
            'password' => $request->input('password'),
            'database' => $this->getDatabaseName($request->input('database')),
        ];

        try {
            // Make the API request to validate credentials
            $response = Http::withHeaders(['Content-Type' => 'application/json'])
                ->post('http://servercorsys:8090/api-server-corsys-cbs/login', $data);

            if ($response->successful()) {
                $responseData = $response->json();
                $result = $this->handleApiResponse($responseData['status']);

                if ($result['status'] === 'success') {
                    // Set session for successful login
                    Session::put('authenticated', true);  // Store session variable to track authentication
                    return redirect()->route('layout'); // Redirect to layout page
                } else {
                    session()->flash('error_message', $result['message']);
                    return redirect()->route('login'); // Redirect back to login with error message
                }
            } else {
                session()->flash('error_message', 'Unable to connect to the server. Please try again later.');
                return redirect()->route('login');
            }
        } catch (\Exception $e) {
            session()->flash('error_message', 'An error occurred. Please try again later.');
            return redirect()->route('login');
        }
    }
}
