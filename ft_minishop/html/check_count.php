<?php
	function check($name){
		$fp = fopen('../private/comics.csv', 'r');
		while (($array[] = fgetcsv($fp))!= FALSE)
				foreach ($array as &$value){
					if ($value[1] == $name){
							return ($value[2] + 1);
						}
				}
			}

