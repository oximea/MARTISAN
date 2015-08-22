<?php
session_start();
$userName = $_SESSION['user_name'];
?>
<html>
    <head>
        <meta charset="UTF-8" />
        <title></title>
        <link rel="stylesheet" href="../../res/css/Metro/metro.css" />
        <link rel="stylesheet" href="../../res/css/Metro/metro-icons.css"/>
        <link rel="stylesheet" href="../../res/css/main.css" />
    </head>
    <body class="bg-darkTeal">
        <form id="mainForm">
            <div>
                <header class="app-bar fixed-top navy" data-role="appbar">
                    <div class="container">
                        <a class="app-bar-element branding" href="#">SW Assistant -
                            Martisan</a>
                        <div class="app-bar-element place-right">
                            <span class="dropdown-toggle"> <span class="mif-cog"></span>
                                <?php echo $userName; ?>
                            </span>
                            <div
                                class="app-bar-drop-container padding10 place-right no-margin-top block-shadow fg-dark"
                                style="width: 200px" data-no-close="false" data-role="dropdown">
                                <ul class="unstyled-list fg-dark">
                                    <li><a class="fg-dark fg-hover-blue" href="#"> Perfil </a></li>
                                    <li><a class="fg-dark fg-hover-blue" href="#">
                                            Configuración</a></li>
                                    <li><a class="fg-dark fg-hover-blue" href="#"> Cerrar
                                            Sesión </a></li>
                                </ul>
                            </div>
                        </div>
                        <a href="https://icons8.com">Icon pack by Icons8</a>
                    </div>
                </header>
            </div>


            <div class="container page-content">
                <a id="tile-purchases" class="tile-large bg-lighterBlue fg-white"
                   data-role="tile" href="#">
                    <div class="tile-content iconic">
                        <span class="tile-label">Compras</span> <img
                            class="icon icons8-Cash-Register"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAGeElEQVR4nO2dQWgdRRjHf2iEqD2kUCRCwUEEeyhYRLSISISiQQJWyKFClXeoELFCDz2I9PCK0CKClVYQFPqEHgIK5hAwqGAOUnKIEEHRQ4V3KFKwh6jBBonwPMxLu2/e7ny7b+ftzrw3f/jfZr75z/fP7r6d+WYDo405YB3oVMgdYAM4WcH8gsIRdHKqNMPkpaHPMiBUfWVk8eCwJxoCpqjfiF3GWxegqN+IXTaHOtNAoKjfiGhIAor6jYiGJKCwJ6kNrDrihjBWc6gzDQQKe5IuOBzrkDBW0+FYwUIRDfEKijE3ZApY6A5eFY8Dj2ToUVSXpJkKx8qFOWBLEDVMpi1PKKFP09HcwTNDpoFtQVAVXDB0KaF901kGPDPklCCmKm4YupTQvuksA54ZckkQUxV3DF1KaL8BtBxxRRirWSyl5XBBEFMlk1Ae6ImGJKA80BMNSUB5oKcWQ1qCmGPoh54LSmtGSfi0H3LKnkK3kAxRDsdaFcYycU1oXxWfcZWAPJBuWcrhWEvCWCZeF9pXwcvAhKsE5IHPVwjAPPVcKZvoV4I9bqaeH0UM2Y/eh8hL8947iCG7mOpqqYL7BS1DRZFbVtEHbdMYq+gtaywRDfEAk9y5PL/An1uW8pCTDAkTwGn0u0CRakDlUINkiI8cWlmptIAWDZF5xVUiTpYQoVyJIHxDOsCsi0T8WkKASsSZpNhSSbIvjIYh36fktxAep1wFuUrEGvavrBD4D/C0LeESjpcUoBKxoiGab9gSLuFsycFVIlY0RPMDW8IllE2CSsTaR7Gt0aOGltWSWnaA5YIaBuEicNOi41trxgWUeaCbhpRFWUMOOdQiYYLsVYybgwadzAgYoiFthzry4oBFz75BAj5rCViHIWVun6sOdeTFHuCvDD0vDhKwkRFsUEOmKFYqOmPoKXOF1GEI6CszTc9ASynvZQQrY0iRvk1DT2hXCOgHeJqejwYJ9mVGsGhIfnyWoeebQYL9nBEsGpIf5zL0tIF7igRyVUajEjHrXMuqy5AFi6bpIoEOWwINakhZhGjInEVToZXfMkvuPhpy3aGOIpi2aDpdJJCrqnZVbj49KGNIB3iXimukgBMWPa0igcpOPvmX2XZEFweDNh3qkXhD0LKe14y7gN8cGRKZzd+B+/MY8qgHYseFuRY8Zz0QOgxuoZfGWwkuk70juk7/0npWWeoWuiTKjC3dZs0thlT4cm7QJdfIrpGapv8U8bwlP2eMthuW2HvQz9EsXW9bxrmNT4XJhUhpMW8x0fYm9l9j5rK6lNT3LboWhb4AfGcJECobwpyTm0ltoa25iiEdyGladF0V+nIf9kssVDaEeddlyB/AXlvnxyydQ2ZDSFpdhnSAJ22djwqdQ2VDSFor0VYyRBmxTwjtm4I22w8I3hE6h8qPLXO+l97n5i3gOUv7V43YUs2utK901tZ5MaNT6NxGr88doXeJf470IxUb6KtqxuBp+rdlt9GGzxptZ5FPmHW642fiqgfJGzdmrmntxV7gFTkc/gk8kGbIUx6IG1emnmWf90DYsLiF/rVzgN4jZ4dJX5lYQ//iVAYb9FdzbgPn0Z8UT7Z9Av2Wnuf0wLE0Q8oWVvvMi2kT7mIC+DrR9m/sX194xYh92dIW4PMc+s6ldRyV6vI0NoSktRJt20JbZcQu+x7SQa8M9+GHHB1DZUNIWp1v6h3gR7PTg+hLte7EjashtzC+AOGisNpnNoSk1W1IB2N1oFFgciFSKrlJvq1vYj/wf9CI3RRi563g6XkW2TZRRoHrZH+ZR9G/1Zq1oTWRkqtrZJ/32Ef+7Yyer20v15isqriNPpa8mqDt3yJdo/8/IWStZOyg312SbdcodoJ5JWmIi8LqyHL8ZdcMBfzrgaBx53/AwwDPeyAmUvMFgDc9EBKp+RbAhx4IidS8CPCVB0IiNVdA//RrR3rB3BXxEREREZ5gJtIbHoD6f1lE3uFSNMQvRkM840gYcgO9fbCMfPLVd7ZCN+Q8vaedJtDn0evWNZaGpJbOdCF9k95XBm3IaxZDXvZA3yAM+hkyYzHE9r1Dn9kK2ZB4hXjGK6RXktwNfOKBvrEzpIOuXE+aMknYJU2t0A3poEtz1rrc9EDP2BsySgz+ljVqXAJdCl+3kEjNCxDuW+0o8hjAS4S/KDcKXAEeoosFyv1ro8hyvI4+JNqDw+iHyih+DchX/oT+CsTt4wz/A3QJSivZYsDPAAAAAElFTkSuQmCC"
                            width="100" height="100" />
                    </div>
                </a> <a id="tile-sales" class="tile-large bg-red fg-white"
                        data-role="tile" href="#">
                    <div class="tile-content iconic">
                        <span class="tile-label">Ventas</span> <img
                            class="icon icons8-Bill"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAFFUlEQVR4nO2dIWxcRxCGP2BgcMBSLdVSU8mVWqkwICCVXGlBQcsKDAIKfhAQEBBgEBBgKaAgICAgwCBSC1qplSLVkg0s1WWpFBAQYFBgYBAVGbiSwYEUbApi3+3s+unem7vOJw2c3zvz3/m9fbtvD9q5BTwFXgFj4G3EezF+15sdQMDSFXpcxRfADw4Knrf4GUjt7S7zOXDqoLh5jTPgenPXp/AB8KuDouY99oCPG3s/kXsOilmU2G5r/WQOHBSyKPFnY+8vsQq8cVDIosQ/wCdNDlzguvEHjoDDiPfiyOjZRpMDF0iG+L0u4guKKPfs2y7iyRAPQy4jwhBXiDDEFSIMcYUIQ1whwhBXiDDEFSIMcYUIQ1whwhBXiAENURdx8vLmbWCXYZ8/7QOPgPWO9YBtSOoingxxddBeAn4x9PuOM+DrDjXBHBsiQ3uoOAGWZ1hX6qA902vIb4b2kPFlh7pkaLu9huwb2kPGzQ51ydBOHbRnaojXtfpzYNShLhn6qYP2TA0ZkTeUDW3AxdjqUBPMsSGQ1+wfA8cO4hDY7FgPzPFFfVER5Z7FTL1nRBjiChGGuEKEIa4QYYgrRBjiChGGuEKEIa4QYYgrRBjiChGGuEKEIa4QYYgrRBjiCjGgIarQuEFe8zjsOZ7QVvwq+QN2MEFrh7xdqeZUBlHuWWoY0yWSIS4jf5Phj994WlHnGva7gW+BF9jLuzI0UsV4ppIMcRVyV/Bz+oP1TXneoPXY0JKRn4z8IskQVyH3OyO3z3hWGOe1Rq3jghY4NsQaWJ/xvDDOVkNOC1o1dScjv0gyxFXItd5x7zPuG3X+1aC1b2jJyE9GfpFkiMvI97B39xj7QrxZqTXGPtVHhkYy8oskQ1xG/hLwkGEu7qfAj+Tb2RpuMf2bck6+/a05YknGuFLleCaSDPGYGF5GlHsWM/WeEWGIK8SAhqhSZ5n8dlKfcdV3PCZprTTkC8cX9WXyM6UzQ2cWMSZfiNcra71Dfllnmt5r6popY1w1GlNJhriMfA/vgLzBvtNSpdYYu6GWlpVfJBniKuRuGLl9xveFcY5oOzXvRUELHBtiDazP2C2Mc71R66ygVVN3MvKLJENchdza2W8f8aQwzhF54ler9bqgBY4NGTHMxXxSWK86/9SgVfr3B44NgXwdafn0zSIeVtS5Qv7kW1oH2LfTMjRSxXimkgxxVWiskZ+2bvccW7S9TbtEXsOZpPWA+gmdGNCQmKlfRpR7Fo9OekaEIa4QAxqiCo1rZOOe9Rxb5C1ItSyTm7UzQesB8FWljnB8UU8Mf+tbc5e1Brys0Nplju+yPG0DsuYhLduA5nYe4mkbUGmz3Fqj1lFBCxwbctvI7TPiWRa+tgFtG3WW1kEuxqGhJSM/GflFkiEuI3/XyO8jTrBX/O5Uao2xZ/8yNJKRXyQZ4jLyR+TbxiE2XJ+TF8jWK2sV5XWRVyzAiuF/rNL/mvpVftBxNEWr5UAzMaAhMVO/jCj3LB6d9IwIQ1whwhBXiDDEFSIMcYUIQ1whwhBXiDDEFSIMcYUIQ1whwhBXiDDEFSIMcYUIQ1whwhBXiDDEFSIMcYWYoSE3DPEjhv1BSI9hHYS20eTABT4E/jb+QER9nAOfNjkwgd8dFLIo8bKx9xO576CQRYlHjb2fyEfAnoNi5j3+AD5ra/10bjL86aLzHDUnQDTzDW3b9iNy7NHxVrfEEnCXfHRfyzmF/7c4edejuzTuoPwX7kT8KHE4YrwAAAAASUVORK5CYII="
                            width="100" height="100" />
                    </div>
                </a> <a id="tile-inventory" class="tile-large bg-amber fg-white"
                        data-role="tile" href="#">
                    <div class="tile-content iconic">
                        <span class="tile-label">Inventario</span> <img
                            class="icon icons8-Product"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAKPElEQVR4nO2de5AdRRXGf0qMWY0khCgbWOUaHpoQZQsiUrhKCxEighXk4QNFKCwEXR8ohfi+oCU+UMS3RqVAiqhbkMSAKURqSTQGXWWNAYkmuhUDbCHiKhGC3jLxj2/HndzM3J6e7rl37uZ+Vacqlb19+us+Mz3dfU6fhvZGDzC91ST2dkwBlgCrgBqwA1gGnDr+tw6ahD7gk8CvgV0psgH4PHAKMLU1NCc3DgIuAAaA7aQbIknWAB8Fjms660mIVwKfAX6HmxGS5HFgJfAuYF4zG9HuqAAXASuAJ/E3RJI8CFwPvAWY05RWtSFOAq4B7qcYI6TJvcC1wGlAV+GtLDkOQ0PIbcB/aa4hkuTnwBXAy4tsdNkwBU1NvwJsofVGSJIngVuB9wIvKqYbWo+ZQD+wkXAdtwP4HmDQdHgpMBZQ/y60xlkOnAlMC90pzUYXcDrwTWArYTpoJ7AaPb1Js6UDgXPRR/vBQHVGsgm92Utos52BXuBy4C7CdcZ9wBeAkx14zEPfqBW4r19ssh4tUI0Dn6ZiX+Bs4LvAQ4Rp9GNoMfg24Lme/I4FPgwMBuIWH9JWA5eiB7Hl6AE+AowQtqG7gNFx3T2BOfeiKfa2wHwj47yZJn9v9gfOAW4E/ubZiCzyd7RxeB5hF3KzgLPQNy70jG8z8HXgDGBGQM674TjgSuBXgcm7yG/RdsoJgdtWQUPjMuCRwJyHgKuAE0MQnQOcD/wA+Gdgoj7yH7T13g8cGqKhMRwJvB/4MfDvgJx3Aj8BPgAc7UrqhcDnCPu0jKInJfQ3ZztwHfpwh8ahwCfQEBTygaoBd6DvTeoU+nnAhcAtwBOBKh5Dw8BbgQNidU1Hi62lhP24DqInMPSMpwvtd32RsIvbXcCfgW+hWer+UYVfJuwqdxtQJdsMaTbhV/E1NGUuwoMYeSsH0G5BSOOMohlgEGUPoxXyG4H9cjT0qcjLdy3wh4CNHELDTl8OTjYcDrwDuJmw31ivwmuBDwFHBWzo85nwi4R6Cv+FOu5C4OCAXCO8BPgg8NMAXHMVWk9ztg6iCcZoTp5JMoaG6YUFce4d55z3+5ir0A70BF+E5vFF4wC0cXgT8GhOzklyO/A+YH4BnGcArwO+htswbO1427AxhlamRT1x9ShiyyYKJVpUEOdp45xrGbg0/OMgE/6M4QzKhsd/O7OghtVjEerIkDOeEcLuo3Wj2VMWY2QySISnAK9GM6FNlnJb0T7R6cAzAjWsERagFfYdFl4u4ruPdgTapnfdK8tskDhcZkJrCD8TS8M+aPr8JcJOnzcAnyXbPtpc1N68IUy5DBKHAT6NfUh7GLgBeBOxVWmBmAtcjGKyQoUVxffRDqurbw5wCfBLzzq8DRJhCtoSWY19vNyGFmwVB/0+KGJ/LtpH60PDWqg9r2AGieOlwMeBX1j0R57BC1DYaNHoRntry9A3IpRxQkohBokwg+zu3Y3oKS5q6lmPY4CPAessvCaVQeJ4MXAZcKelzhrF+TuSsC/yHn4HeMDCbVIZJMJUtJ39VeBPlvq3oPCbU4GnFcClHgtQ0ELI6XPpDRLHdDR9Xp+B6EbUWbML5hThWBQot1cZJI5FwNXYfSMPoOHlLDTcFIEF5FvUTSqDROhBQQdZDumsQ4dyjglU9yEohiu0Z7CtDRLHy9B6xRbt8ijaCT6X3d3FWXEg2vVtZVRNWxgkQhQPdgPwVxpzvgf4FHB8Br2zkNdvjUVnxyANcBTaK7J14hPoo/x29vQSdqEQp9stOjoGcYRBxxKy+GwiL6FBvvZWd3zLDHIexbt7XXw2ZZdCDdKLZkpDnnpcsBB5MEMf4Gl7g8xH4ZORrvM9dOVBhfDRK21tkIE6XcO0LvXFmRTXgW1hkMtS9F2cU58vTAqfMkpwgywk3UG1Gfe3ZHEODvUwKXzKKEENMht7gFi/g74q+jj7RrEYC6cySVCD9KGt60Yu3FGyHftaHNNTdeRRD9OAT9kkqEEizETnH9KmnpdbylfY3f/t+5aYFB5llEIMEmEkpqvGxBPfqIOnkbzAq3rwMAn6yipNM8gIE2/OMuRsSsJ1KVx83hKTorOM0jSDjGX4/SUWPlfm5GEsesskTX1DGqGC3SGV9y0xFr1lklK9IfOQf+KHpAe1XZGDh0nRVUYplUHiqKZwug8FMrvApOgqozTNICOOZat1XJYCPxv/d9VRlyFsp3UMwoRPpQf5WFxgCN9xbW8Q3yFriQcPQ/iO6xjEg4chfMe1pUEMEz7vEcey1TouxpNHqzu6JQbpTvn/KJ2GC6p1XIxj+TgMxXVgqQ0yiHZ7jWO5JFTruPjoNBTXgaU3SFT2R2g2lDeJV7WOS+cbgp9BIrkTeCcK13RBtU5PxyCEMUgkdyNfe/1hyTRU68p3DIJ84C6nmPqxH6wcQ51tO+fRX1fOOPCoh7FwKpNYf1BDPoqshpmGkh3bEsbsQBkOKg10VZDxRugYJNEwA2TP2DaFbMeFI4MvsOjzSb9qLBzKJM4FHkOnak/J2Bn7oWPPt1n0bkfHDXy+FWkwlrrLJLkLPo6yyJ2WsVOejjLODdD4ioqdKNnYOYTLk2Ia1Fc24Rr8Y1+X45YZtI9sByqHkQ/eNwTVOLanVTIQET4apXH1SQ9RQ8ELZzh01Mkoa5BtZrYW+dsPdtAdh/FoVzNkCJ2r3AO96PSpLf1SI9mJXLBno+SWWfAKlIb1Lxbdv0G5rFwzwBmP9hQt3yBDpqSZTIRx+lQ2iNt0NUr2Zat3jPSNzCQYz3YUIY/gvuHKfJQPxPf6uhW43RxwBDru3OhElEvCZOPJP7QsxTMl4gvQ+W3fI2OrUDaeZ2asdy4KqEvKKtSOBhlGRzKyDuVWZF2FZyHmst5IWmRWHMobT74hZBXh70P5P0Ia5g24TWuXjJerOJQxnjx9ZAz3oIzcCGWYzeOkXQzj8lvjya+Ub0UjHAS8h4m4qbwyiHwnedJjNILx5OUqG9GlZC2/sbobbZvfhV+D1gLvxt2plQbjycdFrkc5WkqFZ6PZhC17nE3WoRW6701txpNHFvk9GiVKfa/uLHQjQfy8eh65G01/Kzl5GM/6bXIjbXaP7gy0Bb8av4YPoVt0DnGs33jWmyab0BucdV1VOkxHs6lb8euIe1BGoMMz1ms860uSm8iWAqot0IUumV+JX6dsQFssSXfjxmE864nLH9Hw+SyP9pcWU1Hq8Vvw66R70WZomhvYeOqP5PuEv0exlNgHeD175kdxlftRSsAj6/QbT71bUAhTs67hKBUM/hcJRxEt3TGdeXWtR7nj93oY/BMaR4a5KmfZS2ldBqPS4rUoGiXUhZdZ5GbgpGY0rp3xGhS/FfrC+rhsRX6fZmXPnhRYDHwb+AdhjbGcMKmg9lq8CkWs+F6jtw2tZZ7TXPqTFyeguwJtCZaTZCUaCjsoAMej3LxZnGUPoRuA8ty+1oEj+lCMV9rlLKvIHv7aQUBEMV5RmGwNba901hUtRjfaTgl98X0h+B+n+o6qbutkPQAAAABJRU5ErkJggg=="
                            width="100" height="100" />
                    </div>
                </a> <a id="tile-warehouse" class="tile-large bg-darkOrange fg-white"
                        data-role="tile" href="#">
                    <div class="tile-content iconic">
                        <span class="tile-label">Almacen</span> <img
                            class="icon icons8-Warehouse"
                            src="data:image/png;base64,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"
                            width="100" height="100" />
                    </div>
                </a> <a id="tile-clients" class="tile-large bg-emerald fg-white"
                        data-role="tile" href="../CLIENTS/clients.php">
                    <div class="tile-content iconic">
                        <span class="tile-label">Clientes</span> <img
                            class="icon icons8-Business-Contact"
                            src="data:image/png;base64,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"
                            width="100" height="100" />
                    </div>
                </a> <a id="tile-system" class="tile-large bg-teal fg-white"
                        data-role="tile" href="#">
                    <div class="tile-content iconic">
                        <span class="tile-label">Sistema</span> <img
                            class="icon icons8-NAS"
                            src="data:image/png;base64,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"
                            width="100" height="100" />
                    </div>
                </a>
            </div>

            <div id="welcome_dialog" class="padding10 align-center" data-role="dialog" data-type="default" data-overlay="true" data-overlay-color="op-dark" data-close-button="true" data-width="300px" data-height="70px" data-hide="2000">
                <h3>Bienvenido 
                    <?php
                    echo $userName;
                    $_SESSION['user_name'] = $userName;
                    ?>
                </h3>
            </div>
        </form>
    </body>
    <script src="../../res/js/jQuery/jquery-1.11.3.min.js"></script>
    <script src="../../res/js/Metro/metro.js"></script>
    <script src="../../res/js/indexJS.js"></script>
    <script>
        $(document).ready(function () {
            var dialog = $('#welcome_dialog').data('dialog');
            dialog.open();
        });
    </script>
</html>