<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <link href="../../res/css/Metro/metro.css" rel="stylesheet" />
    <link href="../../res/css/Metro/metro-icons.css" rel="stylesheet" />
    <link href="../../res/css/Metro/metro-responsive.css" rel="stylesheet" />
    <link href="../../res/css/main.css" rel="stylesheet" />    
</head>
<body class="bg-darkTeal">
    <div style="opacity: 1; transform: scale(1); transition: all 0.5s ease 0s;" class="login-form padding20 block-shadow">
        <form id="formlogin" action="index.php" method="post">
            <h1 class="text-light">Iniciar Sesión Martisan</h1>
            <hr class="thin" />
            <br />
            <div class="input-control text full-size" data-role="input">
                <label for="user_login">Usuario:</label>
                <input style="padding-right: 42px;" name="user_login" id="user_login" type="text" />
            </div>
            <br />
            <br />
            <div class="input-control password full-size" data-role="input">
                <label for="user_password">Contraseña:</label>
                <input style="padding-right: 42px;" name="user_password" id="user_password" type="password" />
                <button type="button" tabindex="-1" class="button helper-button reveal"><img class="icon icons8-Visible" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAABT0lEQVRIie2Uq24CQRSGP1GBrEBU8AiIFYgViKYKgURUIkiKaBpEH6DJCgQCwQMgmmYFTVasQFTwABVNFQ9RsbJiBRVzJpxOhmWgpmL/5GQ35/bPucxAjRr/EU1gCCTAEtiILEU3FJ+zcAH0gBVQArsjUgIZ0JfYIHSBl4Dkh+QVuDlGcgd8/oHEyhZ4OFTdoyfgG0gDEj8DhUefuCQDj1MKXAHTAKI5cClf1za2JDG/B14CE3WIdQDRRvmPPPn6SNk66N2pNg8gyp2YD8eeATw57doBHRWUBBDpWcSiWyn7FKAh5UbimEmVFk3gq4KkAFrKP2XfypiKuxVJAj2nHv6tKiSRxUT0177EPtiAe6VrYVqUiyROJbeeAwZhgNmYN6Bd4ddmvzAnk1hEmJmVmL7PMfdiDCxEZ23dc0k0OpjNyTDPy1b+Z5wwjxo1APgBLVq831S5IEEAAAAASUVORK5CYII=" width="26" height="26"/></button>
            </div>
            <br />
            <br />
            <div class="form-actions">
                <button type="submit" class="button primary">OK</button>
                <button type="button" class="button link">CANCELAR</button>
            </div>
        </form>
    </div>
</body>
<script src="../../res/js/jQuery/jquery-1.11.3.min.js"></script>
<script src="../../res/js/Metro/metro.js"></script>
<script>
    $(function () {
        var form = $(".login-form");

        form.css({
            opacity: 1,
            "-webkit-transform": "scale(1)",
            "transform": "scale(1)",
            "-webkit-transition": ".5s",
            "transition": ".5s"
        });
    });
</script>
<script>

</script>
</html>
