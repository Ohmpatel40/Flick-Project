<?php 

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://imdb8.p.rapidapi.com/auto-complete?q=chhapaak",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: imdb8.p.rapidapi.com",
		"x-rapidapi-key: 31afc35303mshb509b663c116881p13a3e0jsned9cddabac38"
	],
]);

$response = curl_exec($curl);
$res = json_decode($response,true);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	print_r ($res);
}
?>