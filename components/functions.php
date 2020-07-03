<?php 
// Funcion generica para obtener datos del api
function request($SERVICE){
    $ENDPOINT = "http://localhost/ACRTest/api/v1/" . $SERVICE;
    $ch = curl_init($ENDPOINT);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = json_decode(curl_exec($ch));
    if(!curl_errno($ch))
    {
        $info = curl_getinfo($ch);
        if(is_object($result)){
            $result->responseCode = $info['http_code'];
        }
    }
    curl_close($ch);
    return $result;
}
?>