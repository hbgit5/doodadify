<?php
if(!empty($_FILES)) {
    $temp_name = $_FILES['background_file']['tmp_name'];
    $destination = 'uploads/'.uniqid().'.png';
    move_uploaded_file($temp_name, $destination);
    echo $destination;
}
?>