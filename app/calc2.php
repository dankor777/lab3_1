<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

function getParams(&$kwota,&$oprocentowanie,&$lata){
	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$oprocentowanie = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;
	$lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;	
}


// sprawdzenie, czy parametry zostały przekazane
function validate(&$kwota, &$oprocentowanie, &$lata){
    if ( ! (isset($kwota) && isset($oprocentowanie) && isset($lata))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
        // teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
            return false;
}   
    
    if ( $kwota == "") {
	$messages [] = 'Nie podano kwoty';
    }
    if ( $oprocentowanie == "") {
        $messages [] = 'Nie podano oprocentowania';}

    if ( $lata == "")  {
	$messages [] = 'Nie podano okresu';
    }
if (empty ( $messages )) {return true;}
    // sprawdzenie, czy $x i $y są liczbami całkowitymi
    if (! is_numeric( $kwota )) {
            $messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
    if (! is_numeric( $oprocentowanie )) {
            $messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}
    if (! is_numeric( $lata )) {
            $messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}
}

// 3. wykonaj zadanie jeśli wszystko w porządku

function process(&$kwota, &$oprocentowanie, &$lata, &$result)
{
    $miesiace = $lata * 12;
    $y = 1 + ($oprocentowanie / 100 / 12);
    $do_wzoru = (pow($y,$miesiace));
    $result = $kwota * $do_wzoru * ($y - 1) / ($do_wzoru - 1);

}

$kwota = null;
$oprocentowanie = null;
$lata = null;
$result = null;
$messages = array();


getParams($kwota, $oprocentowanie, $lata);
if (validate($kwota, $oprocentowanie, $lata, $messages)) {
    process($kwota, $oprocentowanie, $lata, $result);
}




include 'calc_view.php';