<pre>
<?php
    echo '<b style="color:red">$_GET:</b><br>';print_r($_GET);
    echo '<b style="color:red">$_POST:</b><br>';print_r($_POST);
    echo '<b style="color:red">$_REQUEST:</b><br>';print_r($_REQUEST);
    echo"GET id =".$_GET["id"]."<br>";
    echo"POST user_name =".$_POST["user_name"]."<br>";
?>
    <div>
        <input type="text" value="<?= $_POST["user_name"]?>" readonly>
        <input type="text" value="<?= $_POST["user_name"]?>" disabled>

        <input type="radio" name="gender" value="male"
            <?php echo ($_POST['gender']=='male' ?'checked="checked"':''); ?> disabled>Male
        <input type="radio" name="gender" value="female"
            <?php echo ($_POST['gender']=='male' ?'checked="checked"':''); ?> disabled>Male
        <input type="radio" name="gender" value="lgbtq"
            <?php echo ($_POST['gender']=='male' ?'checked="checked"':''); ?> disabled>Male
   <?php
    function check($check)
    {
        foreach($_POST['hobby'] as $value)
        {echo ($value==$check?'checked="checked"':"");}
    }
   ?>

   <input type="checkbox" name="hobby[]" value="play football" <?php check("play football"); ?> disabled>Play football
   <input type="checkbox" name="hobby[]" value="play golf" <?php check("play golf"); ?> disabled>Play golf
   <input type="checkbox" name="hobby[]" value="play E-Sport" <?php check("play E-Sport"); ?> disabled>Play E-Sport
   <input type="checkbox" name="hobby[]" value="Sleep" <?php check("Sleep"); ?> disabled>sleep<br>
        </div>
</pre>