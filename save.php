<?php
require_once 'header.php';

$user_id = $_SESSION['user']['user_id'];

$data = array(
    '`user_id`' => intval($user_id),
    '`title`' => '"'.$_SESSION['user']['username'].' '.time().'"',
    '`created_ts`' => time(),
    '`updated_ts`' => time(),
    '`status`' => 1,
    '`fabric_data`' => '"'.addslashes($_POST['fabric_data']).'"',
);

$insert_query = 'INSERT `canvas`
                    ('.implode(',', array_keys($data)).')
                    VALUES
                    ('.implode(',', array_values($data)).')';

if(mysqli_query($connection, $insert_query)) {
    $canvas_id = mysqli_insert_id($connection);
    
    // Check if the user id folder exists
    if(!file_exists('snapshots/'.$user_id)) {
        mkdir('snapshots/'.$user_id, 0777, TRUE);
    }
    
    // Take base64 encoded string and save it as an image
    $img_data = $_POST['img'];
    $img_data = str_replace('data:image/png;base64,', '', $img_data);

    $img_raw_data = base64_decode($img_data);
    $filename = 'snapshots/'.$user_id.'/'.$canvas_id.'.png';
    // ex: snapshots/1/5.png
    file_put_contents($filename, $img_raw_data);

    $select_query = 'SELECT canvas_id, user_id, title, created_ts, updated_ts, status
                        FROM `canvas`
                        WHERE `canvas_id` = '.$canvas_id;
    
    $result = mysqli_query($connection, $select_query);
    $output = [];
    $canvas_row = [];
    while($row = mysqli_fetch_assoc($result)) {
        $canvas_row = $row;
    }
    
    $output = [
            'status' => TRUE,
            'data' => $canvas_row,
    ];
} else {
    $output = [
        'status' => FALSE,
        'error' => 'Someone done gun wrong',
    ];
}

echo json_encode($output);

?>