<?php
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://swoft.org/docs
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

    /**
     * @param $url
     * @param $post_data
     * @param array $header
     * @return mixed
     */
     function httpPost($url, $post_data, $header = []) {
        $curl = curl_init();
        if(is_array($post_data) && array_key_exists('image',$post_data)){
            $post_data['image'] =  new \CURLFile(realpath($post_data['image']), $post_data['type'], $post_data['name']);
        }
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        if ($header) curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 0);
        /** @noinspection CurlSslServerSpoofingInspection */
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        /** @noinspection CurlSslServerSpoofingInspection */
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_REFERER, $url);
        curl_setopt($curl, CURLOPT_TIMEOUT, 120);
        $UserAgent = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36';
        curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);
        $data = curl_exec($curl);
    //        file_put_contents( "../runtime/ruwechat.txt", "curl_post_log_rs" . date('Y-m-d H:i:s', time()) . "\r\n" . json_encode($data)."\r\n", FILE_APPEND);
        return $data;
    }

    function httpGet($url, $header = [], $follow = '') {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        if ($header) {
            curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        /** @noinspection CurlSslServerSpoofingInspection */
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        /** @noinspection CurlSslServerSpoofingInspection */
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        if ($follow) {
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, $follow);
        }
        $data = curl_exec($curl);


        curl_close($curl);
        return $data;
    }