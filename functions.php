<?php

function spinName($spinkey){
	switch ($spinkey) {
		case 1:
			$spinname = '10';
			break;
		case 2:
			$spinname = '25';
			break;
		case 3:
			$spinname = '50';
			break;
	    case 4:
			$spinname = '0';
			break;				
	}

  $spin = $spinname." бесплатных спинов";

  return $spin;

}

/*

function sendBonusToMail($howmuch){

$message = "Вы получили бонус в размере ".$howmuch;

mail('ivanvasiljev@test.ru', 'Вы получили бонус', $message);

}


function cashOut(){

	if ($_SERVER['REMOTE_ADDR'] != "xxx.xxx.xxx.xxx") die; 

    $url = 'Какой то сайт, например сбербанк';

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL,  'https://sberbank?api....');
    curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    $out = curl_exec($curl)
    $info = curl_getinfo($info);

    if(Если ответ верный то тогда..)


    curl_close($curl);

    echo $out;
}

*/