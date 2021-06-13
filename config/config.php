<?php
//echo $_SERVER["DOCUMENT_ROOT"];
// Osnovna podesavanja
define("ABSOLUTE_PATH", $_SERVER["DOCUMENT_ROOT"]."/NewsFeed");
//echo ABSOLUTE_PATH;

// Ostala podesavanja
define("ENV_FAJL", ABSOLUTE_PATH . "/config/.env");
define("LOG_FAJL", ABSOLUTE_PATH . "/data/log.txt");
define("TRENUTNO_AKTIVNI", ABSOLUTE_PATH . "/data/trenutnoAktivni.txt");
define("ERRORS_FILE", ABSOLUTE_PATH . "/data/errLog.txt");

// Podesavanja za bazu
define("SERVER", env("SERVER"));
define("DATABASE", env("DBNAME"));
define("USERNAME", env("USERNAME"));
define("PASSWORD", env("PASSWORD"));

zabeleziPristupStranici();

function env($naziv)
{
    $podaci = file(ENV_FAJL);
    $vrednost = "";
    foreach ($podaci as $key => $value) {
        $konfig = explode("=", $value);
        if ($konfig[0] == $naziv) {
            $vrednost = trim($konfig[1]);
        }
    }
    return $vrednost;
}

function zabeleziPristupStranici(){
    $open = fopen(LOG_FAJL, "a");
    if($open){
        $date = date('d-m-Y H:i:s');
        fwrite($open, "{$_SERVER['REQUEST_URI']}\t{$date}\t{$_SERVER['REMOTE_ADDR']}\t\n");
        fclose($open);
    }
}
