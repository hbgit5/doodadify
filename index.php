<?php require_once 'header.php';?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doodadify - Your Life As Doodads</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Handlee' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="dropzone.css">
    
    <link rel="stylesheet" href="style.css">
    
    <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="fabric.min.js"></script>
    <script src="dropzone.js"></script>
</head>

<body>
  
    <header>
        <img id="main-logo" src="img/doodadify_logo.png"></img>

    </header>
    <main>

        <section id="canvas-container">
            <div class="sign-in-btns">

                <?php
                if(!isset($_SESSION['user']))
                {
                ?>
                    <a href="#" data-toggle="modal" data-target="#auth_modal">Login / Sign Up</a>
                <?php
                }
                else
                {
                ?>
                    <h4>Hi there, <?php echo $_SESSION['user']['username'];?></h4>
                <?php
                } ?>
            </div>
            <div class="main-canvas">
                <div class="top-bar btn-toolbar">

                    <button id="canvas-del">Delete</button>
                    <button id="canvas-clear">Clear All</button>
                    <div class="btn-group">
                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="canvas-upload">Upload</button>
                        <div class="dropdown-menu" id="bg-dz-menu" role="menu">
                            <div id="bg-dropzone-container" class="dropzone"></div>
                        </div>
                    </div>
                    <button id="canvas-save">SAVE</button>
                    <!-- Single button drop down menu -->
                    <div class="btn-group" id="canvas-share-div">
                        <button class="btn btn-default dropdown-toggle" id="canvas-share" data-toggle="dropdown" aria-expanded="false">SHARE <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="http://www.facebook.com/sharer.php?u=http://www.doodadify.com">
                                    <img src="img/fb.png"> Facebook</a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/share?url=doodadify.com">
                                    <img src="img/gplus.png"> Google+</a>
                            </li>
                            <li>
                                <a href="http://pinterest.com/pin/create/button/?url={URI-encoded URL of the page to pin}&media={URI-encoded URL of the image to pin}&description={optional URI-encoded description}" class="pin-it-button" count-layout="horizontal"><img src="img/pinterest.png"> Pinterest</a>
                            </li>

                                 <li>  <a class="twitter-share-button" href="https://twitter.com/share">
                                        <img src="img/twitter.png"> Twitter</a>
                                </li>
                        </ul>

                    </div>
                </div>

                <div id="doodad-canvas-container">
                    <canvas id="c" width="730" height="380"></canvas>
                </div>

                <div id="canvas-doodad-picker">
                    <p class="" id="picker-text">DOODAD's to d<span>ify your life - </span><span>Just add or search </span>
                    </p>

                    <div class="doodad-boxes">
                        <div class="neg-degree-10 doodad-cat-box">
                        <img src="img/doodads_images/icecream_melted_thumb.png" data-img="img/doodads_images/icecream_melted.png" class="thumb-img">
                        </div>
                        <div class=" degree-10 doodad-cat-box">
                            <img src="img/doodads_images/alien_thumb.png" data-img="img/doodads_images/alien.png" class="thumb-img">
                        </div>
                        <div class="neg-degeree-20 doodad-cat-box">
                            <img src="img/doodads_images/banana_thumb.png" data-img="img/doodads_images/banana.png" class="thumb-img">
                        </div>
                        <div class="degree-10 doodad-cat-box">
                            <img src="img/doodads_images/beer_thumb.png" data-img="img/doodads_images/beer.png" class="thumb-img">
                        </div>
                        <div class="neg-degree-20 doodad-cat-box">
                            <img src="img/doodads_images/catfat_thumb.png" data-img="img/doodads_images/catfat.png" class="thumb-img">
                        </div>
                        <div class="degree-10 doodad-cat-box">
                            <img src="img/doodads_images/dog_funny_thumb.png" data-img="img/doodads_images/dog_funny.png" class="thumb-img">
                        </div>
                        <div class="neg-degree-20 doodad-cat-box">
                            <img src="img/doodads_images/flower_pink_thumb.png" data-img="img/doodads_images/flower_pink.png" class="thumb-img">
                        </div>
                        <div class="degree-10 doodad-cat-box">
                            <img src="img/doodads_images/flying_saucer_thumb.png" data-img="img/doodads_images/flying_saucer.png" class="thumb-img">
                        </div>
                        <div class="neg-degree-20 doodad-cat-box">
                            <img src="img/doodads_images/star_thumb.png" data-img="img/doodads_images/star.png" class="thumb-img">
                        </div>
                        <div class="degree-10 doodad-cat-box">
                            <img src="img/doodads_images/ninja_thumb.png" data-img="img/doodads_images/ninja.png" class="thumb-img">
                        </div>
                        <div class="neg-degree-20 doodad-cat-box">
                            <img src="img/doodads_images/hamburger_thumb.png" data-img="img/doodads_images/hamburger.png" class="thumb-img">
                        </div>
                        <div class="degree-20 doodad-cat-box">
                        <img src="img/doodads_images/stallion_thumb.png" data-img="img/doodads_images/stallion.png" class="thumb-img">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="splatter-container">
            <button class="doodad-splatter" id="sausage-fest">Sausage Festival!</button>
            <button class="doodad-splatter" id="egg-splat">Egg Splatter!</button>
            <button class="doodad-splatter" id="tomato-toss">Tomato Toss!</button>
        </section>

        <footer>
            <p>Copyright © 2015_ Doodadify - All Rights Reserved</p>
        </footer>
    </main>

    <div class="modal fade" id="auth_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="img/doodadify_logo.png" width="125" height="30" />
                    <button type="button" class="close close-solid" data-dismiss="modal" aria-label="Close"><span id="remove-button"><img src="img/close.png" width="40" /></span> 
                    </button>
                </div>
                <div class="modal-body">
                    <ul id="tabs" class="nav nav-tabs" role="tablist">
                        <li class="active" role="presentation">
                            <a href="#login-tab" data-toggle="tab" role="tab" aria-controls="login-tab" class="modal-tab">LOGIN</a>
                        </li>
                        <li role="presentation">
                            <a href="#signup-tab" data-toggle="tab" aria-controls="signup-tab" class="modal-tab">SIGN UP</a>
                        </li>
                    </ul>
                    <div id="modal-container" class="tab-content">
                        <div id="login-tab" class="tab-pane active" role="tabpanel">
                            <?php include 'loginmodal.php'; ?>
                        </div>
                        <div id="signup-tab" class="tab-pane" role="tabpanel">
                            <?php include 'signupmodal.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="javascript.js "></script>
    <script>
    <?php
    if(isset($_GET['id'])) { ?>
    // AJAX call to retrieve fabric data from database
    // and loads it into fabric
    $(function() {
        $.get(
            'load.php',
            {id: <?php echo $_GET['id'];?>},
            function(response) {
                setTimeout(function() {
                    console.log('hi');
                    canvas.loadFromJSON(response);
                }, 200);
            }
        );
    });
    <?php
    } else { ?>
        setTimeout(function() {
                    canvas.setBackgroundImage('img/under_the_s.jpg', canvas.renderAll.bind(canvas));        
                }, 200);
        
        <?php
    }
    ?>
    </script>
</body>

</html>
