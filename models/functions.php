<?php
 function logErrors($error){
    $open = fopen(ERRORS_LOG, 'a');
    $write = $error."\t". date("d.m.Y H:i:s")."\n";
    fwrite($open, $write);
    fclose($open);
}
function recordAccessToPages() {
    $open = fopen(LOG_FAJL, "a");
    $write = basename($_SERVER["REQUEST_URI"]) . "\t" . date("d.m.Y H:i:s"
    ) . "\t" . $_SERVER["REMOTE_ADDR"] . "\n";
    fwrite($open, $write);
    fclose($open);
}

function pageTraffic(){
    $array = [];
    $sum = 0;
    $home = 0;
    $login = 0;
    $contact = 0;

    $last_day = strtotime("1 day ago");
    $file = file(LOG_FAJL);
    if(count($file)){
        foreach($file as $row){
            $parts = explode("\t", $row);

            $url = explode(".php", $parts[0]);

            $page = explode("&", $url[1]);

            if(strtotime($parts[1])>= $last_day){
                switch($page[0]){
                    case "?page=home":
                        $home++;
                        $sum++;
                        break;
                    case "?page=contact":
                        $contact++;
                        $sum++;
                        break;
                    case "?page=login":
                        $login++;
                        $sum++;
                        break;
                }
            }
        }
        if($sum > 0){
            $array["home"] = round($home * 100 / $sum, 2);
            $array["contact"] = round($contact * 100 / $sum, 2);
            $array["login"] = round($login * 100 / $sum, 2);
        }
    }
    return $array;
}
