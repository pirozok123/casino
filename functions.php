<?php

function sendBonuses($howmuch){

global $con;	

$randomSubject = range(1, 4);
shuffle($randomSubject);

$subjectname = spinName($randomSubject[0]);

$randomcash = rand(1,10);
$randomcredits = rand(1,100);

$query = "SELECT `id` FROM `users` WHERE bonuspacket = 0"; 

$result = mysqli_query($con,$query);

$timeforcash = time()  + 86400;
$timeforcredits = time()  + 3600;

while($row = mysqli_fetch_assoc($result)){
 
  $user_id = $row["id"]; 	
  $query = "UPDATE `users` SET `balance_time`  = '".$timeforcash."',  `balance` = `balance` + '".$randomcash."', credits = credits + ".$randomcredits.", credits_time = '".$timeforcredits."', subjects = '".$subjectname."', subjects_time = '".time()."' WHERE id ='".(int)$user_id."'"; 
	$result = mysqli_query($con,$query); 

    if($howmuch==1)	{
    /* Все бонусы добавлены */
    $query = "UPDATE `users` SET `bonuspacket` = 1 WHERE id ='".(int)$user_id."'"; 
	$result = mysqli_query($con,$query); 
    }
}
}

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