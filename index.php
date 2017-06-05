<?php

?>
<html>
<header>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</header>
<body>
<div class="col-md-10 col-offset-1">
    <form class="form-horizontal center">
        <fieldset>

            <!-- Form Name -->
            <legend>Form Name</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Email</label>
                <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="Enter email" class="form-control input-md">
                    <span class="help-block"></span>
                </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="passwordinput">Password</label>
                <div class="col-md-4">
                    <input id="passwordinput" name="passwordinput" type="password" placeholder="Enter password" class="form-control input-md">
                    <span class="help-block"></span>
                </div>
            </div>

            <!-- Button (Double) -->
            <div class="form-group">
                <label class="col-md-5 col-sm-12 col-xs-12 control-label" for="button1id"></label>
                <div class="col-md-4">
                    <button id="button1id" name="button1id" class="btn btn-success">Submit</button>
                    <button id="button2id" name="button2id" class="btn btn-danger">Cancel</button>
                </div>
            </div>

        </fieldset>
    </form>

</div>

</body>
</html>


