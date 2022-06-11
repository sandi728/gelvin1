<?php

ulangi:

$TOKEN = "Ganti TOKEN";
$headers = array(
"Accept: application/json, text/plain, */*",
"Accept-Language: en-US,en;q=0.9,vi;q=0.8",
"Authorization: ",
"Cache-Control: no-cache",
"Connection: keep-alive",
"Cookie: sensorsdata2015jssdkcross=%7B%22distinct_id%22%3A%22180422ee620502-009cf8a021b6415-1734337f-2073600-180422ee623a70%22%2C%22first_id%22%3A%22%22%2C%22props%22%3A%7B%22%24latest_traffic_source_type%22%3A%22%E7%9B%B4%E6%8E%A5%E6%B5%81%E9%87%8F%22%2C%22%24latest_search_keyword%22%3A%22%E6%9C%AA%E5%8F%96%E5%88%B0%E5%80%BC_%E7%9B%B4%E6%8E%A5%E6%89%93%E5%BC%80%22%2C%22%24latest_referrer%22%3A%22%22%7D%2C%22identities%22%3A%22eyIkaWRlbnRpdHlfYW5vbnltb3VzX2lkIjoiMTgwNDIyZWU2MjA1MDItMDA5Y2Y4YTAyMWI2NDE1LTE3MzQzMzdmLTIwNzM2MDAtMTgwNDIyZWU2MjNhNzAiLCIkaWRlbnRpdHlfY29va2llX2lkIjoiMTgwZmVmMzBkOTExMjItMDQyOTc0ODQ1MWMwNWU4LTU0Mzc5NzEtMzI5MTYwLTE4MGZlZjMwZDkyYWIyIn0%3D%22%2C%22history_login_id%22%3A%7B%22name%22%3A%22%22%2C%22value%22%3A%22%22%7D%2C%22%24device_id%22%3A%22180422ee620502-009cf8a021b6415-1734337f-2073600-180422ee623a70%22%7D; languageCode=in",
"Host: app.oneaset.co.id",
"Pragma: no-cache",
"Referer: https://app.oneaset.co.id/finance/Finance/LandingPage?channel=web_OneAset_activity_financeinvite&referrerCode=PJHZ7&source=outside&ad=Ym09MiZjcD01Jmd1PW51bGwmdWM9MTAmdWU9MCZ1ZD0xODc3MDg5JnVhPTE0",
"Sec-Fetch-Dest: empty",
"Sec-Fetch-Mode: cors",
"Sec-Fetch-Site: same-origin",
"User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1",
"countryId: 1",
"languageId: 123",
"sentry-trace: c2ee642b0a244e88b1ea7f568116c905-8564a03ae51679f9-1",
);
$url = "https://app.oneaset.co.id/api/app/biz/activity/finc/activityInfo";
$res = curl($url,$headers,"get");
$js = json_decode($res,true);
$stock = $js["data"]["taskList"][5]["relationStatus"];
print_r($stock);
$hasil = "Reff Ada Buruan Gaskeun!!!";
if($stock !== 3){
    echo '[ '.date('H:i:s').' ] Stock Habis Gaes'.PHP_EOL;
    sleep(3); 
	goto ulangi;       
}else{
    echo '[ '.date('H:i:s').' ] Stock Ada'.PHP_EOL;
    sleep(1);

$chatid = "GANTI CHAT ID";
$pesan = "$hasil";
$method = "sendMessage";
$url = "https://api.telegram.org/bot" . $TOKEN . "/". $method;	
$post = ['chat_id' => $chatid, 'text' => $pesan];
$header = [ "X-Requested-With: XMLHttpRequest", "User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36" ];
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post );
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$datas = curl_exec($ch); $error = curl_error($ch);
$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch); $debug['text'] = $pesan; $debug['respon'] = json_decode($datas, true);
}

goto ulangi; 
function curl($url, $header, $mode="get", $data=0)
	{
	if ($mode == "get" || $mode == "Get" || $mode == "GET")
		{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		$result = curl_exec($ch);
		}
		elseif ($mode == "poss" || $mode == "Poss" || $mode == "POSS")
		{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_HEADER, true);
		$result = curl_exec($ch);
		}
	elseif ($mode == "post" || $mode == "Post" || $mode == "POST")
		{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		$result = curl_exec($ch);
		}
	elseif ($mode == "patch" || $mode == "PATCH" || $mode == "Patch")
	   {
		$ch = curl_init($url);
         curl_setopt($ch, CURLOPT_URL, $url);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
         curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
         curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
         $result = curl_exec($ch);
		}
		elseif ($mode == "options" || $mode == "Options" || $mode == "OPTIONS")
		{
		$ch = curl_init($url);
         curl_setopt($ch, CURLOPT_URL, $url);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
         curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'OPTIONS');
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
         curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
         $result = curl_exec($ch);
		}
		else
		{
		$result = "Not define";
		}
	return $result;
	}

?>