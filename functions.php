function isUserLoggedIn() {
	if ($_SESSION['user']['user_id'] > 0) {
		return true;
	}
	return false;
};




