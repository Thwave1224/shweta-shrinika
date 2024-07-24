<?php
include "config1.php";

$select = "SELECT * FROM customer";

$result = mysqli_query($conn,$select);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buy SHRINIKA products online at best prices on shrinikachoice.com</title>
    <link rel="shortcut icon" href="./img/logo1.jpg" type="image/x-icon" fa-solid="#fff" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="./OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="./OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ----------------------  bootsrap link ------------------------------------------ -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Buy SAMVRITA products online at best prices on samvrita.in</title>

    <style>
    * {
        margin: 0%;
        padding: 0%;
        box-sizing: border-box;
    }

    /* =============   customer love ============================= */
    .section12 {
      display:inline-flex;
      align-items: center;
      margin-bottom: 40px;
    }

    .div12 {
        margin: 20px;
        background-color: whitesmoke;
        margin-bottom: 0;
    }
    .div12 img {
        width: 400px;
        height: 400px;
        opacity: 1;
    }
    .css-9erq78 {
        margin: 0px;
        padding: 16px;
    }

    .title13 {
        text-align: center;
        font-size: 35px;
        line-height: 44px;
        font-weight: var(--title2_weight);
        font-family: var(--title2), sans-serif;
        margin-top: 30px;
        margin-bottom: 35px;
        letter-spacing: 1px;
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

    .nav {
        margin: auto;
    }

    .navbar {
        /* margin-left: -180px; */
        margin-left: 50px;
        margin-right: -250px;
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

    .anc {
        padding: 0px 10px;
        border-right: 2px solid #ccc;
        color: #ccc;
        text-decoration: none;
        font-size: 12px;
        line-height: 16px;
        letter-spacing: 1.5px;
    }

    a {
        padding: 0px;
    }

    .anc:hover {
        color: white;
        text-decoration: none;
    }
    #navbar {
    list-style: none;
    display: flex;
    padding: 0;
    border-bottom: 3px solid transparent;
    margin-bottom: 60px;
}
    /* ........................... footer ............................... */
    ul {
        list-style-type: none;
    }

    .footer {
        background-color: black;
        padding: 100px;
        padding-top: 25px;
        display: flex;
        padding-left: 400px;
        justify-content: center;
        margin-top: 30px;
        padding-bottom: 0%;
    }

    .logo1 img {
        height: 160px;
    }

    .logo1 {
        margin-bottom: 30px;
    }

    .text {
        padding-top: 10px;
        color: white;
        font-weight: var(--title3_weight);
        letter-spacing: 1px;
    }

    .text1 {
        padding-top: 20px;
        font-size: 13px;
        color: white;
        background-color: black;
    }

    a .css-1hchj7t1 {
        width: 22px;
        height: 40px;
        padding-top: 20px;
        align-items: center;
        cursor: pointer;
    }

    a .css-1hchj7t {
        width: 22px;
        height: 20px;
        padding-top: 20px;
        align-items: center;
        cursor: pointer;
    }

    a .css-1hchj7t2 {
        width: 22px;
        height: 35px;
        padding-top: 20px;
        align-items: center;
        cursor: pointer;
    }

    a .css-1hchj7t3 {
        width: 22px;
        height: 40px;
        padding-top: 20px;
        align-items: center;
        cursor: pointer;
    }

    .contact {
        color: white;
        padding-left: 250px;
        padding-top: 69px;
    }

    .text3 {
        font-size: 16px;
        padding-bottom: 15px;
        font-family: var(--heading), sans-serif;
        line-height: 16px;
        text-transform: initial;
    }

    .text4 {
        line-height: 16px;
        font-size: 14px;
        letter-spacing: 1px;
    }

    .text4 strong {
        display: block;
        padding: 3px 0px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        color: #ccc;
    }

    .all {
        text-decoration: none;
        border-bottom: #777777;
    }

  
    a {
        padding: 0px;
    }

    

    .link3 {
        padding: 20px;
    }

    .css-4qrycz {
        height: 1px;
        border-top: 1px solid var(--white4);
    }

    .section9 {
        background-color: black;
        color: #fff;
        margin-top: -px;
        padding-left: 100px;
    }

    .link1 ul {
        list-style-type: none;
        padding-top: 20px;
    }

    .link1 ul li {
        display: inline;
        padding: 0px 40px;
        font-size: 14px;
    }

    .link1 ul li a {
        color: #fff;
        text-decoration: none;
        padding: 10px 20px;
    }

    .links-title {
        color: #ccc;
        max-width: 1130px;
    }

    .footer-text {
        margin: 0;
        text-align: left;
        word-break: break-word;
        color: whitesmoke;
        font-family: var(--heading), sans-serif;
        font-weight: var(--heading_weight);
        font-size: 14px;
        line-height: 16px;
        text-transform: initial;
        padding-bottom: 15px;
        font-family: var(--heading), sans-serif;
    }

    .title12 {
        text-align: center;
        font-size: 35px;
        line-height: 44px;
        font-weight: var(--title2_weight);
        font-family: var(--title2), sans-serif;
        margin-top: 30px;
        margin-bottom: 35px;
        letter-spacing: 1px;
    }

    p .s {
        text-decoration: none;
    }

    .ins {
        display: flex;
    }

    .ins a {
        width: 30px;
        /* height: 15px; */
    }

    .section8 {
        background-color: black;
        color: #fff;
        padding-left: 250px;
        margin-top: -px;
    }
    /* ................................... button top ......................................... */
    #myBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      font-size: 18px;
      outline: none;
      background-color: white;
      color: black;
      box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px,
        rgba(0, 0, 0, 0.3) 0px 7px 13px -3px,
        rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
      padding: 10px;
      cursor: pointer;
      border: none;
      padding: 10px;
      border-radius: 4px;
      width: 50px;
    }

    #myBtn:hover {
      background-color: black;
      color: white;
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

            <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                    <div class="se_icon">
                        <i class="fa-solid fa-magnifying-glass fa-xl"></i>
                    </div>
                    <div class="se_fil">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
                    </div>
                </form>
            </nav>

            <div class="nav">
                <ul id="navbar">
                    <li><a href="nayrakurti.php">NYRA KURTIS</a></li>
                    <li><a href="top.php">TOP</a></li>
                    <li><a href="kurti.php">KURTI</a></li>
                    <li><a href="gowns,dress.php">GOWNS & DRESSES</a></li>
                    <li><a href="co-ord.php">CO-ORD SET</a></li>
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
        margin-right: 15px;
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


     /* .............................. nayra kurti  media query ............................... */

