<?php
	session_start();
	error_reporting(0);
	function do_comics($name, $do){
		$fp = fopen('../private/comics.csv', 'r');
		while (($array[] = fgetcsv($fp))!= FALSE)
		if ($do == '+'){
			foreach ($array as &$value){
				if ($value[1] == $name){
                    $value[2] += 1;
                    
				}
            }
            
		}
		if ($do == '-'){
			foreach ($array as &$value){
				if ($value[1] == $name){
					$value[2] -= 1;
				}
			}
		}
		fclose($fp);
		$fp = fopen('../private/comics.csv', 'w');
		foreach ($array as $fields) {
			fputcsv($fp, $fields);
		}
		fclose($fp);
	}
	function do_comics_user($name, $user){
		$file_name = '../private/'.$user.'.csv';
		$fp = fopen($file_name, 'r');
		while (($array[] = fgetcsv($fp))!= FALSE)
				foreach ($array as &$value){
					if ($value[1] == $name){
						$value[2] += 1;
					}
				}
		fclose($fp);
		$fp = fopen($file_name, 'w');
		foreach ($array as $fields) {
			fputcsv($fp, $fields);
		}
		fclose($fp);
	}
	
	if ($_POST['bt1'] == 'Delete 1 from cart'){
	    do_comics('bt1', '-');
   	    do_comics_user('bt1', $_SESSION['loggued_on_user']);
	    include ('cart.php');
	    exit();
    }
	if ($_POST['dd'] == 'Delete 1 from cart'){
		do_comics('dd', '-');
	    do_comics_user('dd', $_SESSION['loggued_on_user']);
		include ('cart.php');
		exit();
	}
	if ($_POST['bc'] == 'Delete 1 from cart'){
		do_comics('bc', '-');
	    do_comics_user('bc', $_SESSION['loggued_on_user']);
		include ('cart.php');
		exit();
	}if ($_POST['fl'] == 'Delete 1 from cart'){
	do_comics('fl', '-');
    do_comics_user('fl', $_SESSION['loggued_on_user']);
	include ('cart.php');
	    exit();
	}
	if ($_POST['bt2'] == 'Delete 1 from cart'){
	do_comics('bt2', '-');
    do_comics_user('bt2', $_SESSION['loggued_on_user']);
	include ('cart.php');
	    exit();
	}
	if ($_POST['md'] == 'Delete 1 from cart'){
		do_comics('md', '-');
	    do_comics_user('md', $_SESSION['loggued_on_user']);
		include ('cart.php');
	    exit();
	}
	if ($_POST['bw'] == 'Delete 1 from cart'){
		do_comics('bw', '-');
	    do_comics_user('bw', $_SESSION['loggued_on_user']);
		include ('cart.php');
	    exit();
	}if ($_POST['ca'] == 'Delete 1 from cart'){
	do_comics('ca', '-');
    do_comics_user('ca', $_SESSION['loggued_on_user']);
	include ('cart.php');
	    exit();
	}
	if ($_POST['ag'] == 'Delete 1 from cart'){
	do_comics('ag', '-');
	do_comics_user('ag', $_SESSION['loggued_on_user']);
	include ('cart.php');
	    exit();
	}
	
	
