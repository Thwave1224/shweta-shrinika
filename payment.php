<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy SHRINIKA products online at best prices on samvrita.in</title>
    <link rel="shortcut icon" href="./img/logo1.jpg" type="image/x-icon" fa-solid="#fff">
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="./OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="./OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<body>
    <style>
    * {
        margin: 0%;
        padding: 0%;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    /* ................................... navber ........................................ */
    #header {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #fff;
        justify-content: space-between;
        border-bottom: 1px solid black;
    }

    .nav {
        margin: auto;
    }

    #header a {
        text-decoration: none;
        color: #333;
    }

    #navbar {
        list-style: none;
        display: flex;
        padding: 0;
        border-bottom: 3px solid transparent;
    }

    #navbar li {
        margin: 0 15px;
        margin-top: 22px;
    }

    #navbar li a {
        font-size: 16px;
        font-weight: 520;
        position: relative;
        transition: color 0.3s;
        color: rgba(0, 0, 0, 0.7);
    }

    #navbar li a:hover,
    #navbar li a.active {
        color: brown;
        padding-bottom: 5px;
        border-bottom: 3px solid brown;
    }

    #navbar li a::after {
        position: absolute;
        width: 100%;
        height: 2px;
        bottom: -5px;
        left: 0;
        background-color: brown;
        transform: scaleX(0);
        transform-origin: bottom right;
        transition: 0.3s ease-out;
    }

    #navbar li a:hover::after,
    #navbar li a.active::after {
        transform: scaleX(1);
        transform-origin: bottom right;
    }

    .icon i {
        padding: 0 10px;
        color: #333;
        cursor: pointer;
    }

    .icon {
        margin-right: 30px;
    }

    #mobile {
        display: none;
    }

    #close {
        display: none;
    }

    .images {
        height: 130px;
        margin: 20px 0px 0px 30px;
    }

    /* ................................. search ....................................................... */



    .css-ymv3kr {
        margin-left: -100px;
    }

    .form-inline {
        display: flex;
        border-radius: 20px;

    }

    .se_icon {
        padding: 10px 10px 7px 10px;
    }

    .se_fil {
        margin-right: 10px;
    }



    .line {
        margin-left: 34%;
        color: grey;
    }

    .num {
        border-radius: 50%;
        background-color: black;
        color: white;
        padding: 5px;
    }

    /* Styles for input field with background image */
    .input-with-bg {
        position: relative;
    }

    .input-with-bg input[type="text"],
    [type=number] {
        width: 65%;
        padding: 15px;
        border: 1px solid rgb(214, 208, 208);
        background-size: 30px;
        /* Set the size of the background image */
        background-position: 10px center;
        /* Center the image */
        background-repeat: no-repeat;
        /* Do not repeat the image */
    }

    .input-with-bg input[type="text"]::placeholder {
        color: rgb(164, 160, 160);
        font-size: 15px;
        font-family: Arial, Helvetica, sans-serif;
    }

    button {
        display: flex;
        margin-top: 20px;
        width: 69%;
        padding: 15px;
        background-color: black;
        border: none;
    }

    button a {
        color: white;
        text-decoration: none;
        font-family: Arial, Helvetica, sans-serif;
        letter-spacing: 1px;
        text-align: center;
    }

    h1 {
        font-family: Arial, Helvetica, sans-serif;
        color: rgba(0, 0, 0, 0.7);
    }

    .wp-number {
        margin-top: 80px;
        margin-left: 60%;
    }

    .field {
        display: flex;
        width: 69%;
        margin-right: 10px;
    }

    input {
        margin-top: 20px;
    }

    textarea {
        margin-top: 20px;
        color: rgb(157, 154, 154);
        border: 1px solid rgb(200, 193, 193);
    }

    .field input[type=text] {
        width: 45%;
    }

    .field input[type=number] {
        width: 45%;
    }

    /* ............................ registration ..................................... */
    .login {
        padding-left: 10%;
        color: whitesmoke;

    }

    .but {
        background-color: #a53860;
        margin-left: 250%;
        width: 90px;
    }

    .wig {
        color: brown;
        height: 2px;
        padding-bottom: 9px;
        font-size: 17px;
        letter-spacing: 1px;

    }

    a.login1:hover {
        border-bottom: 2px solid brown;

    }

    .login1 {
        margin-right: 15px;
        font-size: 18px;
        color: brown;
    }

    /* .............................. nayra kurti  media query ............................... */

    @media screen and (max-width: 1440px) {
        body {
            background-color: #fff;
        }

        #navbar li a:hover {
            color: brown;
        }

        .images {
            height: 130px;
            width: 130px;
            margin: 10px 0px 0px 20px;
        }

        .title12 {
            font-size: 30px;
            font-family: var(--title2), sans-serif;
            margin-top: 40px;
            margin-bottom: 35px;
        }

        .navbar {
            margin-left: 20px;
            margin-right: 30px;
        }

        .footer {
            background-color: black;
            padding-left: 150px;
            margin-top: 30px;
        }

        .section8 {
            background-color: black;
            color: #fff;
            padding-left: 50px;
        }

        .icon {
            margin-right: 0;
        }

        .btn {
            width: 100%;
            padding: 7px 10px 7px 10px;
            margin-right: 0%;
        }
        
    }


    @media only screen and (max-width: 320px) {
    #header {
      flex-direction: column;
      align-items: center;
    }

   .nav {
      margin: 10px auto;
    }

    #navbar {
      flex-direction: column;
    }

    #navbar li {
      margin: 10px 0;
    }

   .icon {
      margin-right: 10px;
    }

   .images {
      height: 130px;
      width: 130px;
      margin: 10px 0px 0px 10px;
    }



    
  }
    </style>
    

    </head>

    <body>



        <div class="logo">
            <section id="header">
                <div class="search-container">
                    <div>
                        <a href="index.php">
                            <img class="images" src="./img/1-png.jpg" alt="" width="150px" height="70px" />
                        </a>
                    </div>
                </div>

                <nav class="navbar navbar-light bg-light ">
                    <form class="form-inline">
                        <div class="se_icon"><i class="fa-solid fa-magnifying-glass fa-xl"></i></div>
                        <div class="se_fil"><input class="form-control mr-sm-2" type="search" placeholder="Search"
                                aria-label="Search"></div>

                    </form>
                </nav>

                <div class="nav">
                    <ul id="navbar">
                        <li><a href="checkout.php">Bag</a></li>
                        <li><a href="mobile.php">Mobile No</a></li>
                        <li><a href="address.php">Address</a></li>
                        <li><a href="payment.php">Payment</a></li>
                    </ul>
                </div>

                <div class="login"> </div>

                <div class="icon">
                    <div class="dropdown">
                        <button class="dropbtn"> <a href="login.php" title="login from here"><i
                                    class="fa-solid fa-right-to-bracket fa-xl"></i></a>

                        </button>
                        <div class="dropdown-content">
                            <a href="allproduct.php">See More</a>
                            <a id="logout" href="logout.php">Logout</a>
                        </div>
                    </div>

                    <a href=""><i class="fa-regular fa-user fa-xl"></i></a>
                    <a href=""><i class="fas fa-shopping-bag fa-xl"></i></a>


                </div>

                <!-- Loader Element -->
                <div id="loader" class="loader"></div>

                <style>
                /* Loader styles */
                .loader {
                    display: none;
                    /* Hidden by default */
                    position: fixed;
                    z-index: 9999;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(255, 255, 255, 0.8);
                }

                .loader:before {
                    content: "";
                    display: block;
                    position: absolute;
                    left: 50%;
                    top: 50%;
                    width: 80px;
                    /* Increase width */
                    height: 80px;
                    /* Increase height */
                    margin-left: -40px;
                    /* Adjust to center */
                    margin-top: -40px;
                    /* Adjust to center */
                    border: 8px solid maroon;
                    /* Increase border size */
                    border-top-color: transparent;
                    border-radius: 50%;
                    animation: spin 1s linear infinite;
                }

                @keyframes spin {
                    to {
                        transform: rotate(360deg);
                    }
                }
                </style>

                <script>
                document.getElementById('logout').addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent the default link behavior
                    document.getElementById('loader').style.display = 'block'; // Show the loader
                    window.location.href = this.href; // Redirect to the logout page
                });
                </script>

            </section>

        </div>

        <style>
        .dropbtn {
            background-color: #fff;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            /* margin-right: 15px; */
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: ;
        }
        </style>

        </section>
        </div>

        <!-- ------------------------------------------------------------------------------------------------------------ -->

        <div class="css-1pypun4">
            <section class="css-w12iaj">
                <div class="css-1minrv3">
                    <div class="css-z50h22">
                        <div class="css-1066lcq">
                            <p data-sd-event="" class="css-104up56">PAYMENT METHOD</p><svg width="78" height="24"
                                viewBox="0 0 78 28" fill="none" xmlns="http://www.w3.org/2000/svg" class="css-vnst0l">
                                <path
                                    d="m17.29 11.65-4.229 4.228-1.41-1.41m2.35-8.925L6.484 9.301c0 4.88 2.616 11.754 7.517 13.154 4.9-1.4 7.516-8.275 7.516-13.154l-7.516-3.758z"
                                    stroke="#27ae60" stroke-width="1.022" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path
                                    d="M30.101 11V5.687l.466.482h-1.676v-.89h2.273V11H30.1zm4.584.082a2.26 2.26 0 0 1-1.226-.344c-.36-.228-.643-.56-.85-.997-.207-.441-.31-.975-.31-1.602 0-.627.103-1.158.31-1.594.207-.441.49-.776.85-1.005a2.26 2.26 0 0 1 1.226-.344c.458 0 .867.115 1.227.344.36.229.643.564.85 1.005.212.436.319.967.319 1.594 0 .627-.107 1.16-.32 1.602-.206.436-.49.769-.85.997-.359.23-.768.344-1.226.344zm0-.924c.268 0 .5-.07.695-.212.197-.148.35-.371.458-.67.114-.3.172-.68.172-1.137 0-.463-.057-.842-.172-1.136-.109-.3-.261-.52-.458-.662a1.125 1.125 0 0 0-.695-.22c-.256 0-.485.073-.686.22-.196.141-.352.362-.466.662-.109.294-.163.673-.163 1.136 0 .458.054.837.163 1.136.114.3.27.523.466.67.201.142.43.213.686.213zm5.5.924a2.26 2.26 0 0 1-1.226-.344c-.36-.228-.643-.56-.85-.997-.207-.441-.31-.975-.31-1.602 0-.627.103-1.158.31-1.594.207-.441.49-.776.85-1.005a2.26 2.26 0 0 1 1.226-.344c.458 0 .867.115 1.226.344.36.229.643.564.85 1.005.213.436.32.967.32 1.594 0 .627-.107 1.16-.32 1.602-.207.436-.49.769-.85.997-.36.23-.768.344-1.226.344zm0-.924c.267 0 .499-.07.695-.212.196-.148.349-.371.458-.67.114-.3.172-.68.172-1.137 0-.463-.058-.842-.172-1.136-.109-.3-.262-.52-.458-.662a1.126 1.126 0 0 0-.695-.22c-.256 0-.485.073-.686.22-.196.141-.352.362-.466.662-.11.294-.164.673-.164 1.136 0 .458.055.837.164 1.136.114.3.27.523.466.67.201.142.43.213.686.213zM44.1 11l3.907-5.722h.8L44.902 11H44.1zm.474-2.64c-.267 0-.504-.066-.712-.196a1.313 1.313 0 0 1-.482-.548 1.862 1.862 0 0 1-.171-.826c0-.316.057-.59.171-.825.115-.235.275-.417.482-.548.208-.13.445-.196.712-.196.278 0 .517.065.719.196.207.13.368.313.482.548.115.234.172.51.172.825 0 .316-.057.592-.172.826a1.312 1.312 0 0 1-.482.548c-.202.13-.441.196-.72.196zm.008-.572a.585.585 0 0 0 .507-.254c.125-.174.188-.422.188-.744 0-.321-.063-.566-.188-.735a.58.58 0 0 0-.507-.262.621.621 0 0 0-.523.262c-.126.174-.188.42-.188.735 0 .316.062.562.188.736.13.174.305.262.523.262zm3.743 3.27c-.267 0-.504-.066-.71-.197a1.312 1.312 0 0 1-.483-.548 1.862 1.862 0 0 1-.171-.825c0-.316.057-.591.171-.826.115-.234.275-.417.482-.547.208-.131.445-.197.712-.197.277 0 .517.066.719.197.207.13.368.313.482.547.114.235.172.51.172.826 0 .316-.057.591-.172.825a1.311 1.311 0 0 1-.482.548c-.202.13-.442.196-.72.196zm0-.573a.6.6 0 0 0 .515-.261c.126-.175.188-.42.188-.736s-.062-.561-.188-.736a.6.6 0 0 0-.515-.261.614.614 0 0 0-.514.261c-.126.17-.188.414-.188.736 0 .321.062.57.188.744a.62.62 0 0 0 .514.253zm6.447.597a4.35 4.35 0 0 1-1.283-.188c-.408-.131-.733-.297-.972-.499l.367-.825c.23.18.513.33.85.45.338.119.684.179 1.038.179.3 0 .543-.033.728-.098a.886.886 0 0 0 .409-.262.618.618 0 0 0 .13-.384.513.513 0 0 0-.188-.417 1.303 1.303 0 0 0-.49-.253 6.687 6.687 0 0 0-.662-.18c-.24-.054-.482-.117-.727-.188a3.465 3.465 0 0 1-.663-.286 1.484 1.484 0 0 1-.482-.474c-.125-.196-.188-.447-.188-.752 0-.31.082-.594.245-.85.17-.262.423-.469.76-.621.344-.159.777-.238 1.3-.238.343 0 .684.044 1.022.131.338.087.632.213.883.376l-.335.826a3.039 3.039 0 0 0-.793-.335 2.908 2.908 0 0 0-.785-.115c-.294 0-.534.036-.72.107a.905.905 0 0 0-.4.277.658.658 0 0 0-.123.393c0 .174.06.316.18.425.126.103.287.185.483.245.201.06.425.12.67.18.245.054.488.117.727.188.246.07.466.163.663.278.201.114.362.27.482.466.125.196.188.444.188.744 0 .305-.085.588-.254.85-.163.256-.416.463-.76.62-.343.153-.776.23-1.3.23zM57.33 11l2.575-5.722h1.046L63.534 11h-1.111l-2.215-5.158h.425L58.425 11H57.33zm1.185-1.324.286-.834h3.09l.286.834h-3.662zm6.72-1.766h2.852v.9h-2.852v-.9zm.09 3.09h-1.063V5.278h4.177v.891h-3.114V11zm5.122-3.343h2.845v.874h-2.845v-.874zm.082 2.452h3.229V11h-4.291V5.278h4.176v.891H70.53v3.94zM28.98 22v-5.722h2.355c.506 0 .94.082 1.3.245.364.164.645.398.841.703.197.306.295.668.295 1.088 0 .42-.099.782-.295 1.087-.196.305-.477.54-.842.703-.36.163-.793.245-1.3.245h-1.765l.474-.499V22H28.98zm1.063-2.035-.474-.515h1.717c.468 0 .82-.098 1.054-.295.24-.201.36-.482.36-.841 0-.366-.12-.646-.36-.842-.234-.197-.586-.295-1.054-.295h-1.717l.474-.523v3.31zM33.734 22l2.575-5.722h1.046L39.938 22h-1.111l-2.216-5.158h.425L34.83 22h-1.096zm1.185-1.324.287-.834h3.09l.285.834H34.92zM41.73 22v-2.264l.237.654-2.485-4.112h1.136l1.994 3.31h-.637l2.01-3.31h1.047l-2.485 4.112.245-.654V22H41.73zm3.926 0v-5.722h.874l2.502 4.177h-.458l2.46-4.177h.875L51.916 22h-1.005l-.008-4.144h.212l-2.092 3.49h-.475l-2.125-3.49h.245V22h-1.013zm8.788-3.343h2.844v.875h-2.844v-.875zm.081 2.452h3.23V22h-4.292v-5.722h4.177v.891h-3.115v3.94zm4.414.891v-5.722h.874l3.589 4.406h-.434v-4.406h1.055V22h-.875l-3.588-4.406h.433V22h-1.054zm7.778 0v-4.823h-1.897v-.899h4.856v.9h-1.897V22h-1.062zm5.474.082a4.35 4.35 0 0 1-1.283-.188c-.409-.131-.733-.297-.973-.499l.368-.825c.229.18.512.33.85.45.338.119.684.179 1.038.179.3 0 .542-.033.728-.098a.885.885 0 0 0 .408-.262.618.618 0 0 0 .131-.384.513.513 0 0 0-.188-.417 1.304 1.304 0 0 0-.49-.253 6.733 6.733 0 0 0-.662-.18c-.24-.055-.483-.117-.728-.188a3.461 3.461 0 0 1-.662-.286 1.485 1.485 0 0 1-.482-.474c-.126-.196-.188-.447-.188-.752 0-.31.081-.594.245-.85.169-.262.422-.469.76-.622.344-.157.777-.236 1.3-.236.343 0 .684.043 1.022.13.337.087.632.213.882.376l-.335.826a3.037 3.037 0 0 0-.793-.335 2.907 2.907 0 0 0-.784-.115c-.295 0-.534.036-.72.107a.906.906 0 0 0-.4.277.658.658 0 0 0-.123.393c0 .174.06.316.18.425.125.103.286.185.482.245.202.06.425.12.67.18.246.054.488.117.728.188.245.07.466.163.662.278.202.114.362.27.482.466.126.196.188.444.188.743 0 .306-.084.59-.253.85-.163.257-.417.464-.76.622-.343.152-.777.229-1.3.229z"
                                    fill="var(--grey)" fill-opacity="0.7"></path>
                            </svg>
                        </div>
                        <!-- ================================================================================================ -->

                        <div class="loader"></div>
                        <div class="discount-message"></div>


                        <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var payOnlineRadio = document.getElementById('online');
                            var loader = document.querySelector('.loader');
                            var message = document.querySelector('.discount-message');

                            payOnlineRadio.addEventListener('change', function() {
                                loader.style.display = 'block'; // Show loader

                                setTimeout(function() {
                                    loader.style.display = 'none'; // Hide loader after delay
                                    message.textContent =
                                        "Online discount offer 50%"; // Update message
                                    message.classList.add(
                                        'show'); // Show message with animation

                                    setTimeout(function() {
                                        message.classList.remove(
                                            'show'); // Hide message after animation
                                    }, 5000); // Adjust time as needed
                                }, 1000); // Adjust delay time as needed
                            });
                        });
                        </script>


                        <div class="css-1pwpv5d">
                            <div class="css-tvs240">
                                <div class="css-1jxsi8s">
                                    <div class="css-k80332"><input type="radio" id="online" name="pay" value="online">
                                        <div class="css-1g1oew2">
                                            <div class="css-ha9uku"><label for="online" class="css-1aq4tuo">
                                                    <div class="css-1ozvql9">
                                                        <div class="css-1phsixa"><span data-sd-event=""
                                                                class="css-1uf3vej">Pay Online</span></div>
                                                    </div>
                                                </label><label for="online" class="css-1o3n2c6">
                                                    <p data-sd-event="" class="css-1ul1zn0">15% off upto ₹100</p>
                                                </label></div><label for="online">
                                                <div class="css-tuus37"><img
                                                        src="https://cdn-mediacf.blitzshopdeck.in/NushopWebsiteAsset2/tr:w-600,f-webp,fo-auto/1676382822082_S35NN3CEEX_2023-02-14_1.gif"
                                                        class="css-1y5rn99"></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="css-tvs240">
                                <div class="css-1jxsi8s">
                                    <div class="css-y3bq02"><input type="radio" id="cod" value="cod" name="pay"
                                            checked="">
                                        <div class="css-1g1oew2">
                                            <div class="css-ha9uku"><label for="cod" class="css-1aq4tuo">
                                                    <div class="css-1ozvql9">

                                                        <div class="css-1phsixa"><span data-sd-event=""
                                                                class="css-1uf3vej">Pay COD (Cash on Delivery)</span>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <style>
                            .loader {
                                display: none;
                                /* Styles for loader */
                            }

                            .discount-message {
                                display: none;
                                /* Styles for discount message */
                                position: fixed;
                                top: 50%;
                                left: 50%;
                                transform: translate(-50%, -50%);
                                padding: 20px;
                                background-color: #fff;
                                border: 1px solid #ccc;
                                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                                z-index: 1000;
                            }

                            .discount-message.show {
                                display: block;
                                animation: fadeInOut 5s ease-out;
                            }

                            @keyframes fadeInOut {
                                0% {
                                    opacity: 0;
                                }

                                20% {
                                    opacity: 1;
                                }

                                80% {
                                    opacity: 1;
                                }

                                100% {
                                    opacity: 0;
                                }
                            }
                            </style>
                            <!---------------------------------------------------------------------- -->


                        </div>
                    </div>

                </div>
                <div class="css-7v11po">
                    <div class="css-n53zl6">
                        <div class="css-18gqd4h">
                            <div class="css-1dqxbxv">
                                <div class="css-14w7bcf"><svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="css-1icn1af">
                                        <path
                                            d="m14.582 26.41 7.17 7.17a2 2 0 0 0 2.83 0l8.59-8.58V15h-10l-8.59 8.59a2 2 0 0 0 0 2.82v0zM28.172 20h-.01"
                                            stroke="#27ae60" stroke-opacity=".7" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg></div>
                                <div class="css-2hndyu">
                                    <p data-sd-event="" class="css-n7bzbm">Save upto ₹70</p>
                                    <p data-sd-event="" class="css-1p77vje">3 offers available</p>
                                </div>
                            </div>
                            <p data-sd-event="offers" class="css-w5g3vl">OFFERS</p>
                        </div>
                    </div>
                    <div class="css-assxh2">
                        <div class="css-1vspo5p">
                            <p data-sd-event="" class="css-1w8jx56">Bag</p>
                            <div class="css-2hndyu">
                                <div class="css-21njle">
                                    <div to="/orders/undefined" class="css-1248chx">
                                        <div class="css-178hw70">
                                            <div class="css-1s0gct8">
                                                <div class="css-169inv6"><img alt=""
                                                        src="https://cdn-mediacf.blitzshopdeck.in/NushopCatalogue/tr:w-600,f-webp,fo-auto/Beautiful_Straight_summer_friendly_Cotton_kurtas_4T5OYR2XQ5_2024-05-30_1.jpg"
                                                        class="css-vipixh"></div>
                                            </div>
                                            <div class="css-y7l8i8">
                                                <p data-sd-event="" class="css-1pvu6xc">Beautiful Straight summer
                                                    friendly Cotton kurtas (XS)</p>
                                                <p data-sd-event="" class="css-13erdig">XS</p>
                                                <div class="css-1sguf2h">
                                                    <div class="css-1u829o6">
                                                        <div class="css-ydbmoz">
                                                            <p data-sd-event="" class="css-w2ca8y">1</p>
                                                        </div>
                                                    </div>
                                                    <div class="css-1u829o6">
                                                        <div class="css-11guiio">
                                                            <p data-sd-event="" class="css-1eb5ut0">₹599</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="css-k8ajg4"><svg width="24" height="24" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg" class="css-0">
                                                    <path
                                                        d="M9.29 6.71a.996.996 0 0 0 0 1.41L13.17 12l-3.88 3.88a.996.996 0 1 0 1.41 1.41l4.59-4.59a.996.996 0 0 0 0-1.41L10.7 6.7c-.38-.38-1.02-.38-1.41.01z"
                                                        fill="var(--grey)" fill-opacity=".7"></path>
                                                </svg></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="css-21njle">
                                    <div to="/orders/undefined" class="css-1248chx">
                                        <div class="css-178hw70">
                                            <div class="css-1s0gct8">
                                                <div class="css-169inv6"><img alt=""
                                                        src="https://cdn-mediacf.blitzshopdeck.in/NushopCatalogue/tr:w-600,f-webp,fo-auto/Samvrita_Presented__Summer_Special_Cotton_Handblook_Short_Kurtis_MS7UH08DGO_2024-02-09_1.jpg"
                                                        class="css-vipixh"></div>
                                            </div>
                                            <div class="css-y7l8i8">
                                                <p data-sd-event="" class="css-1pvu6xc">Maroon Cotton Handblock Short
                                                    Kurtis (XS)</p>
                                                <p data-sd-event="" class="css-13erdig">XS</p>
                                                <div class="css-1sguf2h">
                                                    <div class="css-1u829o6">
                                                        <div class="css-ydbmoz">
                                                            <p data-sd-event="" class="css-w2ca8y">5</p>
                                                        </div>
                                                    </div>
                                                    <div class="css-1u829o6">
                                                        <div class="css-11guiio">
                                                            <p data-sd-event="" class="css-1eb5ut0">₹2,745</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="css-k8ajg4"><svg width="24" height="24" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg" class="css-0">
                                                    <path
                                                        d="M9.29 6.71a.996.996 0 0 0 0 1.41L13.17 12l-3.88 3.88a.996.996 0 1 0 1.41 1.41l4.59-4.59a.996.996 0 0 0 0-1.41L10.7 6.7c-.38-.38-1.02-.38-1.41.01z"
                                                        fill="var(--grey)" fill-opacity=".7"></path>
                                                </svg></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="css-nnryxh">
                        <div class="css-7yd8vv">
                            <p data-sd-event="" class="css-122o928"> Bill Details </p>
                            <div class="css-37icec">
                                <p data-sd-event="" class="css-1r8ov1f">Items</p>
                                <p data-sd-event="" class="css-1r8ov1f">2</p>
                            </div>
                            <div class="css-37icec">
                                <p data-sd-event="" class="css-1r8ov1f">Item total</p>
                                <p data-sd-event="" class="css-1r8ov1f">₹6,688</p>
                            </div>
                            <div class="css-37icec">
                                <p data-sd-event="" class="css-1p77vje">Sale Discount</p>
                                <p data-sd-event="" class="css-1p77vje">-₹3,344</p>
                            </div>
                            <div class="css-37icec">
                                <p data-sd-event="" class="css-1r8ov1f">Delivery fee</p>
                                <p data-sd-event="" class="css-1r8ov1f">₹0</p>
                            </div>
                            <div class="css-1si3iiv"></div>
                            <div class="css-37icec">
                                <p data-sd-event="" class="css-zw6a4m">Total amount</p>
                                <p data-sd-event="" class="css-zw6a4m">₹3,344</p>
                            </div>
                        </div>
                        <div class="css-1p5qa09"><svg width="24" height="24" viewBox="0 0 24 24" fill="#27ae60"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#2yuzreye6a)">
                                    <path d="M12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12s5.373 12 12 12z"
                                        fill="#27ae60"></path>
                                </g>
                                <defs>
                                    <clipPath id="2yuzreye6a">
                                        <path fill="#fff" d="M0 0h24v24H0z"></path>
                                    </clipPath>
                                </defs>
                            </svg>
                            <p data-sd-event="" class="css-1e0cjgj">Yay! your total discount is ₹4,050</p>
                        </div>
                    </div>
                    <div class="css-2hndyu">
                        <p data-sd-event="" class="css-1pb0btf">Delivery Address</p>
                        <p data-sd-event="" class="css-k6gico">5, dsdsdadaffsfaddasddda, Surat, Gujarat, 395006
                            Contact number:9452416225</p>
                        <p data-sd-event="" class="css-mmh4tj">Free Delivery within 3 days</p>
                    </div>
                </div>
                <div class="css-1r135sy">
                    <div class="css-gkht9t"><img height="64px" width="64px"
                            src="https://cdn-image.blitzshopdeck.in/ShopdeckWebsiteAssets/tr:w-600,f-webp,fo-auto/product_quality_trustmarkers/LOWEST_PRICE.webp"
                            alt="trustmarker">
                        <p data-sd-event="" class="css-1977mhj">Lowest Price</p>
                    </div>
                    <div class="css-gkht9t"><img height="64px" width="64px"
                            src="https://cdn-image.blitzshopdeck.in/ShopdeckWebsiteAssets/tr:w-600,f-webp,fo-auto/product_quality_trustmarkers/NEXT_DAY_DISPATCH.webp"
                            alt="trustmarker">
                        <p data-sd-event="" class="css-1977mhj">Next day dispatch</p>
                    </div>
                    <div class="css-gkht9t"><img height="64px" width="64px"
                            src="https://cdn-image.blitzshopdeck.in/ShopdeckWebsiteAssets/tr:w-600,f-webp,fo-auto/product_quality_trustmarkers/SUPERIOR_QUALTIY_TRUSTBADGE.webp"
                            alt="trustmarker">
                        <p data-sd-event="" class="css-1977mhj">Superior Quality</p>
                    </div>
                </div>

                <section class="css-e8nt7k">
                    <div class="css-1gaiyp2">
                        <div class="css-1ltv4zp"><svg width="52" height="32" viewBox="0 0 52 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.666 17.549A6.739 6.739 0 1 0 1.549 14.45a6.739 6.739 0 0 0 13.117 3.098z"
                                    fill="#5F259F"></path>
                                <path
                                    d="M11.167 14.242a.498.498 0 0 0-.49-.49h-.903l-2.07-2.372c-.189-.226-.49-.301-.791-.226l-.716.226c-.113.038-.15.188-.075.264l2.259 2.146H4.955c-.113 0-.188.075-.188.188v.376c0 .264.225.49.489.49h.527v1.807c0 1.355.715 2.146 1.92 2.146.377 0 .678-.038 1.054-.188v1.204c0 .34.264.603.603.603h.527a.243.243 0 0 0 .226-.226v-5.384h.866c.113 0 .188-.075.188-.188v-.377zm-2.41 3.237c-.225.113-.527.15-.753.15-.602 0-.903-.3-.903-.978v-1.807h1.656v2.635z"
                                    fill="#fff"></path>
                                <path
                                    d="M35.451 18.852v-2.447c0-.603-.226-.904-.79-.904-.226 0-.49.038-.64.075v3.577a.243.243 0 0 1-.226.226h-.866a.243.243 0 0 1-.226-.226v-4.179c0-.15.113-.264.226-.301a5.405 5.405 0 0 1 1.732-.301c1.355 0 2.108.715 2.108 2.033v2.786a.243.243 0 0 1-.226.226h-.527a.554.554 0 0 1-.565-.565zm3.389-1.468-.038.338c0 .452.301.716.79.716.377 0 .716-.113 1.093-.301.037 0 .075-.038.112-.038.076 0 .113.038.151.075.038.038.113.15.113.15.075.114.15.264.15.377a.522.522 0 0 1-.263.452c-.414.226-.904.339-1.43.339-.603 0-1.093-.15-1.469-.452a1.763 1.763 0 0 1-.602-1.355v-1.469c0-1.167.753-1.882 2.033-1.882 1.242 0 1.958.678 1.958 1.882v.904a.243.243 0 0 1-.226.226H38.84v.038zm-.038-.829h1.43v-.376c0-.452-.263-.753-.715-.753-.451 0-.715.263-.715.753v.376zm9.6.829-.037.338c0 .452.301.716.79.716.377 0 .716-.113 1.092-.301.038 0 .076-.038.113-.038.076 0 .113.038.15.075.039.038.114.15.114.15.075.114.15.264.15.377a.522.522 0 0 1-.263.452c-.414.226-.904.339-1.43.339-.603 0-1.093-.15-1.47-.452a1.763 1.763 0 0 1-.601-1.355v-1.469c0-1.167.753-1.882 2.033-1.882 1.242 0 1.957.678 1.957 1.882v.904a.243.243 0 0 1-.225.226h-2.372v.038zm-.037-.829h1.43v-.376c0-.452-.263-.753-.715-.753-.451 0-.715.263-.715.753v.376zm-22.138 2.862h.527a.243.243 0 0 0 .226-.226v-2.786c0-1.28-.678-2.033-1.807-2.033-.339 0-.715.075-.941.15V13.13a.579.579 0 0 0-.565-.564h-.527a.243.243 0 0 0-.226.225v6.4c0 .114.113.227.226.227h.866a.243.243 0 0 0 .226-.226v-3.54c.188-.075.451-.112.64-.112.564 0 .79.263.79.903v2.448c.038.263.264.527.565.527zm5.685-3.163v1.393c0 1.167-.79 1.883-2.108 1.883-1.28 0-2.108-.716-2.108-1.883v-1.393c0-1.167.79-1.882 2.108-1.882s2.108.715 2.108 1.882zm-1.317 0c0-.452-.264-.753-.753-.753-.49 0-.753.264-.753.753v1.393c0 .452.263.715.753.715.489 0 .753-.263.753-.715v-1.393zm-8.396-.64c0 1.205-.904 2.033-2.109 2.033-.3 0-.564-.038-.828-.15v1.694a.243.243 0 0 1-.226.226h-.866a.243.243 0 0 1-.226-.226v-5.986c0-.151.113-.264.226-.302a5.402 5.402 0 0 1 1.732-.3c1.355 0 2.297.827 2.297 2.107v.904zm-1.356-.979c0-.602-.414-.903-.979-.903a1.37 1.37 0 0 0-.564.113v2.484c.226.113.339.151.602.151.565 0 .979-.339.979-.904v-.94h-.038zm25.677.979c0 1.205-.904 2.033-2.108 2.033-.301 0-.565-.038-.828-.15v1.694a.243.243 0 0 1-.226.226h-.866a.243.243 0 0 1-.226-.226v-5.986c0-.151.113-.264.226-.302a5.402 5.402 0 0 1 1.732-.3c1.355 0 2.296.827 2.296 2.107v.904zm-1.355-.979c0-.602-.414-.903-.98-.903a1.37 1.37 0 0 0-.564.113v2.484c.226.113.339.151.602.151.565 0 .98-.339.98-.904v-.94h-.038z"
                                    fill="#5F259F"></path>
                            </svg><svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.338 15.8v3.24H12.31v-8h2.724a2.477 2.477 0 0 1 1.767.695c.479.428.747 1.046.734 1.684a2.232 2.232 0 0 1-.734 1.698c-.478.453-1.065.682-1.76.682h-1.704zm0-3.778v2.795h1.723c.382.012.752-.14 1.014-.415a1.361 1.361 0 0 0 .026-1.927l-.026-.025a1.326 1.326 0 0 0-1.014-.421l-1.723-.007zm6.565 1.365c.76 0 1.36.205 1.8.607.44.408.657.963.657 1.671v3.37h-.983v-.76h-.044c-.428.625-.99.938-1.698.938-.6 0-1.11-.179-1.512-.536a1.692 1.692 0 0 1-.606-1.34c0-.568.217-1.014.644-1.353.428-.338 1.002-.504 1.717-.504.612 0 1.11.115 1.506.332v-.236c0-.35-.154-.683-.422-.906a1.493 1.493 0 0 0-.989-.377c-.574 0-1.027.243-1.365.728l-.906-.568c.491-.708 1.225-1.066 2.201-1.066zm-1.327 3.976c0 .268.128.516.338.67.23.178.51.274.798.267.434 0 .848-.172 1.155-.478.338-.32.51-.696.51-1.13-.319-.255-.765-.382-1.34-.382-.415 0-.765.102-1.046.3-.274.204-.415.453-.415.753zM28 13.566l-3.433 7.886h-1.059l1.276-2.756-2.258-5.123h1.116l1.627 3.93h.026l1.588-3.93L28 13.566z"
                                    fill="#5F6368"></path>
                                <path
                                    d="M9.184 15.098c0-.313-.025-.626-.076-.932H4.775v1.767h2.482a2.127 2.127 0 0 1-.918 1.398v1.148h1.48c.868-.797 1.365-1.978 1.365-3.381z"
                                    fill="#4285F4"></path>
                                <path
                                    d="M4.775 19.59c1.238 0 2.285-.409 3.044-1.11l-1.48-1.15c-.415.281-.945.441-1.564.441-1.2 0-2.214-.81-2.577-1.895H.673v1.187a4.6 4.6 0 0 0 4.102 2.526z"
                                    fill="#34A853"></path>
                                <path
                                    d="M2.197 15.876a2.772 2.772 0 0 1 0-1.761v-1.18H.673a4.555 4.555 0 0 0 0 4.121l1.524-1.18z"
                                    fill="#FBBC04"></path>
                                <path
                                    d="M4.775 12.22a2.472 2.472 0 0 1 1.761.69L7.844 11.6a4.386 4.386 0 0 0-3.069-1.2 4.595 4.595 0 0 0-4.102 2.534l1.525 1.186c.363-1.09 1.378-1.9 2.577-1.9z"
                                    fill="#EA4335"></path>
                            </svg><svg width="36" height="32" viewBox="0 0 36 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m26.384 12.216.252-.202c.875-.743 1.997-.661 2.746.22.076.089.114.095.19.02.05-.057.106-.101.157-.158.586-.573 1.36-.743 2.085-.422.762.34 1.172.939 1.178 1.777.013 1.808.007 3.61.007 5.418 0 .642-.397 1.045-1.034 1.045-.252 0-.504-.019-.756.007-.258.025-.334-.057-.334-.328.013-1.764.007-3.528.007-5.292v-.22c-.007-.41-.17-.58-.561-.599-.353-.019-.599.196-.636.555-.007.081 0 .17 0 .252v4.567c0 .668-.385 1.058-1.052 1.052-.34-.006-.8.151-.996-.07-.17-.188-.056-.636-.056-.97v-4.693c0-.554-.36-.838-.826-.649-.29.12-.384.353-.384.655.006 1.462 0 2.917 0 4.379v.346c-.019.611-.41.996-1.014 1.002-.252.006-.504-.019-.756.006-.271.025-.353-.05-.347-.34.013-2.476.006-4.952.006-7.434 0-.107.007-.208 0-.315-.012-.138.045-.182.183-.182.58.006 1.153.006 1.733 0 .145 0 .214.037.201.195-.012.113 0 .214.007.378z"
                                    fill="#02B9EF"></path>
                                <path
                                    d="M13.027 15.63v2.583c-.006 1.122-.592 1.701-1.713 1.708-.492 0-.99.006-1.48 0-.996-.013-1.727-.674-1.777-1.67a20.243 20.243 0 0 1-.007-2.142c.05-1.02.832-1.739 1.865-1.751.271-.007.548 0 .82 0 .264-.007.365-.158.358-.41 0-.252-.113-.365-.365-.353-.284.007-.567.007-.85 0-.694-.012-1.078-.39-1.072-1.07 0-.278-.126-.65.057-.813.158-.139.517-.05.788-.05.705-.007 1.405 0 2.11 0 .75 0 1.26.51 1.266 1.266.007.894 0 1.801 0 2.702zM11.1 17.06v-.315c0-.642 0-.642-.643-.617-.321.013-.498.177-.504.51-.006.265-.006.523 0 .788.006.453.208.573.863.592.485.013.24-.328.284-.517.025-.138-.007-.296 0-.44zm7.534-2.116c0 .964.013 1.934-.006 2.898-.013.743-.189 1.417-.907 1.814-.29.158-.605.246-.933.252-.724.013-1.449 0-2.173.013-.177 0-.214-.063-.208-.22.013-.265-.006-.524.006-.788a.919.919 0 0 1 .901-.908c.328-.012.65-.006.977 0 .264 0 .41-.107.41-.39 0-.29-.14-.39-.404-.397-.441-.013-.882.05-1.317-.076-.75-.22-1.297-.844-1.316-1.619-.038-1.228-.013-2.457-.02-3.685 0-.139.045-.183.184-.177.516.007 1.026.013 1.543 0 .227-.006.195.12.195.259v2.772c0 .403.19.617.542.63.416.012.598-.158.598-.58 0-.932.007-1.871-.006-2.803 0-.22.057-.284.277-.278.46.02.927.026 1.386 0 .252-.012.29.082.284.303-.019.989-.013 1.984-.013 2.98zm-16.052 1.43v-3.087c0-1.008.618-1.638 1.632-1.626.661.007 1.323-.075 1.978.05.838.165 1.367.813 1.373 1.677.007.913 0 1.827 0 2.74 0 1.147-.674 1.846-1.82 1.877a19.06 19.06 0 0 1-1.04 0c-.157-.006-.227.044-.22.215.012.252.006.504 0 .756-.013.541-.397.932-.933.938-.315.007-.712.133-.913-.05-.19-.17-.05-.573-.057-.876-.006-.87 0-1.745 0-2.614zm1.903-1.544v.599c0 .712 0 .712.712.649.308-.026.453-.177.46-.485.006-.353-.013-.712.006-1.065.038-1.02-.151-.92-.983-.926-.151 0-.202.044-.202.195.013.34.007.687.007 1.033z"
                                    fill="#06306F"></path>
                                <path
                                    d="M20.418 16.386c0-.838-.007-1.682.006-2.52 0-.195-.044-.277-.258-.27-.284.012-.662.094-.82-.045-.195-.182-.044-.573-.069-.875v-.063c0-.296-.094-.643.032-.863.126-.22.51-.082.78-.152.536-.138.94-.447 1.267-.875.227-.29.51-.498.876-.567.195-.038.315-.013.302.24-.019.352 0 .711-.006 1.07-.006.151.05.202.202.195.252-.006.503.007.755-.006.152-.006.202.05.196.202a63.02 63.02 0 0 0 0 1.543c0 .145-.038.22-.196.202-.031-.007-.063 0-.094 0-.277.025-.661-.126-.806.063-.139.176-.05.542-.05.825 0 1.714-.007 3.42.006 5.134 0 .24-.064.315-.303.297-.227-.02-.46 0-.693-.007-.68-.025-1.128-.485-1.128-1.165v-2.363z"
                                    fill="#02B9EF"></path>
                            </svg><svg width="44" height="32" viewBox="0 0 44 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M33.321 20.213 38 15.945l-2.216-4.415-2.463 8.683z" fill="#097939"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="m31.745 20.213 4.679-4.268-2.216-4.415-2.463 8.683z" fill="#ED752E"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="m9.388 11.58-1.97 7.015 6.993.049 1.92-7.064h1.773l-2.303 8.212a.824.824 0 0 1-.75.568H6.089c-.543 0-.865-.424-.718-.947l2.196-7.833h1.822zm21.619-.05h1.773l-2.463 8.83h-1.823l2.513-8.83zM18.3 15.21l8.865-.05.591-1.864h-9.013l.542-1.716 9.604-.089c.598-.005.954.458.796 1.035l-.904 3.307c-.158.577-.771 1.044-1.37 1.044h-7.929l-.934 3.63h-1.725L18.3 15.21z"
                                    fill="#747474"></path>
                            </svg><svg width="40" height="32" viewBox="0 0 40 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M37.807 12.404 40 16.764l-4.613 4.367 2.42-8.727z" fill="#018C45"></path>
                                <path d="m36.282 12.404 2.194 4.36-4.614 4.367 2.42-8.727z" fill="#F47920"></path>
                                <path
                                    d="M4.639 15.045h1.064c.376 0 .649-.052.818-.162.168-.11.298-.299.37-.571.077-.28.058-.468-.053-.578-.11-.11-.376-.162-.791-.162H5.04l-.402 1.473zM1.07 19.54l2.193-7.89h3.504c1.097 0 1.823.176 2.2.532.37.357.44.935.22 1.746-.136.48-.337.882-.623 1.2a2.874 2.874 0 0 1-1.096.753c.383.09.63.272.74.551.11.273.097.675-.04 1.2l-.265 1.104v.032c-.078.312-.052.474.07.487l-.077.292H5.528c.006-.188.026-.35.039-.493.02-.143.039-.253.058-.331l.22-.785c.111-.41.118-.695.014-.863-.104-.17-.338-.253-.708-.253H4.16l-.772 2.718H1.07zm14.606-5.82-1.616 5.82H12.1l.24-.85c-.343.338-.7.597-1.057.76-.35.168-.727.252-1.116.252-.324 0-.603-.058-.824-.175a1.15 1.15 0 0 1-.513-.525c-.103-.201-.142-.454-.13-.76.02-.298.124-.797.319-1.498l.837-3.024h2.147l-.837 3.004c-.123.441-.15.753-.09.915.064.169.226.26.492.26a.9.9 0 0 0 .688-.299c.188-.201.338-.493.448-.889l.83-2.997h2.142v.006zm2.77 1.48h.76c.486 0 .83-.059 1.03-.176.195-.117.332-.33.416-.63.084-.304.065-.512-.065-.628-.123-.117-.434-.176-.94-.176h-.753l-.448 1.61zm-3.549 4.34 2.187-7.89h3.01c.662 0 1.181.04 1.544.124.364.084.656.214.863.402.266.247.428.551.5.921.065.364.026.792-.11 1.298-.247.882-.675 1.557-1.285 2.03-.617.468-1.376.702-2.278.702h-1.407l-.675 2.413h-2.349zm11.037-2.602c-.227.091-.526.182-.89.273-.577.156-.901.363-.973.616-.051.163-.026.292.052.39.078.09.214.136.41.136.356 0 .641-.091.856-.266.214-.182.376-.46.486-.85.02-.084.04-.143.046-.188l.013-.11zm-.52 2.602.02-.551c-.344.26-.694.454-1.051.577-.35.123-.727.188-1.123.188-.61 0-1.031-.162-1.278-.486-.24-.318-.279-.779-.117-1.37.156-.577.442-1.005.844-1.278.402-.272 1.077-.473 2.024-.596.117-.02.28-.033.48-.059.701-.078 1.09-.266 1.175-.57.045-.17.02-.293-.085-.364-.097-.078-.285-.117-.551-.117a.983.983 0 0 0-.551.143.835.835 0 0 0-.331.441h-2.09a2.413 2.413 0 0 1 1.155-1.48c.578-.337 1.337-.499 2.284-.499.441 0 .844.039 1.194.13.35.084.61.207.772.357.208.188.325.395.363.629.04.234-.006.571-.123 1.006l-.902 3.244a.73.73 0 0 0-.02.285c.02.085.053.156.118.201l-.046.163h-2.16v.006zm2.174 2.297.474-1.726h.616c.208 0 .364-.039.48-.117.117-.078.195-.207.24-.382a.977.977 0 0 0 .046-.247 2.588 2.588 0 0 0 0-.318l-.331-5.333h2.174l-.033 3.53 1.895-3.53h2.018l-3.355 5.794c-.383.649-.655 1.09-.83 1.336-.176.24-.338.429-.5.552a1.823 1.823 0 0 1-.688.37c-.253.071-.63.11-1.142.11-.149 0-.318 0-.5-.013-.175 0-.37-.013-.564-.026z"
                                    fill="#29387E"></path>
                            </svg><svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.007 22.086a8.064 8.064 0 0 0 5.473 2.13c4.513 0 8.166-3.681 8.166-8.21 0-4.541-3.653-8.223-8.166-8.223a8.063 8.063 0 0 0-5.473 2.13 8.243 8.243 0 0 0-2.695 6.094 8.19 8.19 0 0 0 2.695 6.08z"
                                    fill="#E9B040"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M28.561 20.577c0-.141.113-.254.254-.254.155 0 .268.113.268.254a.26.26 0 0 1-.268.268c-.14 0-.254-.112-.254-.268zm.254.212a.217.217 0 0 0 .212-.212c0-.113-.099-.197-.212-.197a.201.201 0 0 0-.197.197c0 .113.099.212.197.212zm-.028-.085h-.056v-.24h.098c.015 0 .043 0 .057.015.028.014.028.028.028.056s-.014.056-.042.056l.056.113h-.07l-.029-.099h-.042v.1-.142h.057c.014 0 .014-.014.014-.028s0-.014-.014-.028h-.057v.197z"
                                    fill="#E9B040"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.645 15.132c-.028-.296-.084-.578-.14-.874H13.51c.056-.296.14-.579.225-.86h4.528a9.434 9.434 0 0 0-.338-.875h-3.837c.141-.3.297-.591.466-.875h2.891a7.428 7.428 0 0 0-.62-.86h-1.65c.255-.312.533-.604.832-.875a8.166 8.166 0 0 0-5.487-2.13c-4.5 0-8.167 3.682-8.167 8.224 0 4.528 3.667 8.209 8.166 8.209a8.1 8.1 0 0 0 5.488-2.13 7.82 7.82 0 0 0 .818-.86h-1.65a9.748 9.748 0 0 1-.621-.875h2.891c.182-.279.343-.571.48-.875h-3.837a9.187 9.187 0 0 1-.353-.86h4.528a8.79 8.79 0 0 0 .24-.875c.056-.282.113-.578.141-.874a8.857 8.857 0 0 0 0-1.735z"
                                    fill="#CC2131"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M28.561 17.911c0-.155.113-.267.254-.267a.26.26 0 0 1 .268.267.268.268 0 0 1-.268.268c-.14 0-.254-.127-.254-.268zm.254.198c.113 0 .212-.085.212-.198 0-.112-.099-.197-.212-.197a.202.202 0 0 0-.197.197c0 .113.099.198.197.198zm-.028-.085h-.056v-.226h.155c.028.015.028.043.028.071 0 .014-.014.042-.042.057l.056.098h-.07l-.029-.084h-.042v.084-.127h.028c.014 0 .029 0 .029-.014.014 0 .014-.014.014-.028 0 0 0-.014-.014-.014 0-.015-.015 0-.029 0h-.028v.183z"
                                    fill="#fff"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M13.228 18.377c-.268.07-.465.113-.662.113-.424 0-.678-.268-.678-.748 0-.099.014-.197.029-.31l.056-.324.042-.268.381-2.314h.846l-.098.508h.536l-.127.846h-.536l-.226 1.383c-.014.07-.014.112-.014.14 0 .184.085.255.296.255.099 0 .184-.014.268-.029l-.113.748zm2.737-.028c-.31.084-.592.127-.903.127-.959 0-1.51-.508-1.51-1.51 0-1.17.65-2.017 1.552-2.017.72 0 1.185.48 1.185 1.227 0 .254-.028.494-.098.833h-1.764c-.014.056-.014.084-.014.113 0 .395.268.592.776.592.324 0 .607-.07.917-.211l-.141.846zm-.522-2.017v-.17c0-.282-.155-.437-.423-.437-.282 0-.48.212-.564.606h.987zm-8.985 2.087h-.875l.508-3.202-1.143 3.202h-.606l-.07-3.188-.537 3.188h-.86l.691-4.16H4.85l.028 2.567.86-2.568H7.15l-.691 4.161zm2.13-1.509c-.085-.014-.113-.014-.17-.014-.507 0-.761.197-.761.508 0 .211.127.352.324.352.423 0 .593-.352.607-.846zm.705 1.51h-.762l.015-.353c-.198.267-.466.409-.931.409-.424 0-.79-.381-.79-.931 0-.155.028-.296.07-.437.141-.523.663-.847 1.467-.861.099 0 .254 0 .395.014.028-.113.028-.155.028-.226 0-.225-.183-.296-.592-.296-.254 0-.536.042-.734.113l-.127.028-.056.014.127-.761c.409-.127.705-.184 1.03-.184.761 0 1.17.353 1.17 1.002 0 .169.014.296-.042.663l-.197 1.213-.029.211-.014.17-.014.113-.014.098zm10.932-3.358c.254 0 .48.07.79.226l.155-.903c-.085-.042-.113-.042-.226-.085l-.352-.099a1.738 1.738 0 0 0-.41-.042c-.437 0-.69.014-.958.17-.142.098-.325.225-.523.45l-.113-.027-.902.634.042-.352h-.931l-.55 3.385h.889l.324-1.82s.127-.254.184-.338c.169-.212.31-.212.493-.212h.071c-.03.215-.044.432-.042.65 0 1.1.62 1.79 1.58 1.79.24 0 .451-.028.775-.112l.156-.96c-.282.156-.537.226-.748.226-.522 0-.832-.395-.832-1.015 0-.917.465-1.566 1.128-1.566zm7.49-.804-.198 1.185c-.211-.324-.465-.48-.804-.48-.466 0-.903.268-1.17.776v-.014l-.565-.338.057-.353h-.945l-.537 3.385h.875l.296-1.82s.226-.253.282-.338a.55.55 0 0 1 .395-.211 3.05 3.05 0 0 0-.155 1.001c0 .847.437 1.41 1.086 1.41.325 0 .579-.112.818-.38l-.042.338h.832l.677-4.16h-.902zm-1.086 3.357c-.297 0-.452-.225-.452-.663 0-.663.282-1.142.691-1.142.31 0 .466.24.466.663 0 .677-.282 1.142-.705 1.142zm-4.077-.705c-.084-.014-.113-.014-.169-.014-.508 0-.762.197-.762.508 0 .211.127.352.325.352.423 0 .592-.352.606-.846zm.706 1.51h-.776l.028-.353c-.198.267-.466.409-.931.409-.437 0-.818-.367-.818-.931 0-.804.606-1.298 1.565-1.298.1 0 .254 0 .381.014.029-.113.043-.155.043-.225 0-.226-.183-.297-.607-.297-.24 0-.536.043-.733.113l-.113.028-.056.014.126-.761c.41-.127.706-.184 1.03-.184.762 0 1.157.353 1.157 1.002 0 .17.028.296-.042.663l-.184 1.213-.028.212-.028.169-.014.113v.098zM11.14 15.752c.17 0 .409.014.663.057l.127-.79c-.254-.028-.593-.07-.79-.07-.988 0-1.312.535-1.312 1.156 0 .41.183.705.663.93.353.17.41.198.41.354 0 .21-.184.338-.523.338-.268 0-.522-.043-.804-.141l-.099.776.014.014.17.028c.056.014.127.028.225.042.212.014.395.028.508.028.988 0 1.397-.38 1.397-1.128 0-.465-.226-.747-.663-.945-.381-.17-.424-.197-.424-.353 0-.155.17-.296.438-.296z"
                                    fill="#1B3771"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="m21.41 14.117-.156.903c-.31-.156-.536-.226-.79-.226-.663 0-1.128.649-1.128 1.566 0 .634.31 1.015.832 1.015.211 0 .465-.07.747-.211l-.155.945c-.324.084-.536.127-.776.127-.959 0-1.551-.692-1.551-1.806 0-1.48.818-2.525 1.989-2.525.155 0 .296.014.409.043l.352.084c.113.043.142.057.226.085zm-2.85.62h-.085c-.296 0-.465.142-.733.55l.084-.521h-.804l-.55 3.385h.89c.323-2.074.408-2.426.831-2.426h.057c.084-.41.197-.706.338-.974l-.028-.013zm-5.106 3.372a1.83 1.83 0 0 1-.635.112c-.451 0-.705-.253-.705-.747 0-.085.014-.197.028-.296l.056-.339.043-.267.38-2.314h.875l-.099.508h.452l-.113.832h-.452l-.24 1.41c-.014.057-.014.1-.014.142 0 .169.085.24.297.24.098 0 .183 0 .24-.029l-.113.748zm-3.4-2.271c0 .423.198.719.663.945.367.17.423.225.423.366 0 .212-.155.31-.508.31-.268 0-.507-.041-.79-.126l-.126.776.042.014.155.028a.929.929 0 0 0 .24.028c.197.029.367.029.48.029.93 0 1.368-.353 1.368-1.129 0-.466-.183-.734-.62-.945-.382-.17-.424-.212-.424-.367 0-.183.155-.268.437-.268.17 0 .41.014.635.043l.127-.776a5.113 5.113 0 0 0-.776-.07c-.987 0-1.34.521-1.326 1.142zm18.112 2.313h-.832l.042-.325c-.24.254-.494.367-.819.367-.648 0-1.071-.55-1.071-1.396 0-1.129.663-2.088 1.438-2.088.353 0 .607.155.847.466l.197-1.185h.875l-.677 4.161zm-1.298-.79c.41 0 .691-.48.691-1.143 0-.437-.155-.662-.465-.662-.395 0-.691.465-.691 1.128 0 .452.155.677.465.677zm-10.706.72c-.31.098-.593.14-.917.14-.987 0-1.495-.521-1.495-1.523 0-1.157.649-2.017 1.537-2.017.734 0 1.2.48 1.2 1.227 0 .254-.03.494-.114.847h-1.749c-.014.042-.014.07-.014.099 0 .395.268.592.776.592.325 0 .607-.057.917-.212l-.141.846zm-.494-2.018v-.169c0-.282-.155-.437-.423-.437-.282 0-.48.211-.564.606h.987zm-8.985 2.088h-.875l.508-3.202-1.142 3.202h-.607l-.07-3.174-.536 3.174h-.818l.69-4.161h1.27l.043 2.581.846-2.581h1.382l-.691 4.161zm2.186-1.51c-.084 0-.127-.013-.197-.013-.494 0-.748.183-.748.521 0 .212.113.339.31.339.367 0 .621-.338.635-.846zm.65 1.51h-.734l.014-.353c-.226.282-.522.41-.931.41-.48 0-.804-.367-.804-.917 0-.832.564-1.312 1.551-1.312.099 0 .226.014.367.028.028-.113.028-.155.028-.212 0-.225-.155-.31-.564-.31-.254 0-.536.029-.734.085l-.127.042-.084.014.127-.761c.437-.127.733-.17 1.058-.17.761 0 1.17.339 1.17.988 0 .169-.014.296-.07.677l-.198 1.199-.028.211-.014.17-.014.127-.014.084zm13.315-1.51c-.099 0-.141-.013-.197-.013-.508 0-.762.183-.762.521 0 .212.127.339.324.339.353 0 .62-.338.635-.846zm.649 1.51h-.734l.014-.353c-.225.282-.522.41-.93.41-.48 0-.805-.367-.805-.917 0-.832.564-1.312 1.552-1.312.099 0 .226.014.353.028.028-.113.042-.155.042-.212 0-.225-.155-.31-.564-.31-.254 0-.55.029-.748.085l-.113.042-.084.014.127-.761c.437-.127.733-.17 1.058-.17.761 0 1.156.339 1.156.988 0 .169 0 .296-.07.677l-.184 1.199-.028.211-.028.17-.014.127v.084zm2.37-3.413h-.085c-.296 0-.466.14-.734.55l.085-.522h-.804l-.536 3.385h.874c.325-2.074.41-2.426.833-2.426h.056c.085-.41.198-.706.339-.974l-.029-.013z"
                                    fill="#fff"></path>
                            </svg><svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.209 20.223H12.01l1.374-8.44h2.198l-1.374 8.44zm-4.046-8.44-2.095 5.805-.248-1.25-.74-3.795s-.089-.76-1.042-.76H2.575l-.04.143s1.058.22 2.298.964l1.909 7.333h2.29l3.496-8.44h-2.365zm17.284 8.44h2.018l-1.76-8.44H25.94c-.816 0-1.014.628-1.014.628l-3.278 7.812h2.291l.458-1.254h2.794l.257 1.254zm-2.418-2.985 1.155-3.16.65 3.16h-1.805zm-3.21-3.426L22.133 12s-.968-.368-1.977-.368c-1.09 0-3.68.476-3.68 2.794 0 2.18 3.04 2.208 3.04 3.353s-2.727.94-3.626.218l-.327 1.895s.981.477 2.48.477c1.5 0 3.762-.777 3.762-2.89 0-2.194-3.067-2.399-3.067-3.353 0-.954 2.14-.832 3.081-.314z"
                                    fill="#2566AF"></path>
                                <path
                                    d="m7.82 16.338-.74-3.796s-.089-.76-1.042-.76H2.575l-.04.143s1.664.345 3.26 1.638c1.527 1.235 2.025 2.775 2.025 2.775z"
                                    fill="#E6A540"></path>
                            </svg></div>
                    </div>
                </section>
            </section>
        </div>

        <style>
        .css-k6gico {
            color: rgb(172, 169, 169);
            font-size: 15px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

      

        .css-1pypun4 {
            position: relative;
            min-height: 1px;
            text-align: left;
            display: block;
            flex: 0 0 100%;
            max-width: 100%;
            max-height: calc(-138px + 100vh);

        }

        .css-aybz4r>* {
            padding-left: 0px;
            padding-right: 0px;
        }

     

        .css-w12iaj {
            margin: 0px auto;
            max-width: 500px;
            padding-right: 12px;
            padding-bottom: 12px;
            padding-left: 12px;
            padding-top: 0px !important;
            margin-left: 60%;
        }

     

        .css-1minrv3 {
            margin: 0px;
        }

        .css-z50h22 {
            margin: 0px 0px 16px;
        }

        .css-1066lcq {
            display: flex;
            -webkit-box-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            align-items: center;
        }

      

        .css-104up56 {
            text-align: left;
            word-break: break-word;
            color: rgba(0, 0, 0, 0.7);
            font-family: var(--heading), sans-serif;
            font-weight: var(--heading_weight);
            font-size: 25px;
            line-height: 20px;
            text-transform: initial;
            margin: 20px 0px 20px;
        }

        .css-vnst0l {
            padding-left: 10px;
        }

        .css-1pwpv5d {
            display: flex;
            flex-flow: wrap;
            row-gap: 0px;
            margin-left: 0px;
            margin-right: 0px;
        }

        .css-1pwpv5d>* {
            padding-left: 0px;
            padding-right: 0px;
        }

        .css-tvs240 {
            position: relative;
            min-height: 1px;
            text-align: left;
            border: 1px solid rgb(183, 179, 179);
            display: block;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .css-1jxsi8s {
            flex-shrink: 0;
            position: relative;
            border-radius: 4px;
            margin-right: 40px;
        }

        .css-k80332 {
            display: flex;
            -webkit-box-align: center;

            min-width: 32px;
            padding: 20px 24px;
            border: 1px solid var(--grey4);
            width: 100%;
            align-items: flex-start;
        }

        .css-bvdfif {
            appearance: none;
            min-width: 24px;
            height: 24px;

            padding: 4px;
            background-clip: content-box;
            border: 2px solid var(--grey1);
            background-color: var(--grey5);
            border-radius: 50%;
        }

        [type="checkbox"] {
            box-sizing: border-box;
            padding: 0;

        }

        [type="radio"] {

            box-sizing: border-box;
            /* padding: 0; */
            margin-top: 7px;
            border: 0px;
            width: 10%;
            height: 1.5em;
            accent-color: rgb(51, 158, 51);

        }

        button,
        input {
            overflow: visible;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        .css-1g1oew2 {
            display: flex;
            width: 100%;
            flex-direction: column;
        }

        .css-ha9uku {
            display: flex;
            width: 100%;
            -webkit-box-pack: justify;
            justify-content: space-between;
        }

        .css-1aq4tuo {
            width: 100%;
            display: flex;
            -webkit-box-pack: justify;
            justify-content: space-between;
        }

        .css-1ozvql9 {
            padding: 0px 12px;
        }

        .css-1phsixa {
            padding-bottom: 0px;
        }

        .css-1uf3vej {
            text-align: left;
            word-break: break-word;
            color: rgba(0, 0, 0, 0.7);
            font-family: var(--body), sans-serif;
            font-weight: var(--body_weight);
            font-size: 14px;
            line-height: 20px;
            text-transform: initial;
            margin: 0px;
        }

        .css-1o3n2c6 {
            min-width: fit-content;
            cursor: pointer;
        }

        .css-1ul1zn0 {
            text-align: left;
            word-break: break-word;
            color: white;
            font-family: var(--body), sans-serif;
            font-weight: var(--body_weight);
            font-size: 12px;
            line-height: 16px;
            text-transform: initial;
            margin: 0px;
            padding: 4px 15px;
            border-radius: 4px;
            background-color: rgb(39, 174, 96);
        }

        .css-tuus37 {
            padding: 0px 12px;
            cursor: pointer;
        }

        .css-1y5rn99 {
            margin: 0px;
            height: 24px;
            width: 24px;
        }

        img {
            border-style: none;
        }

        .css-1pwpv5d>* {
            padding-left: 0px;
            padding-right: 0px;
        }

        .css-tvs240 {
            position: relative;
            min-height: 1px;
            text-align: left;
            display: block;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .css-1jxsi8s {
            flex-shrink: 0;
            position: relative;
            border-radius: 4px;
        }

        .css-y3bq02 {
            display: flex;
            -webkit-box-align: center;
            min-width: 32px;
            padding: 20px 24px;
            width: 100%;
            border: 1px solid var(--grey4);
            align-items: flex-start;
        }

        .css-bvdfif:checked {
            background-color: var(--grey1);
        }

        .css-bvdfif {
            appearance: none;
            min-width: 24px;
            height: 24px;
            padding: 4px;
            background-clip: content-box;
            border: 2px solid var(--grey1);
            background-color: var(--grey5);
            border-radius: 50%;
        }

        [type="checkbox"],
        [type="radio"] {
            box-sizing: border-box;
            padding: 0;
        }

        button,
        input {
            overflow: visible;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        .css-1g1oew2 {
            display: flex;
            width: 100%;
            flex-direction: column;
        }

        .css-ha9uku {
            display: flex;
            width: 100%;
            -webkit-box-pack: justify;
            justify-content: space-between;
        }

        .css-1aq4tuo {
            width: 100%;
            display: flex;
            -webkit-box-pack: justify;
            justify-content: space-between;
        }

        .css-1ozvql9 {
            padding: 0px 12px;
        }

        .css-1phsixa {
            padding-bottom: 0px;
        }

        .css-1uf3vej {
            text-align: left;
            word-break: break-word;
            color: rgba(0, 0, 0, 0.7);
            font-family: var(--body), sans-serif;
            font-weight: var(--body_weight);
            font-size: 14px;
            line-height: 20px;
            text-transform: initial;
            margin: 0px;
        }

     
        .css-3p8lbe {
            margin: 0px;
        }

       
        .css-5gxtus {
            margin: 0px;
        }

      

        .css-4ndaiv {
            position: relative;
            min-height: 1px;
            text-align: left;
            display: block;
            flex: 0 0 100%;
            max-width: 100%;
            background-color: var(--white1);
        }


     
        .css-1rh1sbf {
            margin: 0px;
        }

        .css-2hndyu {
            margin: 0px;
        }

        .css-13dsnc9 {
            text-align: left;
            word-break: break-word;
            color: rgb(0, 0, 0);
            font-family: var(--body), sans-serif;
            font-weight: var(--body_weight);
            font-size: 12px;
            line-height: 16px;
            text-transform: initial;
            margin: 0px;
        }

        .css-1chqms3 {
            margin: 0px;
            display: flex;
            -webkit-box-pack: start;
            justify-content: start;
            -webkit-box-align: center;
            align-items: center;
        }

        .css-1nq1wek {
            text-align: left;
            word-break: break-word;
            color: rgb(0, 0, 0);
            font-family: var(--heading), sans-serif;
            font-weight: var(--heading_weight);
            font-size: 16px;
            line-height: 24px;
            text-transform: initial;
            margin: 0px 8px 0px 0px;
        }

        .css-1l968gz {
            position: relative;
            appearance: none;
            overflow: hidden;
            outline: 0px;
            cursor: pointer;
            font-family: var(--body), sans-serif;
            font-weight: bold;
            background-color: var(--grey);
            color: var(--white1);
            border: 1px solid transparent;
            padding: 12px;
            font-size: 14px;
            line-height: 20px;
            text-transform: uppercase;
        }

        button,
        select {
            text-transform: none;
        }

        button,
        input {
            overflow: visible;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        .css-2f3j1g {
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            font-size: inherit;
        }

   

        .css-7v11po {
            margin: 0px;
        }

       
        .css-n53zl6 {
            margin: 0px;
            /* box-shadow: 0 1px 5px 0 black; */
            border: solid 1px rgb(167, 165, 165);
            padding: 12px 16px !important;

        }

        .css-18gqd4h {
            margin: 0px;
            display: flex;
            /* border: 1px solid grey; */
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            justify-content: space-between;
            cursor: pointer;
        }

        .css-1dqxbxv {
            margin: 0px;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            column-gap: 8px;
            max-width: 70%;
        }

        .css-14w7bcf {
            margin: 0px;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            flex: 0 0 auto;
            height: 48px;
            width: 48px;
        }

        .css-1icn1af {
            transform: rotate(270deg);
        }

        .css-2hndyu {
            margin: 0px;
        }

        .css-n7bzbm {
            text-align: left;
            word-break: break-word;
            color: rgb(0, 0, 0);
            font-family: var(--heading), sans-serif;
            font-weight: var(--heading_weight);
            font-size: 12px;
            line-height: 16px;
            text-transform: initial;
            margin: 0px 0px 4px;
        }

        .css-1p77vje {
            text-align: left;
            word-break: break-word;
            color: rgb(39, 174, 96);
            font-family: var(--body), sans-serif;
            font-weight: var(--body_weight);
            font-size: 12px;
            line-height: 16px;
            text-transform: initial;
            margin: 0px;
        }

        .css-w5g3vl {
            text-align: left;
            word-break: break-word;
            color: rgb(39, 174, 96);
            font-family: var(--heading), sans-serif;
            font-weight: var(--heading_weight);
            font-size: 14px;
            line-height: 20px;
            text-transform: initial;
            margin: 0px;
        }

        .css-assxh2 {
            margin: 0px;
        }

     

        .css-1vspo5p {
            margin: 0px;
        }

        .css-1w8jx56 {
            text-align: left;
            word-break: break-word;
            color: rgba(0, 0, 0, 0.7);
            font-family: var(--heading), sans-serif;
            font-weight: var(--heading_weight);
            font-size: 14px;
            line-height: 20px;
            text-transform: initial;
            margin: 0px 0px 8px;
        }

        .css-2hndyu {
            margin: 0px;
        }

        .css-21njle {
            margin: 0px;
            padding-bottom: 32px;
        }

        .css-1248chx {
            margin: 0px;
            width: 100%;
            border: 1px solid var(--grey4);
            cursor: pointer;
        }

        .css-178hw70 {
            display: flex;
            row-gap: 16px;
            -webkit-box-align: center;
            align-items: center;
            margin: 0px;
            flex-flow: row;
            padding: 12px;
        }

        .css-1s0gct8 {
            position: relative;
            max-width: 100%;
            min-height: 1px;
            text-align: left;
            flex: 0 0 106px;
        }

        .css-178hw70>* {
            padding-left: 8px;
            padding-right: 8px;
        }

        .css-169inv6 {
            overflow: hidden;
            position: relative;
            padding-bottom: 140%;
        }

        .css-vipixh {
            max-height: 100%;
            max-width: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        img {
            border-style: none;
        }

        .css-178hw70>* {
            padding-left: 8px;
            padding-right: 8px;
        }

        .css-y7l8i8 {
            position: relative;
            max-width: 100%;
            min-height: 1px;
            text-align: left;
            flex: 1 1 auto;
        }

       

        .css-1pvu6xc {
            text-align: left;
            word-break: break-word;
            color: rgb(0, 0, 0);
            font-family: var(--heading), sans-serif;
            font-weight: var(--heading_weight);
            font-size: 12px;
            line-height: 16px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 185px;
            text-transform: capitalize;
            margin: 0px 0px 8px;
        }

      

        .css-13erdig {
            text-align: left;
            word-break: break-word;
            color: rgba(0, 0, 0, 0.7);
            font-family: var(--heading), sans-serif;
            font-weight: var(--heading_weight);
            font-size: 12px;
            line-height: 16px;
            text-transform: capitalize;
            margin: 0px 0px 18px;
        }

        .css-1sguf2h {
            display: flex;
            flex-flow: wrap;
            row-gap: 8px;
            margin-left: -4px;
            margin-right: -4px;
            -webkit-box-pack: justify;
            justify-content: space-between;
            -webkit-box-align: end;
            align-items: end;
        }

     
        .css-1u829o6 {
            position: relative;
            min-height: 1px;
            text-align: left;
            display: block;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .css-1sguf2h>* {
            padding-left: 4px;
            padding-right: 4px;
        }

        .css-ydbmoz {
            margin: 0px;
            border: 1px solid var(--grey4);
            padding: 5px;
            text-align: center;
        }

        .css-w2ca8y {
            text-align: center;
            word-break: break-word;
            color: rgba(0, 0, 0, 0.7);
            font-family: var(--heading), sans-serif;
            font-weight: var(--heading_weight);
            font-size: 14px;
            line-height: 20px;
            text-transform: capitalize;
            margin: 0px;
        }

     

        .css-1u829o6 {
            position: relative;
            min-height: 1px;
            text-align: left;
            display: block;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .css-1sguf2h>* {
            padding-left: 4px;
            padding-right: 4px;
        }

        .css-11guiio {
            display: flex;
            flex-flow: wrap;
            row-gap: 16px;
            margin-left: -8px;
            margin-right: -8px;
            -webkit-box-pack: end;
            justify-content: end;
        }

      

        .css-1eb5ut0 {
            text-align: right;
            word-break: break-word;
            color: rgba(0, 0, 0, 0.7);
            font-family: var(--heading), sans-serif;
            font-weight: var(--heading_weight);
            font-size: 12px;
            line-height: 16px;
            text-transform: capitalize;
            margin: 0px;
        }

        .css-11guiio>* {
            padding-left: 8px;
            padding-right: 8px;
        }

        .css-k8ajg4 {
            position: relative;
            max-width: 100%;
            min-height: 1px;
            text-align: left;
            flex: 0 0 30px;
        }

        .css-178hw70>* {
            padding-left: 8px;
            padding-right: 8px;
        }

      
        .css-nnryxh {
            margin: 0px;
            padding: 0px !important;
        }

        .css-7yd8vv {
            margin: 0px;
            padding: 12px 0px 0px;
        }

        .css-122o928 {
            text-align: left;
            word-break: break-word;
            color: rgba(0, 0, 0, 0.7);
            font-family: var(--heading), sans-serif;
            font-weight: var(--heading_weight);
            font-size: 14px;
            line-height: 20px;
            text-transform: initial;
            margin: 0px 0px 12px;
        }

      

        .css-37icec {
            margin: 0px;
        }

        .css-1r8ov1f {
            text-align: left;
            word-break: break-word;
            color: rgba(0, 0, 0, 0.4);
            font-family: var(--body), sans-serif;
            font-weight: var(--body_weight);
            font-size: 12px;
            line-height: 16px;
            text-transform: initial;
            margin: 0px;
        }

       

        .css-37icec {
            margin: 0px;
        }

        .css-1r8ov1f {
            text-align: left;
            word-break: break-word;
            color: rgba(0, 0, 0, 0.4);
            font-family: var(--body), sans-serif;
            font-weight: var(--body_weight);
            font-size: 12px;
            line-height: 16px;
            text-transform: initial;
            margin: 0px;
        }

        .css-1r8ov1f {
            text-align: left;
            word-break: break-word;
            color: rgba(0, 0, 0, 0.4);
            font-family: var(--body), sans-serif;
            font-weight: var(--body_weight);
            font-size: 12px;
            line-height: 16px;
            text-transform: initial;
            margin: 0px;
        }


        .css-37icec {
            margin: 0px;
        }

        .css-1p77vje {
            text-align: left;
            word-break: break-word;
            color: rgb(39, 174, 96);
            font-family: var(--body), sans-serif;
            font-weight: var(--body_weight);
            font-size: 12px;
            line-height: 16px;
            text-transform: initial;
            margin: 0px;
        }

        .css-1p77vje {
            text-align: left;
            word-break: break-word;
            color: rgb(39, 174, 96);
            font-family: var(--body), sans-serif;
            font-weight: var(--body_weight);
            font-size: 12px;
            line-height: 16px;
            text-transform: initial;
            margin: 0px;
        }

      
        .css-37icec {
            margin: 0px;
        }

        .css-1r8ov1f {
            text-align: left;
            word-break: break-word;
            color: rgba(0, 0, 0, 0.4);
            font-family: var(--body), sans-serif;
            font-weight: var(--body_weight);
            font-size: 12px;
            line-height: 16px;
            text-transform: initial;
            margin: 0px;
        }

        .css-1r8ov1f {
            text-align: left;
            word-break: break-word;
            color: rgba(0, 0, 0, 0.4);
            font-family: var(--body), sans-serif;
            font-weight: var(--body_weight);
            font-size: 12px;
            line-height: 16px;
            text-transform: initial;
            margin: 0px;
        }

        .css-1si3iiv {
            height: 1px;
            border-top: 1px solid var(--grey4);
            margin: 8px 0px;
        }

       
        .css-37icec {
            margin: 0px;
        }

        .css-zw6a4m {
            text-align: left;
            word-break: break-word;
            color: rgba(0, 0, 0, 0.7);
            font-family: var(--heading), sans-serif;
            font-weight: var(--heading_weight);
            font-size: 12px;
            line-height: 16px;
            text-transform: initial;
            margin: 0px;
        }

        .css-zw6a4m {
            text-align: left;
            word-break: break-word;
            color: rgba(0, 0, 0, 0.7);
            font-family: var(--heading), sans-serif;
            font-weight: var(--heading_weight);
            font-size: 12px;
            line-height: 16px;
            text-transform: initial;
            margin: 0px;
        }

        .css-1p5qa09 {
            margin: 0px;
            padding: 10px 0px;
            background-color: rgba(0, 201, 75, 0.08);
            gap: 12px;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
        }

        .css-1e0cjgj {
            text-align: center;
            word-break: break-word;
            color: rgb(39, 174, 96);
            font-family: var(--heading), sans-serif;
            font-weight: var(--heading_weight);
            font-size: 14px;
            line-height: 20px;
            text-transform: initial;
            margin: 0px;
        }

        .css-2hndyu {
            margin: 0px;
        }

        .css-1pb0btf {
            text-align: left;
            word-break: break-word;
            color: rgb(0, 0, 0);
            font-family: var(--heading), sans-serif;
            font-weight: var(--heading_weight);
            font-size: 14px;
            line-height: 20px;
            text-transform: initial;
            margin: 0px 0px 4px;
        }

        .css-1pb0btf {
            text-align: left;
            word-break: break-word;
            color: rgb(0, 0, 0);
            font-family: var(--heading), sans-serif;
            font-weight: var(--heading_weight);
            font-size: 14px;
            line-height: 20px;
            text-transform: initial;
            margin: 0px 0px 4px;
        }

        .css-mmh4tj {
            word-break: break-word;
            font-family: var(--body), sans-serif;
            font-weight: var(--body_weight);
            font-size: 14px;
            line-height: 20px;
            text-transform: initial;
            margin: 0px 0px 16px;
            padding: 4px;
            color: var(--grey1);
            background-color: rgb(231, 229, 229);
            text-align: center;
        }

        .css-1r135sy {
            display: flex;
            justify-content: space-evenly;
            margin: 30px 0px 12px;
        }

        .css-gkht9t {
            margin: 0px;
            display: flex;
            flex-direction: column;
            -webkit-box-align: center;
            align-items: center;
            gap: 10px;
            max-width: 120px;
            min-width: 120px;
            flex-shrink: 0;
        }

        img {
            border-style: none;
        }

        .css-1977mhj {
            text-align: center;
            word-break: break-word;
            color: rgb(0, 0, 0);
            font-family: var(--body), sans-serif;
            font-weight: var(--body_weight);
            font-size: 12px;
            line-height: 16px;
            text-transform: initial;
            margin: 0px;
        }

        .css-gkht9t {
            margin: 0px;
            display: flex;
            flex-direction: column;
            -webkit-box-align: center;
            align-items: center;
            gap: 10px;
            max-width: 120px;
            min-width: 120px;
            flex-shrink: 0;
        }

        .css-e8nt7k {
            background-color: transparent;
            background-repeat: no-repeat;
            background-size: cover;
            display: block;
            width: 100%;
        }

        .css-1gaiyp2 {
            margin: 0px auto;
            max-width: 1200px;
            border-bottom: 1px solid black;

        }

        .css-1ltv4zp {
            margin: 0px;
            display: flex;
            justify-content: space-evenly;
            -webkit-box-align: center;
            align-items: center;
            flex-flow: wrap;
            padding: 12px 0px 25px;
            row-gap: 12px;
        }
        </style>

        
    </body>

    </php>