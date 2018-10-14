<?php
/******** GET/POST *********/
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    http_response_code(200);
    // code...
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $postBody = file_get_contents('php://input');
    $postBody = json_decode($postBody);

    ////// BotXO
    //// customVariables data
    //print_r( $postBody->customVariables );

    //// extracted data
    //print_r( $postBody->extracted );

    if ($postBody) {
        http_response_code(200);
    } else {
        http_response_code(500);
    }
    
    //print_r($postBody);
    WriteToLog($postBody);

} else {
    http_response_code(405);
}

/******** Write to log file *********/
function WriteToLog($txt){
    $txt = str_replace('\"',"\n",json_encode($txt));
    $myfile = file_put_contents('log/logs.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
}
/*********************************/

?>
