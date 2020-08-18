<?php
	function new_user($name)
	{
		$comics = array(
			array(1, 'bt1', 0),
			array(2, 'dd', 0),
			array(3, 'bc', 0),
			array(4, 'fl', 0),
			array(5, 'bt2', 0),
			array(6, 'md', 0),
			array(7, 'bw', 0),
			array(8, 'ca', 0),
			array(9, 'ag', 0),

		);
		$file_name = "../private/".$name.".csv";
		echo $file_name;
		$fd = fopen($file_name, 'w+');
		
		foreach ($comics as $fields) {
			fputcsv($fd, $fields);
		}
		
		fclose($fd);
	}
	
	$array = [];
	
	if ($_POST['submit'] == 'GO BACK'){
		include ('login.html');
		exit();
	}
	if (!($_POST['passwd']) || !($_POST['login']) || !($_POST['submit'] == 'OK')) {
		include('createagain.html');
		exit();
	}
	
	if (!($array = unserialize(file_get_contents("../private/passwd")))){
		$array[] = [
			"login" => $_POST['login'],
			"passwd" => hash("whirlpool", $_POST['passwd'])
		];
		file_put_contents("../private/passwd", serialize($array));
		$name = $_POST['login'];
		new_user($name);
		include('login.html');
		exit();
	}
	foreach ($array as $value)
	{
		if ($value["login"] == $_POST["login"]) {
			include('createagain.html');
			exit ();
		}
	}
	$array[] = [
		"login" => $_POST['login'],
		"passwd" => hash("whirlpool", $_POST['passwd'])
	];
	file_put_contents("../private/passwd", serialize($array));
	$name = $_POST['login'];
	new_user($name);
	include('login.html');
	exit();