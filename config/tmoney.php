<?php
// file /config/tmoney.php
$production =  "https://prodapi-app.tmoney.co.id/api/";
$sandbox = "https://api-sandbox-app.tmoney.co.id/api/"; 
$accessTokenProduction = "T-MONEY_95466ce292cdb5a606a113614086c3a9"; // use your access token prefixed by T-MONEY_
$accessTokenSandbox = "T-MONEY_95466ce292cdb5a606a113614086c3a9";


return [
   'base_url' => $sandbox,
   'terminal' => 'MAINAPI-TEST', // get your own production terminal by contacting tmoney representative
   'api_key' => 'T-MONEY_PUBLICKEYSANDBOX',
   'authorization' => 'Basic b1dlZjFEd0FDTlhvNVlmeWZ3dE5JVWpHT2VJYTo5ZDhhWUVqTnJGenZFWDhmUzlqQnNHSUhCSVVh',
   'private_key' => 'T-MONEY_PUBLICKEYSANDBOX'
];