@media screen and (max-width: 1440px) {
     body{
    background-color: #fff;
     }
     #navbar li a:hover{
         color: brown;       
      }
    .images {
      height: 130px;
      width: 130px; 
        margin: 10px 0px 0px 20px;
    }
   .title12{
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
}
    </style>
    </section>
    </div>

    <!-- ============================================= TOP  ======================================================================== -->
    <h2 class="title13">Customers Love Us</h2>


    <?php
    include "config1.php";

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

       
    ?>
    <section class="section12">
  
        <div class="div12">
            <img src="<?php echo $row['file']; ?>" />
            <div class="css-9erq78">
                <p data-sd-event="" class="css-13mrv7i"><?php echo $row['name']; ?></p>
                <div class="css-1nde8m3">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="rgb(0, 0, 0)"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m10 14.392 5.15 3.108-1.367-5.858 4.55-3.942-5.991-.508L10 1.667 7.658 7.192 1.667 7.7l4.55 3.942L4.85 17.5 10 14.392z"
                            fill="rgb(0, 0, 0)" fill-opacity="0.7"></path>
                    </svg><svg width="20" height="20" viewBox="0 0 20 20" fill="rgb(0, 0, 0)"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m10 14.392 5.15 3.108-1.367-5.858 4.55-3.942-5.991-.508L10 1.667 7.658 7.192 1.667 7.7l4.55 3.942L4.85 17.5 10 14.392z"
                            fill="rgb(0, 0, 0)" fill-opacity="0.7"></path>
                    </svg><svg width="20" height="20" viewBox="0 0 20 20" fill="rgb(0, 0, 0)"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m10 14.392 5.15 3.108-1.367-5.858 4.55-3.942-5.991-.508L10 1.667 7.658 7.192 1.667 7.7l4.55 3.942L4.85 17.5 10 14.392z"
                            fill="rgb(0, 0, 0)" fill-opacity="0.7"></path>
                    </svg><svg width="20" height="20" viewBox="0 0 20 20" fill="rgb(0, 0, 0)"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m10 14.392 5.15 3.108-1.367-5.858 4.55-3.942-5.991-.508L10 1.667 7.658 7.192 1.667 7.7l4.55 3.942L4.85 17.5 10 14.392z"
                            fill="rgb(0, 0, 0)" fill-opacity="0.7"></path>
                    </svg><svg width="20" height="20" viewBox="0 0 20 20" fill="rgb(0, 0, 0)"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m10 14.392 5.15 3.108-1.367-5.858 4.55-3.942-5.991-.508L10 1.667 7.658 7.192 1.667 7.7l4.55 3.942L4.85 17.5 10 14.392z"
                            fill="rgb(0, 0, 0)" fill-opacity="0.7"></path>
                    </svg>
                    <p data-sd-event="" class="css-vroclh"><?php echo $row['date']; ?></p>
                </div>
                <p data-sd-event="" class="css-zw6a4m">
                    <?php echo $row['comment']; ?>
                </p>
            </div>
        </div>
        </div>
    </section>
    <?php 
  }
}
        ?>
    <!-- ============================================footer ================================================================================= -->
    <div class="footer">
        <div class="logo1">
            <a href="index.php"> <img src="././img/1-png.jpg" alt="" /></a>
            <span>
                <h2 class="text">SHRINIKA</h2>
            </span>

            <a href="https://business.facebook.com/samvritafashionindia/?business_id=107417202217575"
                target="_blank"><img width="24" height="24" alt=""
                    src="https://cdn.zeplin.io/625010cc1f439d65f2e6923a/assets/0fe8623a-92b1-4c60-b8e6-4908a033002f-3x.png"
                    class="css-1hchj7t2" /></a>

            <a href="https://www.instagram.com/samvrita2024/" target="_blank"><img width="24" height="24" alt=""
                    src="https://cdn.zeplin.io/625010cc1f439d65f2e6923a/assets/adcd9537-a389-4b15-a623-12d504c27047-3x.png"
                    class="css-1hchj7t2" /></a>
        </div>

        <div class="contact">
            <span>
                <h3 class="text3">CONTACT US</h3>
            </span>

            <div class="text4">
                <strong>Call : <span>+91 9023004887</span></strong>
                <strong>WhatsApp : <span>9023004887</span></strong>
                <strong>Customer Support Time :- <span>24/7</span></strong>
                <strong>Email : <span>shrinikachoice@gmail.com</span></strong>
                <strong>Address : 318, Times Trade Center, Opposite Polaris Mall, Near
                    Bhaiya Nagar, BRTS Cenal Road BRTS CANAL ROAD Surat, Gujarat, 395010
                    Near Bhaiya Nagar <span></span></strong>
                <strong> Surat, Gujarat ,Surat<span> 395010</span></strong>
            </div>
        </div>
    </div>

    <div class="css-4qrycz"></div>

    <div class="section9">
        <div class="link1 container">
            <ul>
            <li><a href="about-us.php">About Us</a></li>
                    <li><a href="privacy.php">Privacy Poclicy</a></li>
                    <li><a href="return-policy.php">Return Poclicy</a></li>
                    <li><a href="shipping.php">Shipping Poclicy</a></li>
                    <li><a href="therms.php">Terms and </a></li>
            </ul>
            <div class="links-title">
                <span class="footer-text"></span>
                <div class="link3">
                    <span style="color: #fff; font-size: 14px">Most searched on store →</span>
                    <a href="no-product.php" class="anc">DESIGNER LEHENGA CHOLI</a>
                        <a href="no-product.php" class="anc">ZARI WORK</a>
                        <a href="no-product.php" class="anc">FOIL WORK</a>
                        <a href="no-product.php" class="anc">SEQUINS WORKS</a>
                        <a href="no-product.php" class="anc">BLACK</a>
                        <a href="no-product.php" class="anc">DIGITAL PRINT</a>
                        <a href="no-product.php" class="anc">BLACK</a>
                        <a href="no-product.php" class="anc">VELVET</a>
                        <a href="co-ord.php" class="anc">CO-ORD SET</a>
                        <a href="no-product.php" class="anc">FLORAL LEHENGA CHOLI</a>
                        <a href="no-product.php" class="anc">PINK</a>
                        <a href="no-product.php" class="anc">UNDER RS.2000 LEHENGA CHOLI</a>
                        <a href="no-product.php" class="anc">FOR WOMEN</a>
                        <a href="no-product.php" class="anc">PINK LC</a>
                        <a href="no-product.php" class="anc">GOTTA PATTI</a>
                        <a href="no-product.php" class="anc">DESIGNER LEHENGA CHOLI</a>
                        <a href="no-product.php" class="anc">ZARI WORK</a>
                        <a href="no-product.php" class="anc">FOIL WORK</a>
                        <a href="no-product.php" class="anc">SEQUINS WORKS</a>
                        <a href="no-product.php" class="anc">BLACK</a>
                        <a href="no-product.php" class="anc">DIGITAL PRINT</a>
                        <a href="no-product.php" class="anc">BLACK</a>
                        <a href="no-product.php" class="anc">VELVET</a>
                        <a href="no-product.php" class="anc">CO-ORD SET</a>
                        <a href="no-product.php" class="anc">FLORAL LEHENGA CHOLI</a>
                        <a href="no-product.php" class="anc">PINK</a>
                        <a href="no-product.php" class="anc">UNDER RS.2000 LEHENGA CHOLI</a>
                        <a href="no-product.php" class="anc">FOR WOMEN</a>
                        <a href="no-product.php" class="anc">PINK LC</a>
                        <a href="no-product.php" class="anc">GOTTA PATTI</a>
                        <a href="no-product.php" class="anc">DESIGNER LEHENGA CHOLI</a>
                        <a href="no-product.php" class="anc">ZARI WORK</a>
                        <a href="no-product.php" class="anc">FOIL WORK</a>
                        <a href="no-product.php" class="anc">SEQUINS WORKS</a>
                        <a href="no-product.php" class="anc">BLACK</a>
                        <a href="no-product.php" class="anc">DIGITAL PRINT</a>
                        <a href="no-product.php" class="anc">BLACK</a>
                        <a href="no-product.php" class="anc">VELVET</a>
                        <a href="co-ord.php" class="anc">CO-ORD SET</a>
                        <a href="no-product.php" class="anc">FLORAL LEHENGA CHOLI</a>
                        <a href="no-product.php" class="anc">PINK</a>
                        <a href="no-product.php" class="anc">UNDER RS.2000 LEHENGA CHOLI</a>
                        <a href="no-product.php" class="anc">FOR WOMEN</a>
                        <a href="no-product.php" class="anc">PINK LC</a>
                        <a href="no-product.php" class="anc">GOTTA PATTI</a>
                        <a href="no-product.php" class="anc">DESIGNER LEHENGA CHOLI</a>
                        <a href="no-product.php" class="anc">ZARI WORK</a>
                        <a href="no-product.php" class="anc">FOIL WORK</a>
                        <a href="no-product.php" class="anc">SEQUINS WORKS</a>
                        <a href="no-product.php" class="anc">BLACK</a>
                        <a href="no-product.php" class="anc">DIGITAL PRINT</a>
                        <a href="no-product.php" class="anc">BLACK</a>
                        <a href="no-product.php" class="anc">VELVET</a>
                        <a href="co-ord.php" class="anc">CO-ORD SET</a>
                        <a href="no-product.php" class="anc">FLORAL LEHENGA CHOLI</a>
                        <a href="no-product.php" class="anc">PINK</a>
                        <a href="no-product.php" class="anc">UNDER RS.2000 LEHENGA CHOLI</a>
                        <a href="no-product.php" class="anc">FOR WOMEN</a>
                        <a href="no-product.php" class="anc">PINK LC</a>
                        <a href="no-product.php" class="anc">GOTTA PATTI</a>
                        <a href="no-product.php" class="anc">DESIGNER LEHENGA CHOLI</a>
                        <a href="no-product.php" class="anc">ZARI WORK</a>
                        <a href="no-product.php" class="anc">FOIL WORK</a>
                        <a href="no-product.php" class="anc">SEQUINS WORKS</a>
                        <a href="no-product.php" class="anc">BLACK</a>
                        <a href="no-product.php" class="anc">DIGITAL PRINT</a>
                        <a href="no-product.php" class="anc">BLACK</a>
                        <a href="no-product.php" class="anc">VELVET</a>
                        <a href="no-product.php" class="anc">CO-ORD SET</a>
                        <a href="no-product.php" class="anc">FLORAL LEHENGA CHOLI</a>
                        <a href="no-product.php" class="anc">PINK</a>
                        <a href="no-product.php" class="anc">UNDER RS.2000 LEHENGA CHOLI</a>
                        <a href="no-product.php" class="anc">FOR WOMEN</a>
                        <a href="no-product.php" class="anc">PINK LC</a>
                        <a href="no-product.php" class="anc">GOTTA PATTI</a>
                        <a href="no-product.php" class="anc">DESIGNER LEHENGA CHOLI</a>
                        <a href="no-product.php" class="anc">ZARI WORK</a>
                        <a href="no-product.php" class="anc">FOIL WORK</a>
                        <a href="no-product.php" class="anc">SEQUINS WORKS</a>
                        <a href="no-product.php" class="anc">BLACK</a>
                        <a href="no-product.php" class="anc">DIGITAL PRINT</a>
                        <a href="no-product.php" class="anc">BLACK</a>
                        <a href="no-product.php" class="anc">VELVET</a>
                        <a href="no-product.php" class="anc">CO-ORD SET</a>
                        <a href="no-product.php" class="anc">FLORAL LEHENGA CHOLI</a>
                        <a href="no-product.php" class="anc">PINK</a>
                        <a href="no-product.php" class="anc">UNDER RS.2000 LEHENGA CHOLI</a>
                        <a href="no-product.php" class="anc">FOR WOMEN</a>
                        <a href="no-product.php" class="anc">PINK LC</a>
                        <a href="no-product.php" class="anc">GOTTA PATTI</a>
                        <a href="no-product.php" class="anc">DESIGNER LEHENGA CHOLI</a>
                        <a href="no-product.php" class="anc">ZARI WORK</a>
                        <a href="no-product.php" class="anc">FOIL WORK</a>
                        <a href="no-product.php" class="anc">SEQUINS WORKS</a>
                        <a href="no-product.php" class="anc">BLACK</a>
                        <a href="no-product.php" class="anc">DESIGNER LEHENGA CHOLI</a>
                        <a href="no-product.php" class="anc">ZARI WORK</a>
                        <a href="no-product.php" class="anc">FOIL WORK</a>
                        <a href="no-product.php" class="anc">SEQUINS WORKS</a>
                        <a href="no-product.php" class="anc">BLACK</a>
                </div>
            </div>
        </div>
    </div>
  <!-- ------------------ top button ---------------------------------- -->

   <!-- ------------------ top button ---------------------------------- -->
    
   <button onclick="topFunction()" id="myBtn" title="Go to top">
        <i class="fa-solid fa-angle-up"></i>
    </button>

    <script>
        // Get the button
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction();
        };

        function scrollFunction() {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

      <!-- ------------------ left button ---------------------------------- -->
      <?php 

include "config1.php";

if(isset($_POST['add'])){

$file_name = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];
$file_path = "./img/ " . uniqid() . "-" . $file_name;

move_uploaded_file($tmp_name,$file_path);

$name = $_POST['name'];
$date = $_POST['date'];
$comment = $_POST['comment'];

$insert_query = "INSERT INTO customer (file,name,date,comment) VALUES ('$file_path','$name','$date' ,'$comment')";

$result = mysqli_query($conn,$insert_query);

if($result){
   header('location:customer.php');
}
}
?>


