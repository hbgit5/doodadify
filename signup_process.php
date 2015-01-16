<?php include_once 'header.php'; ?>
<?php

/*--------------------------------------------------------------
	Signup validation begins below: ---- */

#Need help with this function to check to see if user exists.  
function checkIfUsernameExists($username) {
	global $connection;

	$seeIfExists = "SELECT `user_id` FROM `users` WHERE `username` = '$username'";
    
	$result = mysqli_query($connection, $seeIfExists);
		#further investigation needed on how mysql it stores results. Consult Daniel.
		//this condition checks to see if $result has a row in database 
	if (mysqli_num_rows($result)) {
		return true;
	}
}

function pswdCheck($pswd) {
		if (strlen($pswd)>6) {
			$reGexArray = ['~[A-Z]+~','~[^a-zA-Z0-9]+~','~[0-9]+~'];
			for ($i = 0; $i < count($reGexArray); $i++) {
				if(preg_match($reGexArray[$i], $pswd) === false) {
					return false;
				}
			}
			return true;
		}
		else {
			//Perform some sort of error message display to the 
			//that the password isn't long enough.   
		}
	}

$username = null;
$email = null;
$password = null;

if (!empty($_POST['signup-username'])&&(strlen($_POST['signup-username'])>6)) {
	$username = filter_var($_POST['signup-username'], FILTER_SANITIZE_STRING);
	if(checkIfUsernameExists($username)) {
		//run some code to let the user know that username is already taken.
		exit(json_encode(array('result'=>false,'message'=>'That user name is already taken')));
		
		//old method 1: print out result, give them link to go back
		/*?>
		That user name is already taken.  <a href="index.php">Click here</a> to try again.
		<?php*/

		//old method 2: redirect page back to index page
		//header("location: index.php?mode=message=".urlencode("That user name is already taken"));
	}
}

else {
    echo json_encode(array('result'=>false,'message'=>'The user name has to be at least 7 characters long!'));
	exit;
}

if (!empty($_POST['email'])) {
	$email = $_POST['email']; //taking email from html input and storing in $email
	//validate email below with filter var function
	$validated_email = (filter_var($email, FILTER_VALIDATE_EMAIL));
	//sanitize email for security 
	if ($validated_email) {
		$clean_email = filter_var($validated_email, FILTER_SANITIZE_EMAIL);
		$email = $clean_email;
	}

	else{

		exit(json_encode(array('result'=>false,'message'=>'Email is Invalid!')));
	}

}
else {

	exit(json_encode(array('result'=>false,'message'=>'Email is Required!')));
}

if (!empty($_POST['signup-verify-psw'])){
     $verify = $_POST['signup-verify-psw']; 
     if ($verify != $_POST['signup-create-psw']) {
 	  exit(json_encode(array('result'=>false,'message'=>'Password does not match entered!')));	
     }
     
    
}
else {
    exit(json_encode(array('result'=>false,'message'=>'Password verification was blank!')));
}


if (!empty($_POST['signup-create-psw'])){
	$validated_password = pswdCheck($_POST['signup-create-psw']);
	if ($validated_password) {
		$password = sha1($_POST['signup-create-psw']);
	}
	else {
		//
		exit(json_encode(array('result'=>false,'message'=>'Password must have atleast 1 uppercase, 1 number, and 1 symbol!')));
	}

}

if ($_POST['ageVerify'] != 'true') {
		exit(json_encode(array('result'=>false,'message'=>'You are not old enough to use this app!')));

}


//Now we know that the user is verified, so we need to move data into database
//Start the Query

 $insert_user_query = 'INSERT INTO  `users` SET
 						 `username` = "'.$username.'",
 						 `password`= "'.$password.'",
 						 `email`= "'.$email.'",
 						 `active`=1,
 						 `registration_ts`= '.time().',
 						 `last_login_ts`='.time();

mysqli_query($connection, $insert_user_query) or die(mysqli_error($connection));

$select_query = 'SELECT user_id, username, email
                    FROM `users`
                    WHERE `user_id`='.mysqli_insert_id($connection);

$result = mysqli_query($connection, $select_query);

while($row = mysqli_fetch_assoc($result)) {
    $_SESSION['user'] = $row;
}

header('Location: index.php');