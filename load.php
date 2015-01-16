<?php
require_once 'header.php';

if(isset($_GET['id'])) {
    $select_query = 'SELECT fabric_data
                        FROM `canvas`
                        WHERE `canvas_id` = '.intval($_GET['id']);
    $result = mysqli_query($connection, $select_query);
    while($row = mysqli_fetch_assoc($result)) {
        echo $row['fabric_data'];
    }
}