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


        // User
        $accessToken = session()->get('access_token');

        if ($accessToken) {
            
            $url_api = Http::get($api_sv . '/api/v1/candidates/profile');
    
            $response_user = Http::withHeaders([
                'Authorization' => $accessToken,
            ])->get($url_api);
    
            $result_user = json_decode($response->body());
    
            dd($response_user);
        }else{
            echo 'no';
        }



        // return view('pages.home', compact('paginatedItems'));
    }
}
