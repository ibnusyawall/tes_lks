<?php
    session_start();
    $status = '';
    if (isset($_POST['captcha']) && ($_POST['captcha'] != '')) {
        if (strcasecmp($_SESSION['captcha'], $_POST['captcha']) !=0) {
            $status = "<p style='color:#FFFFFF; font-size:20px'> <span style='background-color:#FF0000;'>Captcha salah! silahkan coba lagi.</span> </p>";
        } else {
            $status = "<p style='color:#FFFFFF; font-size:20px'><span style='background-color:#46ab4a;'>Captcha benar.</span></p>";
        }
    }
?>
<html>
    <head>
        <title> PHP VERIFICATION CAPTCHA | Ibnu Syawal </title>
    </head>
    <body>
        <h3 style="text-align: center;">PHP VERIFICATION CAPTCHA | Ibnu Syawal<h3>
        <?php echo $status; ?>
        <form method="post" name="form" action="">
            <label><strong>Enter Captcha:</strong></label><br /><br />
            <input type="text" name="captcha"/>
            <p>
                <br /><img src="captcha.php?rand=<?php echo rand();?>" id="captcha_image"/>
            </p>
            <p>
                refresh captcha? 
                <a href='javascript: refreshCaptcha();'>here...</a>
            </p>
            <input type="submit" name="submit" value="Submit">
        </form>

        <script>
            function refreshCaptcha(){
                var img = document.images['captcha_image'];
                img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
            }
        </script>
    </body>
</html>
