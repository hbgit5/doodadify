<div id="signup-panel">
    <form method="post" action="signup_process.php" id="signup-form">
        <div class="form-group">
            <!-- <label for="recipient-name" class="control-label">Recipient:</label> -->
            <div id='email-field'>
                <span class="glyphicon glyphicon-envelope"></span>
                <input type="text" name="email" class="form-control shorten fa-envelope" id="recipient-name" placeholder="EMAIL" />
            </div>
            <div id='username-field'>
                <span class='glyphicon glyphicon-user'></span>
                <input type="text" name="signup-username" class="form-control shorten " placeholder="CREATE USERNAME" />
            </div>
            <div id='createPassword-field'>
                <span class="glyphicon glyphicon-lock"></span>
                <input type="password" name="signup-create-psw" class="form-control shorten" placeholder="CREATE PASSWORD" />
            </div>
            <div id='verifyPassword-field'>
                <span class='glyphicon glyphicon-lock'></span>
                <input type="password" name="signup-verify-psw" class="form-control shorten " placeholder="VERIFY PASSWORD" />
            </div>

            <div id='checkbox-field'>
                <label><input type='checkbox' name="ageVerify" id='ageVerify-box' value="true" /> I am 13+</label>
            </div>
        </div>
        <div id="register-button-field">
            <button type="submit" class="btn btn-success" id="doodad-submit">BECOME A DOODADIfier</button>
        </div>
    </form>
</div>
