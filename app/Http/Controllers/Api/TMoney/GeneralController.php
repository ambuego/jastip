<?php

namespace App\Http\Controllers\Api\TMoney;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;


class GeneralController extends Controller
{
    private $client;

public function __construct()
{
   $this->client = new Client();
}


public function emailCheck(Request $request, $email) {
   try {
       $response = $this->client->post(Config::get('tmoney.base_url').'/email-check', [
           'headers' => [
               'Authorization' => Config::get('tmoney.authorization'),
               'Accept' => 'application/json'
           ],
           'form_params' => [
               'userName' => $email,
               'terminal' => Config::get('tmoney.terminal'),
               'apiKey' => Config::get('tmoney.api_key')
           ]
       ]);
       $body = $response->getBody();
       $json = json_decode($body);
       return $this->responseSuccess($request, $json);
   } catch (BadResponseException $e) {
       return $this->responseError($request, $e);
   }
}


public function signUp(Request $request) {
   try {
       $response = $this->client->post(Config::get('tmoney.base_url').'/sign-up', [
       	'headers' => [
           'Authorization' => Config::get('tmoney.authorization'),
           'Accept' => 'application/json'
       ],
       'form_params' => [
           'accType' => 1.0,
           'fullName' => 'Ambu',
           'userName' => 'ambuego@gmail.com',
           'password' => '15M735new',
           'phoneNo' => '082293757754',
           'terminal' => Config::get('tmoney.terminal'),
           'apiKey' => Config::get('tmoney.api_key')
       ]
   ]);
       $body = $response->getBody();
       $json = json_decode($body);
       return $this->responseSuccess($request, $json);
   } catch (BadResponseException $e) {
       return $this->responseError($request, $e);
   }
}

public function tmoney_signature($email)
{
	$now = new \DateTime();
    $params = [
        'username' => $email,
        'dateTime' => $now->format('Y-m-d H:i:s'), 
        'terminal' => Config::get('tmoney.terminal'),
        'apiKey' => Config::get('tmoney.api_key'),
    ];
    $signature = implode('', $params);
    return $this->sha256($signature);
}

function sha256($string)
{
    $result = hash_hmac('sha256', $string, Config::get('tmoney.private_key'), false);
    return urlencode($result);
}


public function signIn(Request $request) {
   try {
   	$now = new \DateTime();
       $response = $this->client->post(Config::get('tmoney.base_url').'/sign-in', [
       	'headers' => [
           'Authorization' => Config::get('tmoney.authorization'),
           'Accept' => 'application/json'
       ],
       'form_params' => [
           'userName' => 'akbaranshory97@gmail.com',
           'password' => '15M735new',           
           'terminal' => Config::get('tmoney.terminal'),
           'apiKey' => Config::get('tmoney.api_key'),
           'datetime' => $now->format('Y-m-d H:i:s'),
           'signature' => $this->tmoney_signature('akbaranshory97@gmail.com'),
       ]
   ]);
       $body = $response->getBody();
       $json = json_decode($body);
       return $this->responseSuccess($request, $json);
   } catch (BadResponseException $e) {
       return $this->responseError($request, $e);
   }
}



public function emailVerification(Request $request, $activationCode) {
   try {
       $response = $this->client->post(Config::get('tmoney.base_url').'/email-verification', [
       	'headers' => [
           'Authorization' => Config::get('tmoney.authorization'),
           'Accept' => 'application/json'
       ],
       'form_params' => [
       		'code' => $activationCode,
        	'terminal' => Config::get('tmoney.terminal'),
        	'apiKey' => Config::get('tmoney.api_key')

       ]
   ]);
       $body = $response->getBody();
       $json = json_decode($body);
       return $this->responseSuccess($request, $json);
   } catch (BadResponseException $e) {
       return $this->responseError($request, $e);
   }
}



}




