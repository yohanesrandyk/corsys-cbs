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
            'postgre' => '001',
            'oracle' => '002',
            'bulanan' => '003',
            default => '',
        };
    }

    public function login(Request $request)
{
    // Validate input
    $request->validate([
        'database' => 'required|in:postgre,oracle,bulanan',
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
                Session::put('userid', $request->input('userid'));  // Store the userid
                Session::put('password', $request->input('password'));  // Store the password
                Session::put('database', $this->getDatabaseName($request->input('database')));  // Store the selected database

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


    public function showLoginPage()
    {
        $dayOfWeek = date('N'); // Get numeric representation of the day of the week (1 for Monday through 7 for Sunday)

        // Map days to CSS class names
        $BodyClasses = [
            1 => 'body_monday',
            2 => 'body_tuesday',
            3 => 'body_wednesday',
            4 => 'body_thursday',
            5 => 'body_friday',
            6 => 'body_saturday',
            7 => 'body_sunday'
        ];

        $LoginBoxClasses = [
            1 => 'loginbox_monday',
            2 => 'loginbox_tuesday',
            3 => 'loginbox_wednesday',
            4 => 'loginbox_thursday',
            5 => 'loginbox_friday',
            6 => 'loginbox_saturday',
            7 => 'loginbox_sunday'
        ];

        $ButtonClasses = [
            1 => 'button_monday',
            2 => 'button_tuesday',
            3 => 'button_wednesday',
            4 => 'button_thursday',
            5 => 'button_friday',
            6 => 'button_saturday',
            7 => 'button_sunday'
        ];

        $BodyBackgroundClass = $BodyClasses[$dayOfWeek];
        $LoginBoxBackgroundClass = $LoginBoxClasses[$dayOfWeek];
        $ButtonBackgroundClass = $ButtonClasses[$dayOfWeek];

        return view('login', compact('BodyBackgroundClass', 'LoginBoxBackgroundClass', 'ButtonBackgroundClass')); // Pass variable to view
    }
}
