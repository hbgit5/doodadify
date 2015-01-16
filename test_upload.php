<?php
$img_data = $_POST['img'];
$img_data = str_replace('data:image/png;base64,', '', $img_data);

$img_raw_data = base64_decode($img_data);
file_put_contents(time().'.png', $img_raw_data);

?>