<?php require_once 'header.php';
if(!isset($_SESSION['user'])) {
    header('Location: index.php');
}

$select_query = 'SELECT * FROM `canvas` WHERE `user_id`='.intval($_SESSION['user']['user_id']).' ORDER BY updated_ts DESC';
$canvas_results = mysqli_query($connection, $select_query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Doodads | Doodadify</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="userpage.css">
</head>

<body>
    <div class="container container-xs-height">
        <div class="row row-xs-height">
            <div class="col-sm-3 col-xs-height col-top">
                <img id="logo" src="images/doodadify_logo.png">

            </div>

            <div class="col-sm-6 col-xs-height col-top" id="middle-column">

                <div id="midde-header">Doodadify canvas &nbsp &nbsp &nbsp <span>All your canvases</span>
                </div>

                <div id="gallery-container">
                    <?php
                    if(mysqli_num_rows($canvas_results) > 0) {
                        while($row = mysqli_fetch_assoc($canvas_results)) {
                    ?>
                        <div class="photo_galary"><?php echo $row['title'];?>
                            <div class="image_box">
                                <a href="index.php?id=<?php echo $row['canvas_id'];?>" target="_blank"><img src="snapshots/<?php echo $row['user_id'];?>/<?php echo $row['canvas_id'];?>.png"></a>
                            </div>
                        </div>
                    <?php
                        }
                    } ?>
                </div>


            </div>

            <div class="col-sm-3 col-xs-height col-top" id="right-column">
                <div id="col-3-top">Sign Out</div>
                <div id="col-3-middle">
                    <div id="thumb_logo">
                        <img id="thumb_logo_pic" src="img/doodadify_logo_thumb.png">
                    </div>
                </div>
                <div id="col-3-bottom"></div>

            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src=""></script>
</body>

</html>
