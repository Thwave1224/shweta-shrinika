<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- <link rel="shortcut icon" href="img/logo1.jpg" type="image/x-icon" fa-solid="#fff"> -->
    <link rel="icon" href="./img/1-png.jpg" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title> Buy SHRINIKA products online at best prices on shrinikachoice.com</title>

</head>

<style>
    * {
        margin: 0%;
        padding: 0%;
        box-sizing: border-box;
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

    /* .............................. search .......................... */
    .navbar {
        margin-left: -80px;
    }

    .css-ymv3kr {
        margin-right: -500px;
    }

    .form-inline {
        display: flex;
        border-radius: 20px;
    }

    .se_icon {
        padding: 10px 10px 7px 10px;
        margin-left: 0 -1;
    }

    .se_fil {
        margin-right: 10px;
    }

    /* ----------------------------------- slick ---------------------------------------------------- */
    /* .slick-track {
        display: flex;
        margin-top: 2vh;
        margin-bottom: 3vh;
    }

    .css-7b74ej {
        text-align: center;
        color: black;
        font-size: 12px;
        letter-spacing: 1px;
        margin-top: 10px;
        margin: 10px 10px 0px 0px;
        font-weight: bold;
    }

    .css-7b74ej:hover {
        color: rgb(34, 3, 34);
    }

    a.css-7b74ej {
        text-decoration: none;
    }

    .slick-list {
        justify-content: center;
        display: flex;
        margin-right: 120px;
    } */
    /* .........................................  ggggggggggggggggggggggggg .................................................................... */
    .title {
        text-align: center;
        font-size: 32px;
        line-height: 44px;
        font-weight: var(--title2_weight);
        font-family: var(--title2), sans-serif;
        margin-top: 90px;
        margin-bottom: 20px;
    }

    .title6 {
        margin-top: 50px;
        text-align: center;
        font-size: 32px;
        line-height: 44px;
        font-weight: var(--title2_weight);
        font-family: var(--title2), sans-serif;
    }

    .column {
        float: left;
        width: 550px;
        padding: 0 10px;
        display: flex;
        margin: -10px;
    }

    .new_arrivels {
        width: 100%;
    }

    .section2 {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 40px;
    }

    .all {
        text-decoration: none;
        border-bottom: #777777;
    }

    .card:hover {
        box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        transition: 0.4s;
    }

    .card {
        width: 30rem;
        border: none;
        padding-left: 20px;
        cursor: pointer;
        padding-right: 20px;
    }

    .card {
        position: relative;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border-radius: .25rem;
    }

    .css-f23be2 {
        text-align: left;
        word-break: break-word;
        color: rgba(0, 0, 0, 0.7);
        font-family: var(--body), sans-serif;
        font-weight: var(--body_weight);
        font-size: 12px;
        line-height: 16px;
        text-transform: uppercase;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-top: 8px;
    }

    .sudo {

        height: 390px;
        background-image: url("img/pairs3.jpg");
        background-size: cover;
        transition: background-image 0.3s ease-in-out;
        margin-right: 10px;
    }

    .sudo:hover {
        background-image: url("./img/sh.jpg");
        margin-right: 10px;
    }

    .sudo1 {
        height: 390px;
        background-image: url("./img/nayra2.webp");
        background-size: cover;
        transition: background-image 0.3s ease-in-out;
    }

    .sudo1:hover {
        background-image: url("./img/nayra35.webp");
        margin-right: 10px;
    }

    .sudo2 {

        height: 390px;
        background-image: url("./img/nayra3.webp");
        background-size: cover;
    }

    .sudo2:hover {
        background-image: url("./img/nayra33.webp");
    }

    .sudo3 {

        height: 390px;
        background-image: url("./img/nayra4.webp");
        background-size: cover;
        transition: background-image 0.3s ease-in-out;
    }

    .sudo3:hover {
        background-image: url("./img/nayra36.webp");
    }

    .sudo4 {
        width: 230px;
        height: 390px;
        background-image: url("./img/pair1.jfif");
        background-size: cover;
        transition: background-image 0.3s ease-in-out;
    }

    .sudo4:hover {
        background-image: url("./img/pari2.jfif");
    }

    .sudo5 {
        width: 230px;
        height: 390px;
        background-image: url("./img/pair5.jfif");
        background-size: cover;
        transition: background-image 0.3s ease-in-out;
    }

    .sudo5:hover {
        background-image: url("./img/pair6.jfif");
    }

    .sudo6 {
        width: 230px;
        height: 390px;
        background-image: url("./img/pair7.jfif");
        background-size: cover;
        transition: background-image 0.3s ease-in-out;
    }

    .sudo6:hover {
        background-image: url("./img/pair8.jfif");
    }

    .sudo7 {
        width: 230px;
        height: 390px;
        background-image: url("./img/pair3.jfif");
        background-size: cover;
        transition: background-image 0.3s ease-in-out;
    }

    .sudo7:hover {
        background-image: url("./img/pair4.jfif");
    }

    .sudo8 {
        height: 390px;
        background-image: url("./img/nayra9.webp");
        background-size: cover;
        transition: background-image 0.3s ease-in-out;
    }

    .sudo8:hover {
        background-image: url("./img/nayra41.webp");
    }

    .sudo9 {
        height: 390px;
        background-image: url("./img/nayra10.webp");
        background-size: cover;
        transition: background-image 0.3s ease-in-out;
    }

    .sudo9:hover {
        background-image: url("./img/nayra42.webp");
    }

    .sudo10 {
        height: 390px;
        background-image: url("./img/nayra11.webp");
        background-size: cover;
        transition: background-image 0.3s ease-in-out;
    }

    .sudo10:hover {
        background-image: url("./img/nayra43.webp");
    }

    .sudo11 {
        width: 230px;
        height: 390px;
        background-image: url("./img/pair9.jfif");
        background-size: cover;
        transition: background-image 0.3s ease-in-out;
    }

    .sudo11:hover {
        background-image: url("./img/pair10.jfif");
    }

    .sudo12 {
        height: 390px;
        background-image: url("./img/nayra13.webp");
        background-size: cover;
        transition: background-image 0.3s ease-in-out;
    }

    .sudo12:hover {
        background-image: url("./img/nayra45.webp");
    }

    .sudo13 {
        height: 390px;
        background-image: url("./img/nayra14.webp");
        background-size: cover;
        transition: background-image 0.3s ease-in-out;
    }

    .sudo13:hover {
        background-image: url("./img/nayra46.webp");
    }

    .sudo14 {

        height: 390px;
        background-image: url("./img/nayra15.webp");
        background-size: cover;
        transition: background-image 0.3s ease-in-out;
    }

    .sudo14:hover {
        background-image: url("./img/nayra47.webp");
    }

    .sudo15 {

        height: 390px;
        background-image: url("./img/nayra16.webp");
        background-size: cover;
        transition: background-image 0.3s ease-in-out;
    }

    .sudo15:hover {
        background-image: url("./img/nayra48.webp");
    }

    .sudo16 {

        height: 390px;
        background-image: url("./img/nayra17.webp");
        background-size: cover;
        transition: background-image 0.3s ease-in-out;
    }

    .sudo16:hover {
        background-image: url("./img/nayra49.webp");
    }

    .css-tw8l5q {
        margin: 0;
        font-weight: 400;
        text-align: left;
        word-break: break-word;
        color: rgba(0, 0, 0, 0.7);
        font-family: var(--body), sans-serif;
        font-weight: var(--body_weight);
        font-size: 12px;
        line-height: 16px;
        text-transform: initial;
        margin-bottom: 0px;
        margin-right: 0px;
        margin-left: 0px;
        margin-top: 0px;
    }

    .css-19qfdfr {
        margin: 0px;
        display: flex;
        -webkit-box-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        align-items: center;
        padding: 16px;
    }

    .css-lwshl4 {
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        column-gap: 4px;
    }

    .css-5x1nvx {
        text-align: left;
        word-break: break-word;
        color: rgb(0, 0, 0);
        font-family: var(--body), sans-serif;
        font-weight: var(--body_weight);
        font-size: 12px;
        line-height: 16px;
        text-transform: initial;
        margin: 8px 0px 0px 4px;
    }

    .css-1iqa3sw {
        min-width: 20px;
        min-height: 20px;
        accent-color: var(--grey);
    }

    .btn1 {
        background-color: black;
        color: whitesmoke;
        width: 100%;
        padding: 10px;
        font-size: 12px;
        margin-top: 15px;
        border-radius: 7px;

    }

    .title1 {
        text-align: center;
        letter-spacing: 1px;
        margin-top: 20px;
        color: #777777;
    }

    .title3 {
        text-align: center;
        font-size: 20px;
        margin-bottom: 20px;
        color: black;
    }

    .dem {
        color: green;
        font-size: 14px;
    }

    button {
        width: 140px;
        color: #fff;
        font-size: 15px;
        outline: none;
        border: 0;
        border-radius: 5px;
        background-color: #1aa2f8;
        padding: 10px 15px;
        box-sizing: border-box;
        cursor: pointer;
    }

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
        height: 150px;
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
        height: 40px;
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
        color: #ccc;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .all {
        text-decoration: none;
        border-bottom: #777777;
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

    .anc:hover {
        color: white;
        text-decoration: none;
    }

    a {
        padding: 0px;
    }

    .anc:hover {
        color: white;
    }

    .link3 {
        padding: 20px;
    }

    .css-4qrycz {
        height: 1px;
        border-top: 1px solid var(--white4);
    }

    .section8 {
        background-color: black;
        color: #fff;
        padding-left: 250px;
        margin-top: -px;
    }

    .section9 {
        background-color: black;
        color: #fff;
        padding-left: 400px;
        margin-top: -px;
    }

    .section10 {
        background-color: black;
        color: #fff;
        padding-left: 300px;
        margin-top: -px;
    }

    .section11 {
        background-color: black;
        color: #fff;
        padding-left: 400px;
        margin-top: -px;
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

    /* .......................... TOP BUTTON ..................................................................... */
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

    /* ------------------------  add to bag (popup) ------------------------------------------------------------- */
    .modal-content {
        height: 870px;

    }

    .modal {
        padding-left: 82%;
    }

    #submit {
        margin-bottom: 15px;
        margin-left: 10%;
        width: 81%;
        background-color: black;
        letter-spacing: 1px;
    }

    .test p {
        margin: 20px;
        font-size: 18px;
    }

    .modal-body select {
        padding: 10px 14vh;
    }

    .modal-dialog {
        height: 600px;
        width: 340px;
    }

    .test1:hover {
        cursor: pointer;
    }

    .test1 {
        border: 1px solid gray;
    }

    .button1 {
        color: black;
        background-color: white;
    }

    .button1:hover {
        background-color: black;
        color: white;
        transition: 0.8s;
    }

    #submit1 {
        margin-bottom: 15px;
        margin-left: 10%;
        width: 81%;
        border: 1.5px solid gray;
        letter-spacing: 1px;
    }

    #submit2 {
        margin-bottom: 15px;
        margin-left: 10%;
        width: 81%;
        border: 1.5px solid gray;
    }

    .button2 {
        color: white;
        background-color: black;
        letter-spacing: 1px;
    }

    .add1 {
        border-radius: 5px;
        margin-left: 8px;
        margin-top: 7px;
    }

    .add1:hover {
        cursor: pointer;
    }

    .add {
        display: flex;
    }

    .add2 {
        margin-top: 7px;
        margin-left: 9px;
    }

    .add2:hover {
        cursor: pointer;
    }

    .test4 {
        text-decoration: none;
        color: black;
    }

    .sh {
        text-decoration: none;
        color: black;
        font-size: 13px;
    }

    #test3 {
        padding-top: 200px;
        padding-left: 40px;
    }

    /* ................................................ pairs ........................................ */

    .image-container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 80%;
        /* Adjust the width as needed */
        height: 50%;
        /* Adjust the height as needed */
    }

    .round-image {
        width: 70%;
        height: 70%;
        border-radius: 0%;
        object-fit: cover;
        /* Ensures the image covers the container without distortion */
        border: 1.5px solid brown;
        /* Optional: adds a white border around the image */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        /* Optional: adds a subtle shadow */
    }

    #PAIRES {
        width: 120px;
        height: 120px;
        border: 2px solid brown;
        border-radius: 50%;
    }


    /* ............................ registration ..................................... */
    .login {
        padding-left: 10%;
        margin-right: 0%;
        color: whitesmoke;

    }

    .but {
        background-color: #a53860;
        margin-left: 250%;
        width: 90px;
    }

    .wig {
        color: whitesmoke;
        height: 2px;
        padding-bottom: 9px;
        font-size: 17px;
        letter-spacing: 1px;

    }

    .login1 {
        margin-right: 15px;
        font-size: 18px;

        color: brown;

    }

    /* Add this to your CSS file */


    /* .......................................... media query .............................................. */

    @media screen and (max-width:1440px) {
        #header {
            display: inline-table;
            width: 80%;
        }

        .navbar {
            margin-left: 300px;
        }

        .images {
            height: 130px;
            margin-bottom: 0%;
            padding: 0%;
            margin-left: 700px;
        }

        .css-ymv3kr {
            margin-right: 0%;
        }

        .slick-list {
            display: flex;
            margin-left: 40%
        }

        .icon {
            display: flex;
            float: right;
            margin-left: 85%;
        }

        .title {
            font-size: 29px;
        }

        .title6 {
            font-size: 29px;

        }

        .footer {
            background-color: black;
            padding-left: 150px;
            margin-top: 30px;
        }

        .section10 {
            padding-left: 200px;
        }

        (min-width:320px) {
            #header {
                background-color: black;
            }
        }
    }

    /* Mobile view styles */
    @media only screen and (max-width: 320px) {

        #header {
            flex-direction: column;
            align-items: center;
        }

        .logo {
            width: 100%;
            text-align: center;
        }

        .images {
            height: 130px;
            width: 130px;
            margin: 5px 0px 0px 20px;
        }

        .navbar {
    margin-left: 0;
    padding: 10px;
  }
  
  /* adjust the search form styles */
  .form-inline {
    flex-wrap: wrap;
    border-radius: 10px;
  }
  
  .se_icon {
    padding: 5px;
    margin-left: 0;
  }
  
  .se_fil {
    margin-right: 0;
  }
  
  .form-control {
    width: 100%;
    margin-bottom: 10px;
  }
  
  .fa-magnifying-glass {
    font-size: 18px;
  }
  .icon {
        margin-right: 10px;
    }

        /* Navigation styles */
        .nav {
            margin: 0;
        }

        #navbar {
            flex-direction: column;
            margin-left: 50px;
        }

        #navbar li {
            margin: 10px 0;
        }

        /* Icon styles */
        .icon {
            margin: 10px 0px 0px 20px;
        }

        /* Loader styles */
        .loader {
            width: 100%;
            height: 100vh;
        }


        #close {
            display: block;
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 18px;
            cursor: pointer;
        }

        .section2 {
            flex-direction: column;
        }

        .carousel-inner {
            height: 150px;
            /* adjust the height of the carousel */
        }

        .carousel-item img {
            width: 100%;
            /* make the image full width */
            height: 150px;
            /* adjust the height of the image */
            object-fit: cover;
            /* make the image cover the entire carousel */
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 30px;
            /* adjust the width of the control icons */
            height: 30px;
            /* adjust the height of the control icons */
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            font-size: 20px;
            /* adjust the font size of the control icons */
        }

        .title {
            font-size: 24px;
            line-height: 36px;
            margin-top: 60px;
            margin-bottom: 15px;
        }

        .title6 {
            margin-top: 30px;
            font-size: 24px;
            line-height: 36px;
        }

        .column {
            width: 100%;
            padding: 0 5px;
        }

        .new_arrivels {
            width: 100%;
        }

        .carousel-1 {
            flex-direction: column;
            align-items: center;
        }

        .carousel-circle {
            margin: 10px;
        }

        .owl-carousel {
            width: 100%;
        }

        .section2 {
            flex-direction: column;
            align-items: center;
        }

        .column {
            width: 100%;
            margin-bottom: 20px;
        }

        .card {
            width: 100%;
            padding: 10px;
        }

        .sudo11,
        .sudo6,
        .sudo4,
        .sudo5 {
            width: 100%;
            height: 200px;
        }

        .card-body {
            padding: 10px;
        }

        .css-f23be2 {
            font-size: 14px;
        }

        .css-5bhc30 {
            font-size: 12px;
        }

        .btn1 {
            padding: 5px 10px;
            font-size: 12px;
        }


        .section2 {
            flex-direction: column;
            align-items: center;
        }

        .column {
            width: 100%;
            margin-bottom: 20px;
        }

        .card {
            width: 100%;
            padding: 10px;
        }

        .sudo6,
        .sudo11,
        .sudo7,
        .sudo5,
        .sudo {
            width: 100%;
            height: 200px;
        }

        .card-body {
            padding: 10px;
        }

        .css-f23be2 {
            font-size: 14px;
        }

        .css-5bhc30 {
            font-size: 12px;
        }

        .btn1 {
            padding: 5px 10px;
            font-size: 12px;
        }


        /* ................................... add to bag .................................. */
        .modal-content {
    height: auto; /* adjust the height to fit the content */
  }
  .modal {
    padding-left: 0; /* remove the padding */
  }
  #submit {
    margin-bottom: 10px;
    margin-left: 5%;
    width: 90%;
    font-size: 16px;
  }
  .test p {
    margin: 10px;
    font-size: 16px;
  }
  .modal-body select {
    padding: 5px 10vh;
  }
  .modal-dialog {
    height: auto; /* adjust the height to fit the content */
  }
  .button1, .button2 {
    font-size: 16px;
    padding: 10px 20px;
  }
  .add {
    flex-direction: column; /* stack the elements vertically */
  }
  .add1 {
    width: 50px; /* adjust the image width */
    margin-left: 5px;
    margin-top: 5px;
  }
  .add2 {
    margin-top: 5px;
    margin-left: 5px;
  }
  #test3 {
    padding-top: 100px;
    padding-left: 20px;
  }

        /* ....................................................... footer ................................................ */
        .anc {
            padding: 0px 10px 0px 10px;
            border-right: 2px solid #ccc;
            color: #ccc;
            text-decoration: none;
            font-size: 12px;
            line-height: 16px;
        }

        .link1 ul li a {
            padding: 10px 50px 0px;
            font-size: 13px;
        }

        .section10 {
            padding-left: 20px;
        }

        .link1 ul li {
            padding: 0px 20px;
        }

        .link1 ul li a {
            font-size: 12px;
        }

        .links-title {
            font-size: 19px;
            padding: 10px 0px 10px 0px;
        }

        .footer-text {
            font-size: 12px;
        }

        .link3 {
            padding: 20px;
        }

        .title12 {
            font-size: 24px;
        }

        .navbar {
            margin-left: 0;
        }

        .form-inline {
            flex-direction: column;
        }

        .se_icon {
            padding: 5px 5px 3px 5px;
        }

        .se_fil {
            margin-right: 5px;
        }

        .link1 ul {
            display: inline-grid;
            padding: 10px 10px;
        }

        #myBtn {
            font-size: 14px;
            padding: 5px;
            width: 30px;
            right: 15px;
            bottom: 10px;
        }

        #myBtn:hover {
            background-color: black;
            color: white;
        }

        /* ................................................................... */
        .footer {
            padding: 20px;
            padding-top: 10px;
            display: block;
            padding-left: 0;
            justify-content: center;
            margin-top: 10px;
            padding-bottom: 0%;
        }

        /* adjust the logo size and margin */
        .logo1 img {
            height: 130px;
            width: 130px;
            margin-left: 100px;
            margin-top: 10px;
        }

        .logo1 {
            margin-bottom: 10px;
        }

        /* adjust the contact section padding and layout */
        .contact {
            padding-left: 0;
            padding-top: 20px;
        }

        /* adjust the text styles */
        .text {
            font-size: 25px;
            margin-left: 100px;

        }

        .text3 {
            font-size: 18px;
            margin-left: 20px;
        }

        .text4 {
            font-size: 14px;
            margin-left: 20px;
        }

        /* adjust the link styles */
        .link1 ul {
            flex-wrap: wrap;
        }

        .link1 li {
            margin-bottom: 10px;
        }

        .link1 a {
            font-size: 12px;
        }

        /* .............................. left box ....................................................... */

        .bu {
            font-size: 14px;
            padding: 5px;
            width: 30px;
        }

        .feedback-box {
            width: 90%;
            padding: 10px;
        }

        .in p {
            margin-left: 80%;
            font-size: 14px;
        }

        .feedback-box label {
            font-size: 14px;
        }

        .feedback-box input[type="text"],
        .feedback-box input[type="date"],
        .feedback-box input[type="file"],
        .feedback-box textarea {
            width: calc(100% - 10px);
            padding: 5px;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .feedback-box textarea {
            resize: vertical;
            height: 100px;
        }

        .image-container {
            width: 90%;
            height: 30%;
        }

        .round-image {
            width: 50%;
            height: 50%;
            border-radius: 0%;
            object-fit: cover;
        }

        #PAIRES {
            width: 80px;
            height: 80px;
            border: 1px solid brown;
            border-radius: 50%;
        }
  
        /* .................................................................. */
        .icon {
    flex-direction: row;
    align-items: center;
  }
  .form-control {
        width: 100%;
    }
  .icon a {
    margin-bottom: 10px;
  }
  
  .dropdown {
    margin-bottom: 10px;
  }
  
  .dropbtn {
    font-size: 14px;
  }
  
  .dropdown-content {
    font-size: 12px;
  }
  
  .dropdown-content a {
    padding: px;
    
  }
  
  /* adjust the loader styles */
  .loader {
    width: 50px;
    height: 50px;
    margin-left: -25px;
    margin-top: -25px;
  }
  
  .loader:before {
    width: 40px;
    height: 40px;
    margin-left: -20px;
    margin-top: -20px;
    border: 4px solid maroon;
  }


  .feedback-box {
            width: 280px; /* adjust width for mobile view */
            padding: 10px; /* adjust padding for mobile view */
        }

        .feedback-box label {
            font-size: 14px; /* adjust font size for mobile view */
        }

        .feedback-box input[type="text"],
        .feedback-box input[type="date"],
        .feedback-box input[type="file"],
        .feedback-box textarea {
            width: calc(100% - 10px); /* adjust width for mobile view */
            padding: 5px; /* adjust padding for mobile view */
            margin-bottom: 10px; /* adjust margin bottom for mobile view */
        }

        .feedback-box textarea {
            resize: vertical;
            height: 100px; /* adjust height for mobile view */
        }

        .bu {
            font-size: 14px; /* adjust font size for mobile view */
            padding: 5px; /* adjust padding for mobile view */
            width: 30px; /* adjust width for mobile view */
        }

        .in p {
            margin-left: 80%; /* adjust margin left for mobile view */
        }
    }
