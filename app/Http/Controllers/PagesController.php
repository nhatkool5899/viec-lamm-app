<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;

class PagesController extends Controller
{
    public function index(Request $request){

        $api_sv = "http://45.90.220.144:1403";
        $response = Http::get($api_sv . '/api/v1/jobs');
        $jobs = $response->json();
        $data_jobs = $jobs['data'];

        foreach ($data_jobs as &$job) {
            if (isset($job['expiredDay'])) {
                $job['expiredDay'] = Carbon::parse($job['expiredDay'])->format('d/m/Y');
            }
        }

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 12;
        $currentItems = array_slice($data_jobs, ($currentPage - 1) * $perPage, $perPage);
        $paginatedItems = new LengthAwarePaginator($currentItems, count($data_jobs), $perPage);

        if ($request->ajax()) {
            return response()->json([
                'jobs' => $paginatedItems->items(),
                'pagination' => (string) $paginatedItems->links('vendor.pagination.bootstrap-5')
            ]);
        }

        $paginatedItems->setPath($request->url());

        $new_jobs = array_slice($data_jobs, 0, 20);

        // Candidate
        $response_candi = Http::get($api_sv . '/api/v1/candidates');
        $candidate_data = $response_candi->json();
        $candidates = $candidate_data['data'];

        // User
        $accessToken = session()->get('access_token');
        $user = '';

        if ($accessToken) {
            
            $url_api = $api_sv . '/api/v1/candidates/profile';
    
            $response_user = Http::withHeaders([
                'Authorization' => $accessToken,
            ])->get($url_api);
    
            $result_user = json_decode($response_user->body());
    
            $user = $result_user->data;
        }

        return view('pages.home', compact('paginatedItems', 'user', 'new_jobs','candidates'));
    }

    public function profile(Request $request){

        $api_sv = "http://45.90.220.144:1403";

        // User
        $accessToken = session()->get('access_token');
        $user = '';

        if ($accessToken) {
            
            $url_api = $api_sv . '/api/v1/candidates/profile';
    
            $response_user = Http::withHeaders([
                'Authorization' => $accessToken,
            ])->get($url_api);
    
            $result_user = json_decode($response_user->body());
    
            $user = $result_user->data;
        }



        return view('pages.profile', compact('user'));
    }

    public function job_details($slug){

        $api_sv = "http://45.90.220.144:1403";

        // User
        $accessToken = session()->get('access_token');
        $user = '';

        if ($accessToken) {
            
            $url_api = $api_sv . '/api/v1/candidates/profile';
    
            $response_user = Http::withHeaders([
                'Authorization' => $accessToken,
            ])->get($url_api);
    
            $result_user = json_decode($response_user->body());
    
            $user = $result_user->data;
        }

        // Jobs details
        $response = Http::get($api_sv . '/api/v1/jobs/details/'. $slug);
        $data = $response->json();
        $job = $data['data'];;

        return view('pages.job-details', compact('user', 'job'));
    }

    public function company_details(Request $request){

        $api_sv = "http://45.90.220.144:1403";

        // User
        $accessToken = session()->get('access_token');
        $user = '';

        if ($accessToken) {
            
            $url_api = $api_sv . '/api/v1/candidates/profile';
    
            $response_user = Http::withHeaders([
                'Authorization' => $accessToken,
            ])->get($url_api);
    
            $result_user = json_decode($response_user->body());
    
            $user = $result_user->data;
        }

        return view('pages.company-details', compact('user'));
    }

    public function candidate(Request $request){

        $api_sv = "http://45.90.220.144:1403";

        // User
        $accessToken = session()->get('access_token');
        $user = '';

        if ($accessToken) {
            
            $url_api = $api_sv . '/api/v1/candidates/profile';
    
            $response_user = Http::withHeaders([
                'Authorization' => $accessToken,
            ])->get($url_api);
    
            $result_user = json_decode($response_user->body());
    
            $user = $result_user->data;
        }

        return view('pages.candidate', compact('user'));
    }
}
