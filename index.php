<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "subviews/meta.php"; ?>
        <?php include "subviews/css.php"; ?>
        <script src="includes/js/jquery.js"></script>
    </head>

    <body>
        <div class="container-fluid" style="margin-top: 10em;">
            <div class="row-fluid">
                <div class="span4">&nbsp;</div>
                <div class="span4" style="text-align: center; margin-bottom: 10px;"><?php include "subviews/msg.php"; ?></div>
                <div class="span4">&nbsp;</div>
            </div>
            
            <div class="row-fluid">
                <div class="span4">&nbsp;</div>
                <div class="span4">
                    <form name="form1" class="well" action="login_proc.php" method="POST">
                        <p><h3 style="text-align: center;">Welcome to PHP</h3></p><hr>
                        <table width="100%" class="cst_table">
                            <tr>
                                <td>Username</td><td width="3%">:</td>
                                <td><input type="text" name="username" class="span3" id="username"></td>
                            </tr>
                            <tr>
                                <td>Password</td><td>:</td>
                                <td><input type="password" name="password" class="span3"></td>
                            </tr>
                            <tr>
                                <td colspan="2">&nbsp;</td>
                                <td>
                                    <div style="float: right;">
                                        <input type="submit" name="submit" value="Login" class="btn btn-inverse">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="span4">&nbsp;</div>
            </div>
        </div>

    <?php include "subviews/js.php"; ?>
    </body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $("#username").focus();
    });
</script>