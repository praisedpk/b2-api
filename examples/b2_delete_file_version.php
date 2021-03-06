<?php
require "../b2_api.php"; // Include the API wrapper

$account_id = ""; // Account ID, obtained from your B2 bucket page
$app_key    = ""; // Application ID, obtained from your B2 bucket page
$file_id    = ""; // The ID of the file you want to delete
$file_name  = ""; // The file name of the file you want to delete

$b2 = new b2_api; // Create a new instance of b2_api
$auth = $b2->b2_authorize_account($account_id, $app_key); // Runs b2_authorize_account
$output = $b2->b2_delete_file_version($auth->apiUrl, $auth->authorizationToken, $file_id, $file_name); // Runs b2_delete_file_version

echo "b2_delete_file_version\n\n";
var_dump($output);