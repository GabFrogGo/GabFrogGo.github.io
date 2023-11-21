<!DOCTYPE html>
<html>
    <head lang="en">
    <link rel="icon" href="../../Resources/logoxecry.ico">
        <link rel="stylesheet" href="../../CSS/dashboard.css">
        <title>CafeCryptor - Dashboard</title>
        <meta charset="UTF-8">
        <meta name="web-page" content="CafeCryptor">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="X-Content-Type-Options" content="nosniff">
        <meta name="author" content="Cafenetix Team">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../../JS/jboard/functions.js"></script>
        <script src="../../JS/jboard/tablecountor.js"></script>
        <script src="../../JS/jboard/dynamic.js"></script>
        <script src="../../JS/jboard/dynamocanonic.js"></script>
    </head>
    <body>
    <?php
        include('../../PHP/moduleservercontroller_dashboard.php');
    ?>
        <div class="container-page">
            <div class="sidebar-container">
                <div class="sidebar-int-cont">
                    <div class="sidebar-upper">
                        <img id="sidebarupperimg" src="../../Resources/logoxecry.png" alt="CafeCryptor® Logotype">
                        <h1 id="sidebaruppertext">CafeCryptor</h1>
                    </div>
                    <div>
                    <h2 id="sidebarupperuser"><?php echo $userreq ?></h2>
                    </div>
                    <div class="sidebar-middle-options">
                        <div class="img-text-option">
                            <img src="../../Resources/svgicons/key.svg" alt="">
                            <div class="info-option">File Keys</div>
                        </div>
                        <div class="img-text-option">
                            <img src="../../Resources/svgicons/devices-2.svg" alt="">
                            <div class="info-option">Licences</div>
                        </div>
                    </div>
                    <div class="sidebar-botton-options">
                        <div class="img-text-option">
                            <img src="../../Resources/svgicons/user.svg" alt="">
                            <div class="info-option">Account</div>
                        </div>
                        <div class="img-text-option">
                            <a href="../../PHP/moduleservercontroller_logout.php">
                            <img src="../../Resources/svgicons/logout-2.svg" alt="">
                            </a>
                            <div class="info-option">Logout</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="keys-frame-container">
                <div class="keys-frame">
                    <table class="responsive-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>File</th>
                                <th>Decryption Key</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="tb-a">
                        <?php
                        include('../../PHP/moduleservercontroller_dashboardtable.php');
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>