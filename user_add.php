<?php include "libraries/referer.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "subviews/meta.php"; ?>
        <?php include "subviews/css.php"; ?>
        <script src="includes/js/jquery.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function(){
                $('.dropdown-toggle').dropdown();
                $('#form1').validationEngine();
                $("#dob").datepicker({
                    dateFormat: 'yy/mm/dd',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '1940:2030'
                });
                $("#name").focus();
            })
            
        </script>
    </head>
    
    <body>
        <?php include "subviews/menu_nav.php"; ?>
       
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <legend>USER - ADD&nbsp;
                        <a href="user_add.php" class="btn"><i class="icon-plus"></i>&nbsp;Add</a>
                        <a href="user.php" class="btn"><i class="icon-list-alt"></i>&nbsp;User</a>
                    </legend> 
                </div>
            </div>
            
            <div class="row-fluid">
                <div class="span4">&nbsp;</div>
                <div class="span4" style="text-align: center; margin-bottom: 5px;"><?php include "subviews/msg.php";?></div>
                <div class="span4">&nbsp;</div>
            </div>
            
            <div class="row-fluid">
                <div class="span12">
                    <form name="form1" id="form1" action="user_proc.php" method="POST">
                        <table class="table table-bordered table-condensed table-striped" width="100%">
                            <tr>
                                <td>ID</td>
                                <td><input type="text" name="id" class="span2" readonly="readonly" value="AUTO"></td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td><input type="text" name="name" id="name" class="span5 validate[required,custom[onlyLetterSp]]" placeholder="Your name here"></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td><textarea name="address" class="span8" rows="2" placeholder="Your address here"></textarea></td>
                            </tr>
                            <tr>
                                <td>DOB</td>
                                <td><input type="text" name="dob" id="dob" placeholder="Ex: 1991/01/01" class="span2"></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td><select name="gender" class="span2">
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td><select name="active" class="span2">
                                        <option value="1">Active</option>
                                        <option value="0">Non-Active</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input type="submit" name="save" class="btn" value="Save">
                                    <input type="hidden" name="action" class="btn" value="insert">
                                    &nbsp;<a href="user.php" class="btn">Back</a>
                                </td>
                            </tr>
                        </table>    
                    </form>
                </div>
            </div>
            
        </div>
        <?php include "subviews/footer.php"; ?>
        
        <?php include "subviews/js.php"; ?>
    </body>
</html>