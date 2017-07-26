<?php
	//PHP array containing forenames.
$names = array(
    'Christopher',
    'Ryan',
    'Ethan',
    'John',
    'Zoey',
    'Sarah',
    'Michelle',
    'Samantha',
    'John',
    'Harry',
    'Ross',
    'Bruce',
    'Cook',
    'Carolyn',
    'Morgan',
    'Albert',
    'Walker',
    'Randy',
    'Reed',
    'Larry',
    'Barnes',
    'Lois',
    'Wilson',
    'Jesse',
    'Campbell',
    'Ernest',
    'Rogers',
    'Theresa',
    'Patterson',
    'Henry',
    'Simmons',
    'Michelle',
    'Perry',
    'Frank',
    'Butler',
    'Shirley',
    'CJ',
    'Big Smoke'
);
 
//PHP array containing surnames.
$surnames = array(
    'Walker',
    'Thompson',
    'Anderson',
    'Johnson',
    'Tremblay',
    'Peltier',
    'Cunningham',
    'Simpson',
    'Mercado',
    'Sellers',
    'Ruth',
    'Jackson',
    'Debra',
    'Allen',
    'Gerald',
    'Harris',
    'Raymond',
    'Carter',
    'Jacqueline',
    'Torres',
    'Joseph',
    'Nelson',
    'Carlos',
    'Sanchez',
    'Ralph',
    'Clark',
    'Jean',
    'Alexander',
    'Stephen',
    'Roberts',
    'Eric',
    'Long',
    'Amanda',
    'Scott',
    'Teresa',
    'Diaz',
    'Wanda',
    'Thomas'
);

$times = array(
    'Day',
    'Month',
    'Year',
);
$plans = array(
	'Dirt',
	'Grass',
	'Iron',
	'Lapis',
	'Redstone',
	'GOLD',
	'DIAMOND',
	'OBSIDIAN',
	'BEDROCK',
	'OVERKILL'
);

$emails = array(
	'@yahoo.com',
	'@gmail.com',
	'@mail.com',
	'@yandex.mail',
	'@outlook.com',
	'@protonmail.ch',
	'@aol.com',
	'@goat.si',
	'@ruski.blyat',
	'@420blaze.it',
	'@swag.si',
	'@nice.try',
	'@fuck.it',
	'@memeware.net',
	'@national.shitposting.agency',
	'@airmail.cc'
);

while (true) {

$random_name = $names[mt_rand(0, sizeof($names) - 1)];
 
$random_surname = $surnames[mt_rand(0, sizeof($surnames) - 1)];

$random_time = $times[mt_rand(0, sizeof($times) - 1)];
$random_pack = $plans[mt_rand(0, sizeof($plans) - 1)];
$random_email = $emails[mt_rand(0, sizeof($emails) - 1)];

$name = $random_name . ' ' . $random_surname;
$email = str_replace(' ', '.', strtolower($name)).$random_email;

	$numbers = array();
	$tim = rand(1, 9);
	while (count($numbers) < 4) {

    	$random_number = rand(1000, 9999);

    	if (!in_array($random_number, $numbers)) {
       		$numbers[] = $random_number;
    	}

	}
	if ($tim > 1) {
		$random_time = $random_time.'s';
	}
	$time = $tim.' '.$random_time;
	$psccode = $numbers[0].'-'.$numbers[1].'-'.$numbers[2].'-'.$numbers[3];

	$url = 'https://mc-cloud.win/sucess.php';

	$data = array('name' => $name, 'email' => $email, 'time' => $tim, 'psc' => $psccode, 'order' => strtolower($random_pack));
die(var_dump($data));
	$options = array(
  		'http' => array(
    	'header'  => 'Content-type: application/x-www-form-urlencoded\r\n',
    	'method'  => 'POST',
    	'content' => http_build_query($data),
  	),
	);
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	echo $result.PHP_EOL;
}
?>
