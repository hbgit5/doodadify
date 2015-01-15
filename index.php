<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doodadify - Your Life As Doodads</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Handlee' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="fabric.min.js"></script>
</head>

<body>
    <header>
        <img id="main-logo" src="img/doodadify_logo.png"></img>

    </header>
    <main>

        <section id="canvas-container">
            <div class="sign-in-btns">
                <a href="#" data-toggle="modal" data-target="#auth_modal" >Login</a>
                <a href="#" data-toggle="modal" data-target="#auth_modal">Sign Up</a>
            </div>
            <div class="main-canvas">
                <div class="top-bar">
                    <button id="canvas-del">Delete</button>
                    <button id="canvas-clear">Clear All</button>
                    <button id="canvas-upload">Upload</button>
                    <button id="canvas-save">SAVE</button>
                    <button id="canvas-share">SHARE</button>
                </div>

                <div id="doodad-canvas-container">
                    <canvas id="doodad-canvas" width="730" height="380"></canvas>
                </div>

                <div id="canvas-doodad-picker">
                    <p class="" id="picker-text">DOODAD's to d<span>ify your life - </span><span>Just add or search </span>
                    </p>

                    <div class="doodad-boxes">
                        <div class="neg-degree-10 doodad-cat-box" id="left-arrow"></div>
                        <div class=" degree-10 doodad-cat-box"></div>
                        <div class="neg-degeree-20 doodad-cat-box"></div>
                        <div class="degree-10 doodad-cat-box"></div>
                        <div class="neg-degree-20 doodad-cat-box"></div>
                        <div class="degree-10 doodad-cat-box"></div>
                        <div class="neg-degree-20 doodad-cat-box"></div>
                        <div class="degree-10 doodad-cat-box"></div>
                        <div class="neg-degree-20 doodad-cat-box"></div>
                        <div class="degree-10 doodad-cat-box"></div>
                        <div class="neg-degree-20 doodad-cat-box"></div>
                        <div class="degree-20 doodad-cat-box" id="right-arrow"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="splatter-container">
            <button class="doodad-splatter">Sausage Festival!</button>
            <button class="doodad-splatter">Egg Splatter!</button>
            <button class="doodad-splatter">Unknown Splatter!</button>
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
</body>

</html>
