<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../../Resources/logoxecry.ico">
        <link rel="stylesheet" href="../../CSS/signup.css">
        <title>XeCryptor - Signup</title>
        <meta charset="UTF-8">
        <meta name="web-page" content="CafeCryptor - Signup">
        <meta name="description" content="Create your XeCryptor Account.
        Descarga la aplicación para Windows.">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="X-Content-Type-Options" content="nosniff">
        <meta name="keywords" content="xecryptor windows, files, safe, save, Windows, windows, XeCryptor, xecryptor, XefilonCryptor, Login, login, Goodeversal">
        <meta name="author" content="Goodeversal Team">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../../JS/edittexthtml2.js"></script>
    </head>
    <body>
        <div class="gencontainer">
            <div class="colorcontainer">
                <div class="thingscontainer">
                    <div class="su-head">
                        <img src="../../Resources/logoxecry.png" class="loginheadimg">
                        <h1 id="signupheadtext">Sign Up</h1>
                    </div>
                    <form action="signup.php" method="POST">
                        <?php
                            include('../../PHP/moduleservercontroller_createacc.php');
                        ?>
                        <div class="userpasscontainer">
                        <p><?php echo $message; ?></p>
                            <div class="su-user">
                                <label id="userpass_var_txt">User: </label><br>
                                <input name="user" id="user_pseud" type="text" autocomplete="off">
                            </div>
                            <br>
                            <div class="su-mail">
                                <label id="userpass_var_mail">E-Mail: </label><br>
                                <input name="email" id="mail" type="email" autocomplete="off">
                            </div>
                            <br>
                            <div class="su-pass">
                                <img id="loginpassico0">
                                <label id="userpasstext0">Password: </label><br>
                                <input name="password" id="passsec0" type="password" autocomplete="off" min="12" max="24">
                            </div>
                            <br>
                            <div class="su-pass2">
                                <img id="loginpassico1">
                                <label id="userpasstext1">Confirm your password: </label><br>
                                <input name="confirm_password" id="passsec1" type="password" autocomplete="off" min="12" max="24">
                            </div>
                            <br>
                            <div class="sendformbutton">
                                <label for="sbut" class="sendformbutton">Continue</label>
                                <input name="send_data" id="sbut" type="submit">
                            </div>
                        </div>
                    </form>
                    <div class="underform">
                        <p id="loginbottom">Have an account?: </p><a id="a1" href="../../HTML/tools/login.php">Log In</a><br>
                        <p id="loginbottom2">Forgot password?: </p><a id="a2" href="../../HTML/tools/restorepassword.php">Click here</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
// Cierra la conexión cuando hayas terminado
$pdo = null;
?>