<!-- <button class="bu" onclick="openFeedbackBox()">
<i class="fa-regular fa-message fa-xl"></i>
</button>

<div id="feedbackBox" class="feedback-box">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form1" method="post"
   enctype="multipart/form-data">
   <div class="in">
       <p onclick="closeFeedbackBox()" class="close1"><i class="fa-solid fa-xmark fa-xl"></i></p>

       <label for="file">Picture :-</label>
       <input type="file" name="file" id="file" accept="image/*" onchange="previewImage(event)"><br>
       <img id="imagePreview" src="#" alt="Image Preview" style="display: none; height: auto;" /><br>

       <label for="name">Name :-</label>
       <input type="text" name="name" id="name"><br>

       <label for="date">Date :-</label>
       <input type="date" name="date" id="date"><br>

       <label for="comment">Comment :-</label>
       <textarea name="comment" id="comment" rows="9" cols="50"></textarea>

       <div class="customer">
           <button name="add" value="add">Add</button>
       </div>
   </div>
</form>
</div>

<style>
.customer {
display: flex;
justify-content: space-between;
}

.feedback-box button {
background-color: #a53860;
color: white;
padding: 10px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
width: 95%;
}

.feedback-box button:hover {
background-color: #a53860;
color: white;
padding: 10px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
width: 95%;
}

