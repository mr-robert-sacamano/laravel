<?php

namespace App\Service;

class ApiCurl
{
    public function curlUrl($url, $opts = [])
    {
        $ch = curl_init();
        
        foreach ($opts as $key => $val) {
            curl_setopt($ch, $key, $val);
        }

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer ' . $_SERVER['APP_BOX_TOKEN']]);

        $response = new \stdClass();

        $data = curl_exec($ch);

        if (curl_error($ch)) {
            $data = ['msg' => 'An error occurred.'];
        }

        curl_close($ch);

        return $data;
    }  
}