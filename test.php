<?php

	function pswdCheck($pswd) {
		$reGexArray = ['~[A-Z]+~','~[^a-zA-Z0-9]+~','~[0-9]+~'];
		for ($i = 0; $i < count($reGexArray); $i++) {
			if(preg_match($reGexArray[i], $pswd) === false) {
				return false;
			}
		}
			
		return true;
	}

	echo pswdCheck('Thdjux89!');

?>