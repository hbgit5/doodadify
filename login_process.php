<?php
require_once 'header.php';

$select_query = 'SELECT user_id, username, email
                    FROM `users`
                    WHERE `username`="'.addslashes($_POST['username']).'"
                    AND `password`="'.sha1($_POST['password']).'"';

$result = mysqli_query($connection, $select_query);
if (mysqli_num_rows($result)) {
    while($row = mysqli_fetch_assoc($result)) {
        $_SESSION['user'] = $row;
    }
    
    header('Location: index.php');
} else {
    $message = [
        'result' => FALSE,
        'message' => 'Invalid login. Check your username and password.',
    ];
    
    echo json_encode($message);
    exit;
}