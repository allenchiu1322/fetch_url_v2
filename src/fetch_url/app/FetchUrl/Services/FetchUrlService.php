<?php
namespace App\FetchUrl\Services;

use PHPHtmlParser\Dom;

class FetchUrlService {

    private $prefix_url;

    public function fetch_url($url) {
        $this->prefix_url = substr($url, 0, strrpos($url, '/'));
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $url);
        return $this->modify_tags($res->getBody());
    }

    private function modify_tags($html) {
        $dom = new Dom;
        $dom->loadStr($html, []);

        //修改圖片網址
        $tags = $dom->find('img');
        foreach($tags as $k => $v) {
            $tag = $tags[$k]->getTag();
            $tag->setAttribute('src', $this->prefix_src($v->src));
        }

        //輸出結果
        $ret = $dom->outerHtml;
        return $ret;
    }

    private function prefix_src($src) {
        //確認此字串是否為完整網址
        if (strpos($src, '//') === FALSE) {
            $ret = $this->prefix_url . '/' . $src;
        } else {
            $ret = $src;
        }
        return $ret;
    }

}
