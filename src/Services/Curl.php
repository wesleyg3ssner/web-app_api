<?php 

namespace Src\Services;

class Curl
{
	public static function getConn($url)
	{
        $header = array(
            "User-Agent: wesleygessner",
            "Accept: application/json",
            "Content-Type: application/json"
        );

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_URL, $url);

        $api = curl_exec($ch);
        curl_close($ch);

        return $result = json_decode($api, true);
	}
}