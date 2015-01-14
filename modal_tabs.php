<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="modal_main.css">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <style>
        /*
        modal 400x400
        tab 165x50
        inside 330x258
        inputs 300x30
        btn 197x37
        */
        
        
    </style>
</head>

<body>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Sign-up/Log</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <img src="images/doodadify_logo.png" width="125" height="30" />
                    <button type="button" class="close close-solid" data-dismiss="modal" aria-label="Close"><span id="remove-button"><img src="images/close.png" width="40" /></span> 
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

    <script>
        $('#tabs a').click(function (event) {
            event.preventDefault()
            $(this).tab('show')
        });

        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
        });
    </script>



</body>

</html>




