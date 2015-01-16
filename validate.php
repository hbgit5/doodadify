<?php
if (!empty($_POST['login_username'])) {

	$username = $_POST['login_username'];
}
else{

	$username = NULL;
}

if (!empty($_POST['login_password'])) {
	$validated = pswdCheck($_POST['login_password'])
	if ($validated) {
	$password = $_POST['login_password'];
	}
}

else {

	$username = NULL;
}



/*--------------------------------------------------------------
	Signup validation begins below: ---- */

if (!empty($_POST['signup-username'])) {
	$username = $_POST['signup-username'];
}

else {
	$username = NULL;
}

if (!empty($_POST['email'])) {
	$email = $_POST['email']; //taking email from html input and storing in $email
	$email_result = checkEmail($email); //taking result of checkEmail and storing in $email_result
	if ($email_result) {
		$email_Ok = $_POST['email'];
	}

}

if (!empty($_POST['signup-create-psw'])){
	$validated = pswdCheck($_POST['signup-create-psw'])
	if ($validated) {
		$password = $_POST['signup-create-psw'];
	}
	else {
		$password = NULL;
	}

}



	function pswdCheck($pswd) {
		$reGexArray = ['~[A-Z]+~','~[^a-zA-Z0-9]+~','~[0-9]+~'];
		for ($i = 0; $i < count($reGexArray); i++) {
			if(preg_match($reGexArray[i], $pswd) === false) {
				return false;
			}
		}
			
		return true;
	}

	function checkEmail($email) {
		   if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		   		return true;
		   }
		   else {
		   		return false;
		   }
	}
	


	//filter_var($email, FILTER_VALIDATE_EMAIL));



?>

/*   
	HTTP is a Stateless technology. There is no method for tracking users or retaining variables
	as a person traverses a site. Server-side tech like PHP helps keep track of the user. 
	Cookies and Sessions are best used for this purpose. 

	Cookies = browser

	Sessions = Server, generally more secure than Cookies










*/
