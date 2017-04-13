<?php

namespace App\Http\Controllers;

use App\FetchUrl\Services\FetchUrlService;

use Illuminate\Http\Request;

class FetchUrlController extends Controller
{
    protected $fetchUrlService;

    public function __construct() {
        $this->fetchUrlService = new FetchUrlService;
    }

    public function index() {
        return view('fetch_url/index');
    }

    public function fetch_this(Request $request) {
        $url = $request->url;
        return $this->fetchUrlService->fetch_url($url);
        /*
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $ret = curl_exec($ch);
        curl_close($ch);
        return $ret;
         */
    }
}
