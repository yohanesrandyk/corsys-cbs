<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        // Initialize pendingRowsCount to a default value
        $pendingRowsCount = 0;

        // Retrieve session values
        $userid = Session::get('userid');
        $password = Session::get('password');
        $database = Session::get('database');

        // Prepare the data for the API call
        $data = [
            'userid' => $userid,
            'password' => $password,
            'database' => $database,
        ];

        try {
            // Call the API to get the dashboard data
            $response = Http::withHeaders(['Content-Type' => 'application/json'])
                ->post('http://servercorsys:8090/api-server-corsys-cbs/dashboard/data', $data);

            if ($response->successful()) {
                $result = $response->json();  // Get the full response as an array

                // Check if 'data' and 'VIEW_PENDING_OTOR' exist in the response
                if (isset($result['data']['VIEW_PENDING_OTOR'])) {
                    $pendingRowsCount = count($result['data']['VIEW_PENDING_OTOR']);
                } else {
                    // Handle unexpected response structure
                    $pendingRowsCount = 'Unexpected response structure';
                }
            } else {
                // Handle unsuccessful API response based on status code
                switch ($response->status()) {
                    case 404:
                        $pendingRowsCount = 'Resource not found';
                        break;
                    case 500:
                        $pendingRowsCount = 'Server error';
                        break;
                    default:
                        $pendingRowsCount = 'Error fetching data: ' . $response->body();
                        break;
                }
            }
        } catch (\Exception $e) {
            // Handle any exceptions that occur during the API call
            $pendingRowsCount = 'Error fetching data (api): ' . $e->getMessage();
        }

        return view('dashboard', compact('pendingRowsCount'));  // Pass the result to the view
    }
}