.bu {
position: fixed;
bottom: 20px;
left: 30px;
z-index: 99;
font-size: 18px;
outline: none;
background-color: white;
color: black;
box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
padding: 10px;
cursor: pointer;
border: none;
padding: 10px;
border-radius: 4px;
width: 50px;
}

.in p {
margin-left: 90%;
color: black;
}

/* Feedback Box Container */
.feedback-box {
width: 400px;
height: 100%;
padding: 20px;
border: 1px solid #ccc;
background-color: #f9f9f9;
position: fixed;
top: 0;
left: 0;
transform: translateX(-100%);
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
z-index: 1000;
transition: transform 0.3s ease;
overflow-y: auto;
}

/* Show class to display feedback box */
.feedback-box.show {
transform: translateX(0);
}

/* Input Field Styles */
.feedback-box label {
display: block;
margin-bottom: 8px;
font-weight: bold;
}

.feedback-box input[type="text"],
.feedback-box input[type="date"],
.feedback-box input[type="file"],
.feedback-box textarea {
width: calc(100% - 20px);
padding: 10px;
margin-bottom: 20px;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
}

.feedback-box input[type="file"] {
padding: 5px;
}

.feedback-box textarea {
resize: vertical;
}

.feedback-box .in {
display: flex;
flex-direction: column;
}
</style>

<script>
function openFeedbackBox() {
document.getElementById('feedbackBox').classList.add('show');
}

function closeFeedbackBox() {
document.getElementById('feedbackBox').classList.remove('show');
}

function previewImage(event) {
const file = event.target.files[0];
const reader = new FileReader();

reader.onload = function() {
   const imagePreview = document.getElementById('imagePreview');
   imagePreview.src = reader.result;
   imagePreview.style.display = 'block';
};

if (file) {
   reader.readAsDataURL(file);
}
}
</script> -->
</body>

</html>