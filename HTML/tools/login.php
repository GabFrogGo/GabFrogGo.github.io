<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../../Resources/logoxecry.ico">
        <link rel="stylesheet" href="../../CSS/login.css">
        <title>CafeCryptor - Login</title>
        <meta charset="UTF-8">
        <meta name="web-page" content="CafeCryptor">
        <meta name="description" content="Go to your CafeCryptor Account">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="X-Content-Type-Options" content="nosniff">
        <meta name="keywords" content="cafecryptor windows, files, safe, save, Windows, windows, CafeCryptor, Login, login, Goodeversal">
        <meta name="author" content="Goodeversal Team">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../../JS/edittexthtml.js"></script>
    </head>
    <body>
        <div class="gencontainer">
            <div class="colorcontainer">
                <div class="thingscontainer">
                    <div class="loginhead">
                        <img class="loginheadimg" src="../../Resources/logoxecry.png">
                        <h1 id="loginheadtext2">Login</h1>
                    </div>
                    <form action="login.php" method="POST">
                        <?php
                            include('../../PHP/moduleservercontroller_login.php');
                        ?>
                        <div class="userpasscontainer">
                            <p><?php echo $message; ?></p>
                            <div class="loginmail">
                                <label for="email" id="usermailtext">E-Mail: </label><br>
                                <input name="email" id="mail" type="email" autocomplete="off">
                            </div>
                            <br>
                            <div class="loginpass">
                                <label for="password" id="userpass">Password: </label><br>
                                <input name="password"id="passsec" type="password" autocomplete="off">
                            </div>
                            <br>
                            <div class="sendformbutton">
                                <label for="sbut" class="sendformbutton">Continue</label>
                                <input name="send_data" id="sbut" type="submit">
                            </div>
                        </div>
                    </form>
                    <div class="undertable">
                            <p id="loginbottom">You don't have an account?: </p><a id="a1" href="../../HTML/tools/signup.php">Sign Up</a><br>
                            <p id="loginbottom2">Forgot password?: </p><a id="a2" href="../../HTML/tools/restorepassword.php">Click here</a>
                        </div>
                </div>
            </div>
        </div>
    </body>
</html>