</style>

<body>
    <!-- ................................................... NAVBAR ........................... -->
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
                document.getElementById('logout').addEventListener('click', function (event) {
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
            padding: 5px;
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

    <!-- ....................................... banner  carousuel 1 ................................................................................ -->

    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="kurti.php"><img src="./img/banner 555.jpeg" alt="" class="d-block w-100"></a>
                </div>
                <div class="carousel-item">
                    <a href="top.php"><img src="./img/banner2.jpeg" alt="" class="d-block w-100"></a>
                </div>
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>


    <div class="new_arrivels">
        <h2 class="title">SHOP BY CATEGORY</h2>
    </div>

    <section>
        <div class="client">
            <!-- <h1>HAPPY CLIENTS</h1> -->
            <div class="container">
                <div class="owl-carousel">
                    <div class="carousel-1 d-flex ">
                        <div class="carousel-circle">
                            <a href="nayrakurti.php"><img src="./img/shop1.webp" alt=""></a>
                        </div>
                    </div>
                    <div class="carousel-1 d-flex">
                        <div class="carousel-circle">
                            <a href="top.php"><img src="./img/shop2.webp" alt=""></a>
                        </div>
                    </div>
                    <div class="carousel-1 d-flex">
                        <div class="carousel-circle">
                            <a href="kurti.php"><img src="./img/shop3.webp" alt=""></a>
                        </div>
                    </div>
                    <div class="carousel-1 d-flex">
                        <div class="carousel-circle">
                            <a href="gowns,dress.php"><img src="./img/shop4.webp" alt=""></a>
                        </div>
                    </div>
                    <div class="carousel-1 d-flex">
                        <div class="carousel-circle">
                            <a href="co-ord.php"><img src="./img/shop5.webp" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="./jquery.min.js"></script>
    <script src="./OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

    <script>
        $('.owl-carousel').owlCarousel({

            loop: true,
            // margin: 20,
            nav: true,
            dots: true,
            autoplay: true,
            items: 3,
            center: false,
            navText: false,
            autoplayTimeout: 3000,
            autoplayHoverPause: false
        })
    </script>

    <!-- ===============================================================  NEW ARRIVALS ====================================================================================== -->
    <div class="new_arrivels">
        <h2 class="title6">NEW ARRIVALS</h2>
        <a class="all" href="new-arrivals.php">
            <h3 class="title3">View All</h3>
        </a>
    </div>

    <section class="section2">
        <div class="column">
            <div class="card">
                <svg width="17" height="17" viewBox="0 0 20 20" fill="var(--grey1)" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m3.593 17.432 7.232-2.584c1.104-.392 1.424-1.808.592-2.64L7.793 8.584a1.602 1.602 0 0 0-2.64.592l-2.584 7.232a.801.801 0 0 0 1.024 1.024zM12.449 10l4.048-4.048a1 1 0 0 1 1.416 0L17.96 6a.604.604 0 0 0 .848 0 .604.604 0 0 0 0-.848l-.048-.048a2.207 2.207 0 0 0-3.112 0L11.6 9.152a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0zM8.449 5.904l-.048.048a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l.048-.048a2.207 2.207 0 0 0 0-3.112l-.04-.04a.604.604 0 0 0-.856.848l.048.048a1.004 1.004 0 0 1 0 1.408zM14.05 9.905l-.849.848a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l.848-.848a1 1 0 0 1 1.416 0l.864.864a.604.604 0 0 0 .848 0 .604.604 0 0 0 0-.848l-.864-.864a2.207 2.207 0 0 0-3.112 0zM12.45 5.104 10 7.552a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l2.448-2.448a2.207 2.207 0 0 0 0-3.112l-.848-.848a.604.604 0 0 0-.848 0 .604.604 0 0 0 0 .848l.848.848a1.014 1.014 0 0 1 0 1.416z"
                        fill="var(--grey1)"></path>
                </svg><span data-sd-event="" class="css-tw8l5q">Extra 50% OFF</span>
                <a href="k1.php">
                    <div class="sudo11">

                    </div>
                </a>
                <div class="card-body">
                    <p data-sd-event="" class="css-f23be2">
                        Cotton Printed New Womens A-line Straight
                    </p>
                    <div class="css-5bhc30">
                        <b><span data-sd-event="" class="css-1kfknpp">₹599</span></b>
                        <del><span data-sd-event="" class="css-1e8erur">₹1,599</span></del> |
                        <span class="dem"> 62% OFF</span>

                        <button class="btn1" onclick="openForm('form3')">ADD TO BAG</button>
                    </div>
                </div>
            </div>

            <div class="card">
                <svg width="17" height="17" viewBox="0 0 20 20" fill="var(--grey1)" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m3.593 17.432 7.232-2.584c1.104-.392 1.424-1.808.592-2.64L7.793 8.584a1.602 1.602 0 0 0-2.64.592l-2.584 7.232a.801.801 0 0 0 1.024 1.024zM12.449 10l4.048-4.048a1 1 0 0 1 1.416 0L17.96 6a.604.604 0 0 0 .848 0 .604.604 0 0 0 0-.848l-.048-.048a2.207 2.207 0 0 0-3.112 0L11.6 9.152a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0zM8.449 5.904l-.048.048a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l.048-.048a2.207 2.207 0 0 0 0-3.112l-.04-.04a.604.604 0 0 0-.856.848l.048.048a1.004 1.004 0 0 1 0 1.408zM14.05 9.905l-.849.848a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l.848-.848a1 1 0 0 1 1.416 0l.864.864a.604.604 0 0 0 .848 0 .604.604 0 0 0 0-.848l-.864-.864a2.207 2.207 0 0 0-3.112 0zM12.45 5.104 10 7.552a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l2.448-2.448a2.207 2.207 0 0 0 0-3.112l-.848-.848a.604.604 0 0 0-.848 0 .604.604 0 0 0 0 .848l.848.848a1.014 1.014 0 0 1 0 1.416z"
                        fill="var(--grey1)"></path>
                </svg><span data-sd-event="" class="css-tw8l5q">Extra 50% OFF</span>
                <a href="k2.php">
                    <div class="sudo6">

                    </div>
                </a>
                <div class="card-body">
                    <p data-sd-event="" class="css-f23be2">
                        Cotton Printed New Womens A-line Straight
                    </p>
                    <div class="css-5bhc30">
                        <b><span data-sd-event="" class="css-1kfknpp">₹599</span></b>
                        <del><span data-sd-event="" class="css-1e8erur">₹1,599</span></del> |
                        <span class="dem"> 62% OFF</span>

                        <button class="btn1" onclick="openForm('form3')">ADD TO BAG</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="column">
            <div class="card">
                <svg width="17" height="17" viewBox="0 0 20 20" fill="var(--grey1)" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m3.593 17.432 7.232-2.584c1.104-.392 1.424-1.808.592-2.64L7.793 8.584a1.602 1.602 0 0 0-2.64.592l-2.584 7.232a.801.801 0 0 0 1.024 1.024zM12.449 10l4.048-4.048a1 1 0 0 1 1.416 0L17.96 6a.604.604 0 0 0 .848 0 .604.604 0 0 0 0-.848l-.048-.048a2.207 2.207 0 0 0-3.112 0L11.6 9.152a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0zM8.449 5.904l-.048.048a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l.048-.048a2.207 2.207 0 0 0 0-3.112l-.04-.04a.604.604 0 0 0-.856.848l.048.048a1.004 1.004 0 0 1 0 1.408zM14.05 9.905l-.849.848a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l.848-.848a1 1 0 0 1 1.416 0l.864.864a.604.604 0 0 0 .848 0 .604.604 0 0 0 0-.848l-.864-.864a2.207 2.207 0 0 0-3.112 0zM12.45 5.104 10 7.552a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l2.448-2.448a2.207 2.207 0 0 0 0-3.112l-.848-.848a.604.604 0 0 0-.848 0 .604.604 0 0 0 0 .848l.848.848a1.014 1.014 0 0 1 0 1.416z"
                        fill="var(--grey1)"></path>
                </svg><span data-sd-event="" class="css-tw8l5q">Extra 50% OFF</span>
                <a href="k3.php">
                    <div class="sudo4">

                    </div>
                </a>
                <div class="card-body">
                    <p data-sd-event="" class="css-f23be2">
                        Cotton Printed New Womens A-line Straight
                    </p>
                    <div class="css-5bhc30">
                        <b><span data-sd-event="" class="css-1kfknpp">₹599</span></b>
                        <del><span data-sd-event="" class="css-1e8erur">₹1,599</span></del> |
                        <span class="dem"> 62% OFF</span>

                        <button class="btn1" onclick="openForm('form3')">ADD TO BAG</button>
                    </div>
                </div>
            </div>


            <div class="card">
                <svg width="17" height="17" viewBox="0 0 20 20" fill="var(--grey1)" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m3.593 17.432 7.232-2.584c1.104-.392 1.424-1.808.592-2.64L7.793 8.584a1.602 1.602 0 0 0-2.64.592l-2.584 7.232a.801.801 0 0 0 1.024 1.024zM12.449 10l4.048-4.048a1 1 0 0 1 1.416 0L17.96 6a.604.604 0 0 0 .848 0 .604.604 0 0 0 0-.848l-.048-.048a2.207 2.207 0 0 0-3.112 0L11.6 9.152a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0zM8.449 5.904l-.048.048a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l.048-.048a2.207 2.207 0 0 0 0-3.112l-.04-.04a.604.604 0 0 0-.856.848l.048.048a1.004 1.004 0 0 1 0 1.408zM14.05 9.905l-.849.848a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l.848-.848a1 1 0 0 1 1.416 0l.864.864a.604.604 0 0 0 .848 0 .604.604 0 0 0 0-.848l-.864-.864a2.207 2.207 0 0 0-3.112 0zM12.45 5.104 10 7.552a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l2.448-2.448a2.207 2.207 0 0 0 0-3.112l-.848-.848a.604.604 0 0 0-.848 0 .604.604 0 0 0 0 .848l.848.848a1.014 1.014 0 0 1 0 1.416z"
                        fill="var(--grey1)"></path>
                </svg><span data-sd-event="" class="css-tw8l5q">Extra 50% OFF</span>
                <a href="k4.php">
                    <div class="sudo5">

                    </div>
                </a>

                <div class="card-body">
                    <p data-sd-event="" class="css-f23be2">
                        Cotton Printed New Womens A-line Straight
                    </p>
                    <div class="css-5bhc30">
                        <b><span data-sd-event="" class="css-1kfknpp">₹599</span></b>
                        <del><span data-sd-event="" class="css-1e8erur">₹1,599</span></del> |
                        <span class="dem"> 62% OFF</span>

                        <button class="btn1" onclick="openForm('form3')">ADD TO BAG</button>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- ===============================================================  TRENDY COLLECTION  ====================================================================================== -->
    <h2 class="title6">TRENDY COLLECTION</h2>

    <a class="all" href="treandy.php">
        <h3 class="title3">View All</h3>
    </a>

    <section class="section2">
        <div class="column">
            <div class="card">
                <svg width="17" height="17" viewBox="0 0 20 20" fill="var(--grey1)" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m3.593 17.432 7.232-2.584c1.104-.392 1.424-1.808.592-2.64L7.793 8.584a1.602 1.602 0 0 0-2.64.592l-2.584 7.232a.801.801 0 0 0 1.024 1.024zM12.449 10l4.048-4.048a1 1 0 0 1 1.416 0L17.96 6a.604.604 0 0 0 .848 0 .604.604 0 0 0 0-.848l-.048-.048a2.207 2.207 0 0 0-3.112 0L11.6 9.152a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0zM8.449 5.904l-.048.048a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l.048-.048a2.207 2.207 0 0 0 0-3.112l-.04-.04a.604.604 0 0 0-.856.848l.048.048a1.004 1.004 0 0 1 0 1.408zM14.05 9.905l-.849.848a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l.848-.848a1 1 0 0 1 1.416 0l.864.864a.604.604 0 0 0 .848 0 .604.604 0 0 0 0-.848l-.864-.864a2.207 2.207 0 0 0-3.112 0zM12.45 5.104 10 7.552a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l2.448-2.448a2.207 2.207 0 0 0 0-3.112l-.848-.848a.604.604 0 0 0-.848 0 .604.604 0 0 0 0 .848l.848.848a1.014 1.014 0 0 1 0 1.416z"
                        fill="var(--grey1)"></path>
                </svg><span data-sd-event="" class="css-tw8l5q">Extra 50% OFF</span>
                <a href="k2.php">
                    <div class="sudo6">

                    </div>
                </a>
                <div class="card-body">
                    <p data-sd-event="" class="css-f23be2">
                        Cotton Printed New Womens A-line Straight
                    </p>
                    <div class="css-5bhc30">
                        <b><span data-sd-event="" class="css-1kfknpp">₹599</span></b>
                        <del><span data-sd-event="" class="css-1e8erur">₹1,599</span></del> |
                        <span class="dem"> 62% OFF</span>

                        <button class="btn1" onclick="openForm('form3')">ADD TO BAG</button>
                    </div>
                </div>
            </div>


            <div class="card">
                <svg width="17" height="17" viewBox="0 0 20 20" fill="var(--grey1)" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m3.593 17.432 7.232-2.584c1.104-.392 1.424-1.808.592-2.64L7.793 8.584a1.602 1.602 0 0 0-2.64.592l-2.584 7.232a.801.801 0 0 0 1.024 1.024zM12.449 10l4.048-4.048a1 1 0 0 1 1.416 0L17.96 6a.604.604 0 0 0 .848 0 .604.604 0 0 0 0-.848l-.048-.048a2.207 2.207 0 0 0-3.112 0L11.6 9.152a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0zM8.449 5.904l-.048.048a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l.048-.048a2.207 2.207 0 0 0 0-3.112l-.04-.04a.604.604 0 0 0-.856.848l.048.048a1.004 1.004 0 0 1 0 1.408zM14.05 9.905l-.849.848a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l.848-.848a1 1 0 0 1 1.416 0l.864.864a.604.604 0 0 0 .848 0 .604.604 0 0 0 0-.848l-.864-.864a2.207 2.207 0 0 0-3.112 0zM12.45 5.104 10 7.552a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l2.448-2.448a2.207 2.207 0 0 0 0-3.112l-.848-.848a.604.604 0 0 0-.848 0 .604.604 0 0 0 0 .848l.848.848a1.014 1.014 0 0 1 0 1.416z"
                        fill="var(--grey1)"></path>
                </svg><span data-sd-event="" class="css-tw8l5q">Extra 50% OFF</span>
                <a href="k5.php">
                    <div class="sudo7">

                    </div>
                </a>
                <div class="card-body">
                    <p data-sd-event="" class="css-f23be2">
                        Cotton Printed New Womens A-line Straight
                    </p>
                    <div class="css-5bhc30">
                        <b><span data-sd-event="" class="css-1kfknpp">₹599</span></b>
                        <del><span data-sd-event="" class="css-1e8erur">₹1,599</span></del> |
                        <span class="dem"> 62% OFF</span>

                        <button class="btn1" onclick="openForm('form3')">ADD TO BAG</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <svg width="17" height="17" viewBox="0 0 20 20" fill="var(--grey1)" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m3.593 17.432 7.232-2.584c1.104-.392 1.424-1.808.592-2.64L7.793 8.584a1.602 1.602 0 0 0-2.64.592l-2.584 7.232a.801.801 0 0 0 1.024 1.024zM12.449 10l4.048-4.048a1 1 0 0 1 1.416 0L17.96 6a.604.604 0 0 0 .848 0 .604.604 0 0 0 0-.848l-.048-.048a2.207 2.207 0 0 0-3.112 0L11.6 9.152a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0zM8.449 5.904l-.048.048a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l.048-.048a2.207 2.207 0 0 0 0-3.112l-.04-.04a.604.604 0 0 0-.856.848l.048.048a1.004 1.004 0 0 1 0 1.408zM14.05 9.905l-.849.848a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l.848-.848a1 1 0 0 1 1.416 0l.864.864a.604.604 0 0 0 .848 0 .604.604 0 0 0 0-.848l-.864-.864a2.207 2.207 0 0 0-3.112 0zM12.45 5.104 10 7.552a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l2.448-2.448a2.207 2.207 0 0 0 0-3.112l-.848-.848a.604.604 0 0 0-.848 0 .604.604 0 0 0 0 .848l.848.848a1.014 1.014 0 0 1 0 1.416z"
                        fill="var(--grey1)"></path>
                </svg><span data-sd-event="" class="css-tw8l5q">Extra 50% OFF</span>
                <a href="k1.php">
                    <div class="sudo11">

                    </div>
                </a>
                <div class="card-body">
                    <p data-sd-event="" class="css-f23be2">
                        Cotton Printed New Womens A-line Straight
                    </p>
                    <div class="css-5bhc30">
                        <b><span data-sd-event="" class="css-1kfknpp">₹599</span></b>
                        <del><span data-sd-event="" class="css-1e8erur">₹1,599</span></del> |
                        <span class="dem"> 62% OFF</span>

                        <button class="btn1" onclick="openForm('form3')">ADD TO BAG</button>
                    </div>
                </div>
            </div>

            <div class="card">
                <svg width="17" height="17" viewBox="0 0 20 20" fill="var(--grey1)" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m3.593 17.432 7.232-2.584c1.104-.392 1.424-1.808.592-2.64L7.793 8.584a1.602 1.602 0 0 0-2.64.592l-2.584 7.232a.801.801 0 0 0 1.024 1.024zM12.449 10l4.048-4.048a1 1 0 0 1 1.416 0L17.96 6a.604.604 0 0 0 .848 0 .604.604 0 0 0 0-.848l-.048-.048a2.207 2.207 0 0 0-3.112 0L11.6 9.152a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0zM8.449 5.904l-.048.048a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l.048-.048a2.207 2.207 0 0 0 0-3.112l-.04-.04a.604.604 0 0 0-.856.848l.048.048a1.004 1.004 0 0 1 0 1.408zM14.05 9.905l-.849.848a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l.848-.848a1 1 0 0 1 1.416 0l.864.864a.604.604 0 0 0 .848 0 .604.604 0 0 0 0-.848l-.864-.864a2.207 2.207 0 0 0-3.112 0zM12.45 5.104 10 7.552a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l2.448-2.448a2.207 2.207 0 0 0 0-3.112l-.848-.848a.604.604 0 0 0-.848 0 .604.604 0 0 0 0 .848l.848.848a1.014 1.014 0 0 1 0 1.416z"
                        fill="var(--grey1)"></path>
                </svg><span data-sd-event="" class="css-tw8l5q">Extra 50% OFF</span>
                <a href="k4.php">
                    <div class="sudo5">

                    </div>
                </a>
                <div class="card-body">
                    <p data-sd-event="" class="css-f23be2">
                        Cotton Printed New Womens A-line Straight
                    </p>
                    <div class="css-5bhc30">
                        <b><span data-sd-event="" class="css-1kfknpp">₹599</span></b>
                        <del><span data-sd-event="" class="css-1e8erur">₹1,599</span></del> |
                        <span class="dem"> 62% OFF</span>

                        <button class="btn1" onclick="openForm('form3')">ADD TO BAG</button>
                    </div>
                </div>
            </div>
        </div>


    </section>


    <!-- Indicators/dots -->

    <!-- ....................................... banner  carosul 2................................................................................ -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="kurti.php"><img src="./img/banner3.jpeg" alt="" class="d-block w-100"></a>
                </div>
                <div class="carousel-item">
                    <a href="top.php"><img src="img/banner10.jpeg" alt="" class="d-block w-100"></a>
                </div>
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    <script>
        document.getElementById("bar").addEventListener("click", function () {
            document.getElementById("navbar").classList.toggle("active");
        });
        document.getElementById("close").addEventListener("click", function () {
            document.getElementById("navbar").classList.remove("active");
        });
    </script>



    <!-- =-================================================================================================================================================= -->
    <h2 class="title6">ALL PRODUCTS</h2>

    <a class="all" href="allproduct.php">
        <h3 class="title3">View All</h3>
    </a>

    <section class="section2">

        <div class="column">
            <div class="card">
                <svg width="17" height="17" viewBox="0 0 20 20" fill="var(--grey1)" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m3.593 17.432 7.232-2.584c1.104-.392 1.424-1.808.592-2.64L7.793 8.584a1.602 1.602 0 0 0-2.64.592l-2.584 7.232a.801.801 0 0 0 1.024 1.024zM12.449 10l4.048-4.048a1 1 0 0 1 1.416 0L17.96 6a.604.604 0 0 0 .848 0 .604.604 0 0 0 0-.848l-.048-.048a2.207 2.207 0 0 0-3.112 0L11.6 9.152a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0zM8.449 5.904l-.048.048a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l.048-.048a2.207 2.207 0 0 0 0-3.112l-.04-.04a.604.604 0 0 0-.856.848l.048.048a1.004 1.004 0 0 1 0 1.408zM14.05 9.905l-.849.848a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l.848-.848a1 1 0 0 1 1.416 0l.864.864a.604.604 0 0 0 .848 0 .604.604 0 0 0 0-.848l-.864-.864a2.207 2.207 0 0 0-3.112 0zM12.45 5.104 10 7.552a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l2.448-2.448a2.207 2.207 0 0 0 0-3.112l-.848-.848a.604.604 0 0 0-.848 0 .604.604 0 0 0 0 .848l.848.848a1.014 1.014 0 0 1 0 1.416z"
                        fill="var(--grey1)"></path>
                </svg><span data-sd-event="" class="css-tw8l5q">Extra 50% OFF</span>
                <a href="k4.php">
                    <div class="sudo5">

                    </div>
                </a>
                <div class="card-body">
                    <p data-sd-event="" class="css-f23be2">
                        Cotton Printed New Womens A-line Straight
                    </p>
                    <div class="css-5bhc30">
                        <b><span data-sd-event="" class="css-1kfknpp">₹599</span></b>
                        <del><span data-sd-event="" class="css-1e8erur">₹1,599</span></del> |
                        <span class="dem"> 62% OFF</span>

                        <button class="btn1" onclick="openForm('form3')">ADD TO BAG</button>
                    </div>
                </div>
            </div>

            <div class="card">
                <svg width="17" height="17" viewBox="0 0 20 20" fill="var(--grey1)" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m3.593 17.432 7.232-2.584c1.104-.392 1.424-1.808.592-2.64L7.793 8.584a1.602 1.602 0 0 0-2.64.592l-2.584 7.232a.801.801 0 0 0 1.024 1.024zM12.449 10l4.048-4.048a1 1 0 0 1 1.416 0L17.96 6a.604.604 0 0 0 .848 0 .604.604 0 0 0 0-.848l-.048-.048a2.207 2.207 0 0 0-3.112 0L11.6 9.152a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0zM8.449 5.904l-.048.048a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l.048-.048a2.207 2.207 0 0 0 0-3.112l-.04-.04a.604.604 0 0 0-.856.848l.048.048a1.004 1.004 0 0 1 0 1.408zM14.05 9.905l-.849.848a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l.848-.848a1 1 0 0 1 1.416 0l.864.864a.604.604 0 0 0 .848 0 .604.604 0 0 0 0-.848l-.864-.864a2.207 2.207 0 0 0-3.112 0zM12.45 5.104 10 7.552a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l2.448-2.448a2.207 2.207 0 0 0 0-3.112l-.848-.848a.604.604 0 0 0-.848 0 .604.604 0 0 0 0 .848l.848.848a1.014 1.014 0 0 1 0 1.416z"
                        fill="var(--grey1)"></path>
                </svg><span data-sd-event="" class="css-tw8l5q">Extra 50% OFF</span>

                <a href="k1.php">
                    <div class="sudo11"></div>
                </a>
                <div class="card-body">
                    <p data-sd-event="" class="css-f23be2">
                        Cotton Printed New Womens A-line Straight
                    </p>
                    <div class="css-5bhc30">
                        <b><span data-sd-event="" class="css-1kfknpp">₹599</span></b>
                        <del><span data-sd-event="" class="css-1e8erur">₹1,599</span></del> |
                        <span class="dem"> 62% OFF</span>

                        <button class="btn1" onclick="openForm('form3')">ADD TO BAG</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <svg width="17" height="17" viewBox="0 0 20 20" fill="var(--grey1)" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m3.593 17.432 7.232-2.584c1.104-.392 1.424-1.808.592-2.64L7.793 8.584a1.602 1.602 0 0 0-2.64.592l-2.584 7.232a.801.801 0 0 0 1.024 1.024zM12.449 10l4.048-4.048a1 1 0 0 1 1.416 0L17.96 6a.604.604 0 0 0 .848 0 .604.604 0 0 0 0-.848l-.048-.048a2.207 2.207 0 0 0-3.112 0L11.6 9.152a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0zM8.449 5.904l-.048.048a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l.048-.048a2.207 2.207 0 0 0 0-3.112l-.04-.04a.604.604 0 0 0-.856.848l.048.048a1.004 1.004 0 0 1 0 1.408zM14.05 9.905l-.849.848a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l.848-.848a1 1 0 0 1 1.416 0l.864.864a.604.604 0 0 0 .848 0 .604.604 0 0 0 0-.848l-.864-.864a2.207 2.207 0 0 0-3.112 0zM12.45 5.104 10 7.552a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l2.448-2.448a2.207 2.207 0 0 0 0-3.112l-.848-.848a.604.604 0 0 0-.848 0 .604.604 0 0 0 0 .848l.848.848a1.014 1.014 0 0 1 0 1.416z"
                        fill="var(--grey1)"></path>
                </svg><span data-sd-event="" class="css-tw8l5q">Extra 50% OFF</span>
                <a href="k2.php">
                    <div class="sudo6">

                    </div>
                </a>

                <div class="card-body">
                    <p data-sd-event="" class="css-f23be2">
                        Cotton Printed New Womens A-line Straight
                    </p>
                    <div class="css-5bhc30">
                        <b><span data-sd-event="" class="css-1kfknpp">₹599</span></b>
                        <del><span data-sd-event="" class="css-1e8erur">₹1,599</span></del> |
                        <span class="dem"> 62% OFF</span>

                        <button class="btn1" onclick="openForm('form3')">ADD TO BAG</button>
                    </div>
                </div>
            </div>

            <div class="card">
                <svg width="17" height="17" viewBox="0 0 20 20" fill="var(--grey1)" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m3.593 17.432 7.232-2.584c1.104-.392 1.424-1.808.592-2.64L7.793 8.584a1.602 1.602 0 0 0-2.64.592l-2.584 7.232a.801.801 0 0 0 1.024 1.024zM12.449 10l4.048-4.048a1 1 0 0 1 1.416 0L17.96 6a.604.604 0 0 0 .848 0 .604.604 0 0 0 0-.848l-.048-.048a2.207 2.207 0 0 0-3.112 0L11.6 9.152a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0zM8.449 5.904l-.048.048a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l.048-.048a2.207 2.207 0 0 0 0-3.112l-.04-.04a.604.604 0 0 0-.856.848l.048.048a1.004 1.004 0 0 1 0 1.408zM14.05 9.905l-.849.848a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l.848-.848a1 1 0 0 1 1.416 0l.864.864a.604.604 0 0 0 .848 0 .604.604 0 0 0 0-.848l-.864-.864a2.207 2.207 0 0 0-3.112 0zM12.45 5.104 10 7.552a.604.604 0 0 0 0 .848.604.604 0 0 0 .848 0l2.448-2.448a2.207 2.207 0 0 0 0-3.112l-.848-.848a.604.604 0 0 0-.848 0 .604.604 0 0 0 0 .848l.848.848a1.014 1.014 0 0 1 0 1.416z"
                        fill="var(--grey1)"></path>
                </svg><span data-sd-event="" class="css-tw8l5q">Extra 50% OFF</span>
                <a href="k6.php">
                    <div class="sudo">
                    </div>
                </a>

                <div class="card-body">
                    <p data-sd-event="" class="css-f23be2">
                        Cotton Printed New Womens A-line Straight
                    </p>
                    <div class="css-5bhc30">
                        <b><span data-sd-event="" class="css-1kfknpp">₹599</span></b>
                        <del><span data-sd-event="" class="css-1e8erur">₹1,599</span></del> |
                        <span class="dem"> 62% OFF</span>

                        <button class="btn1" onclick="openForm('form3')">ADD TO BAG</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ---------------------------------------------------- add to bag--------------------- -->

    <div id="form3" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Select Prefrence</h5>
                </div>
                <div class="test">
                    <p>Size </p>
                </div>
                <div class="modal-body">
                    <select name="test1" id="">
                        <option value="XS">XS</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                    </select>
                </div>

                <button id="submit" onclick="openForm('form4')" class="button">ADD TO BAG</button>

            </div>
        </div>
    </div>

    <div id="form4" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    <h5 class="modal-title">My Bag</h5>
                    <hr>
                </div>
                <div class="add">

                    <a href="index.php" class="test4"> <img src="./img/503/503-1.jpg" alt="" class="add1" width="70">

                        <p class="add2">Wain Printed Kurti For Women
                    </a> <br> (XS)<span> 2* ₹449</span></p>

                </div>

                <div class="add">

                    <a href="index.php" class="test4"><img src="./img/501/1.jpg" alt="" class="add1" width="70">

                        <p class="add2">Wain Printed Kurti For Women
                    </a> <br> (L)<span> 2* ₹449</span></p>

                </div>

                <div class="add">

                    <a href="index.php" class="test4"> <img src="./img/513/5.jpg" alt="" class="add1" width="70">

                        <p class="add2">Wain Printed Kurti For Women
                    </a> <br> (XL)<span> 2* ₹449</span></p>

                </div>

                <div id="test3">
                    <hr>
                    <p>Subtotal : (7 items) <span>₹ 4,193</span></p>
                </div>


                <a href="checkout.php"> <button id="submit1" onclick="openForm('form4')" class="button1">VIEW
                        BAG</button></a>
                <a href="mobile.php"><button id="submit2" onclick="openForm('form4')"
                        class="button2">CHECKOUT</button></a>

            </div>
        </div>
    </div>

    <script>
        document.getElementById("bar").addEventListener("click", function () {
            document.getElementById("navbar").classList.toggle("active");
        });
        document.getElementById("close").addEventListener("click", function () {
            document.getElementById("navbar").classList.remove("active");
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function openForm(formId) {
            $('#' + formId).modal('show');
        }
    </script>


    <!-- ============================================ footer ================================================================================= -->
    <div class="footer">
        <div class="logo1">
            <a href="index.php"> <img src="./img/1-png.jpg" alt="" /></a>
            <span>
                <h2 class="text">SHRINIKA</h2>
            </span>

            <div style="display: flex; justify-content: center;  margin-top: 20px;margin-left: 10px;">
                <a href="https://business.facebook.com/samvritafashionindia/?business_id=107417202217575"
                    target="_blank" style="margin: 0 10px;">
                    <i class="fa-brands fa-facebook-f" style="font-size: 23px; color: #fff;"></i>
                </a>

                <a href="https://www.instagram.com/samvrita2024/" target="_blank" style="margin: 0 10px;">
                    <i class="fa-brands fa-instagram" style="font-size: 23px; color: #fff;"></i>
                </a>
            </div>
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
                <strong>
                    Address : 318, Times Trade Center,
                    Opposite Polaris Mall,
                    Near Bhaiya Nagar, <br>
                    BRTS Cenal Road BRTS CANAL ROAD Surat, Gujarat, 395010 Near Bhaiya Nagar
                    <span></span></strong>
                <strong> Surat, Gujarat ,Surat<span> 395010</span></strong>
            </div>
        </div>
    </div>

    <div class="css-4qrycz"></div>

    <div class="section10">
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

                    <span style="color:#fff;font-size: 14px;">Most searched on store →</span>
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

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-angle-up"></i></button>
    <script>
        // Get the button
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#carouselExampleIndicators').carousel({
                interval: 2000
            });
        });
    </script>
    <!-- ------------------ left button ---------------------------------- -->
    <?php

    include "config1.php";

    if (isset($_POST['add'])) {

        $file_name = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $file_path = "./img/ " . uniqid() . "-" . $file_name;

        move_uploaded_file($tmp_name, $file_path);

        $name = $_POST['name'];
        $date = $_POST['date'];
        $comment = $_POST['comment'];

        $insert_query = "INSERT INTO customer (file,name,date,comment) VALUES ('$file_path','$name','$date' ,'$comment')";

        $result = mysqli_query($conn, $insert_query);

        if ($result) {
            header('location:customer.php');
        }
    }
    ?>

    <!-- <button class="bu" onclick="openFeedbackBox()">
        <i class="fa-regular fa-message fa-xl"></i>
    </button>

    <div id="feedbackBox" class="feedback-box">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form1" method="post" enctype="multipart/form-data">
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

            reader.onload = function () {
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