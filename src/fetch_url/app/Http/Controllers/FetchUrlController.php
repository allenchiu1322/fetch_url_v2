<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FetchUrlController extends Controller
{
    //
    //

    public function index() {
        return view('fetch_url/index');
    }

    public function fetch_this(Request $request) {
        //todo 先全部丟controller之後再來想怎麼改
        $url = $request->url;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $ret = curl_exec($ch);
        curl_close($ch);
        return $ret;
    }
}
