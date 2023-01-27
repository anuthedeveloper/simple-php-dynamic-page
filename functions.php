<?php 
function ssl() {
    if ( isset($_SERVER['HTTPS']) && 
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) 
    && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' ) {
        $ssl = 'https';
    } else {
        $ssl = 'http';
    }

    return $ssl;
}


function appUrl() {
    $ssl = ssl();
    return ($ssl)
          . "://".$_SERVER['HTTP_HOST']
          . (dirname($_SERVER["SCRIPT_NAME"]) == DIRECTORY_SEPARATOR ? "" : "/")
          . trim(str_replace("\\", "/", dirname($_SERVER["SCRIPT_NAME"])), "/");
}