<?php
set_time_limit(500);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-minimal/minimal.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="//code.jquery.com/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <style>
        .loader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite;
            /* Safari */
            animation: spin 2s linear infinite;
            margin: auto;
            margin-top: 35vh;

        }

        .zoom-set {
            display: none;
        }

        /* Safari */
        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        * {
            margin: 0;
            padding: 0;
            outline: none;
        }

        .db-flex {


            display: flex;
        }

        .db-box {

            width: 1vh;
            height: 1vh;
        }

        .db-box:hover {
            background: #d9d9d9;

        }

        .db-table {

            overflow: auto;
            margin: auto;
            margin-top: 5%;

            zoom: 1;
            -webkit-transition: all 1s ease;
            -moz-transition: 1s ease;
            transition: 1s ease;

        }

        .palet {
            display: none;
            position: fixed;
            top: 80vh;
            width: 200px;
            z-index: 3;
            left: 42%;

            background: #bdbdbd;
            border-radius: 6px;
            box-shadow: 0px 0px 20px #0000004a;

        }

        .palet-color {
            width: 80px;
            height: 40px;
            margin: 10px;
            border: none;
            border-radius: 3px;
        }

        .yellow {
            background: yellow;
        }

        .red {
            background: red;
        }

        .green {
            background: green;
        }

        .db-box .tooltiptext {
            visibility: hidden;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            margin-top: -20px;
            position: absolute;
            z-index: 1;
            margin-left: 3px;
            padding-left: 10px;
            padding-right: 10px;
            font-size: 2vh;
        }

        .db-box:hover .tooltiptext {
            visibility: visible;
        }





        .zoom-btn {
            background: white;
            height: 8vh;
            width: 8vh;
            border-radius: 50px;
            font-size: 50px;
            text-align: center;
            line-height: 7vh;
            margin-bottom: 2vh;

            box-shadow: 0px 0px 20px #0000002b;
        }


        .palet-out {
            position: fixed;
            width: 100%;
            height: 100vh;
            background: #00000047;
            top: 0px;
            z-index: 2;
            display: none;
        }
    </style>

    <style>
        /* ======================================================================== */

        /*                      NOT RELATED TO THE TTUTORIAL                        */

        /* ======================================================================== */

        * {


            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            outline: none;
            list-style: none;

        }


        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            outline: none;
            list-style: none;
        }


        :root {
            --step--2: clamp(0.69rem, calc(0.58rem + 0.60vw), 1.00rem);
            --step--1: clamp(0.83rem, calc(0.67rem + 0.81vw), 1.25rem);
            --step-0: clamp(1.00rem, calc(0.78rem + 1.10vw), 1.56rem);
            --step-1: clamp(1.20rem, calc(0.91rem + 1.47vw), 1.95rem);
            --step-2: clamp(1.44rem, calc(1.05rem + 1.95vw), 2.44rem);
            --step-3: clamp(1.73rem, calc(1.21rem + 2.58vw), 3.05rem);
            --step-4: clamp(2.07rem, calc(1.39rem + 3.40vw), 3.82rem);
            --step-5: clamp(2.49rem, calc(1.60rem + 4.45vw), 4.77rem);

            /* Font style */

            --ff-primary: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;

            /* Color style */

            /*
	--color-primary:#c51350;
	--color-secondary:#ff9a3c;
	--color-body:#333;
	--color-bg: #006600;
	--color-primary-dark:#007f67;
	--color-error:#cc3333;
	--color-success:#4bb544;
	--color-link:#cdcdcc;
	--color-border:darkgrey;
	--bs:#ffa857;
	*/

            --color-primary: #0092ca;
            --color-secondary: #6dd5ed;
            --color-primary-dark: #192294;
            --color-error: #cc3333;
            --color-success: #4bb544;
            --color-link: #606470;
            --color-link-dark: #3c4245;
            --color-background: #f5f9ee;
            --color-border-sc: #ececec;
            --color-border-focus: #a9d7f6;
            --color-border: #eeeeee;
            --bs: #ffa857;
            --color-dark-grey: #a4a3a3;
            --gradient: linear-gradient(135deg var(--color-primary), var(--color-secondary));


        }

        /* Remove default margin */
        body,
        h1,
        h2,
        h3,
        h4,
        p,
        figure,
        blockquote,
        dl,
        dd {
            margin: 0;
        }

        /* Remove list styles on ul, ol elements with a list role, which suggests default styling will be removed */

        ul[role='list'],
        ol[role='list'] {
            list-style: none;
        }

        /* Set core root defaults */
        html:focus-within {
            scroll-behavior: smooth;
        }

        /* Set core body defaults */
        body {
            min-height: 100vh;
            text-rendering: optimizeSpeed;
            line-height: 1.5;
            font-family: var(--ff-primary);
        }


        /* A elements that don't have a class get default styles */
        a:not([class]) {
            text-decoration-skip-ink: auto;
        }

        /* Make images easier to work with */
        img,
        picture {
            max-width: 100%;
            display: block;
        }

        /* Inherit fonts for inputs and buttons */
        input,
        button,
        textarea,
        select {
            font: inherit;
        }

        /* Remove all animations, transitions and smooth scroll for people that prefer not to see them */
        @media (prefers-reduced-motion: reduce) {
            html:focus-within {
                scroll-behavior: auto;
            }

            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
        }



        /* ======================================================================== */

        /*                      RELATED TO THE TTUTORIAL                        */

        /* ======================================================================== */
        body,
        html {
            height: 100%;
        }

        .container {
            position: fixed;
            z-index: 4;
            top: 0px;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            display: none;
            /*
	background-image: url(download.png);
	background-repeat: no-repeat;
	background-size: cover;
	background-position:bottom;
  */
            background-color: #0000004d;
            column-gap: 3rem;
        }

        .form {
            position: absolute;
            width: 100%;
            max-width: 480px;
            background: #fff;
            border-radius: 1rem;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            padding: 3em 2.2em;
            transition: all .3s ease-in-out;
        }

        .form.sign-up {
            opacity: 0;
            pointer-events: none;
        }

        .forms.show-signup .form.sign-up {
            opacity: 1;
            pointer-events: auto;
        }

        .forms.show-signup .form.sign-in {
            opacity: 0;
            pointer-events: none;
        }

        .header {
            color: var(--color-primary-dark);
            font-size: var(--step-1);
            font-weight: 500;
            text-align: center;
            letter-spacing: 1px;
        }


        /* -----------------The start of Social media Design* ----------------- */

        .social__media__container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            column-gap: 1rem;
            margin-top: 1.1rem;
        }

        a.social {
            width: 2.5rem;
            height: 2.5rem;
            background-color: #fff;
            color: #000;
            border-radius: 50%;
            text-align: center;
            border: 1px solid var(--color-border-sc);
            box-shadow: 1px 0 10px rgba(0, 0, 0, .2);
        }

        a.social i {
            line-height: 2.5rem;
        }

        /* -----------------The end of Social media Design* ----------------- */



        span.under__social {
            display: grid;
            place-items: center;
            letter-spacing: 1px;
            margin-top: 1.7rem;
        }


        .button-input-group {
            display: grid;
            place-items: center;
            margin-top: .6rem;
        }

        .group {
            width: 90%;
            height: 47px;
            margin-bottom: 1.3rem;
        }

        .group input,
        .group button {
            width: 100%;
            height: 100%;
            border: none;
            outline: none;
            border-radius: .4rem;
        }

        .group.button-group {
            width: 60%;
        }

        .group input {
            border: 2px solid var(--color-border);
            padding: 0 1.1rem;
        }

        .group input::placeholder {
            opacity: .9;
        }

        .form-link {
            margin: 1.6rem 0 1.8rem 0;
        }

        .alert-text.signup__alert {
            margin-bottom: 2.2rem;
        }

        .alert-text .help__text {
            position: absolute;
            left: 4rem;
            font-size: var(--step--2);
            margin-top: -1rem;
            opacity: .7;
        }

        a.link,
        a.login-link,
        .alert-text .help__text {
            color: var(--color-link);
        }

        a.link:hover,
        a.login-link:hover {
            color: var(--color-link-dark);
            text-decoration: underline;
            transition: all .4s ease;
        }



        /* -----------------The start of Validation* ----------------- */

        .form input:focus,
        .forum input:not(:placeholder-shown) {
            background-color: var(--color-background);
            border-color: var(--color-border-focus);
        }

        .form input:focus,
        .forum input:placeholder-shown {
            box-shadow: 0 0 0 2px var(--color-border-focus);
        }

        .form input:focus:valid {
            box-shadow: 0 0 0 2px var(--color-success);
        }

        .form input:valid:not(:placeholder-shown) {
            border-color: var(--color-success);
        }

        .form input:focus:invalid {
            box-shadow: 0 0 0 2px var(--color-error);
        }

        .form input:invalid:not(:placeholder-shown) {
            border-color: var(--color-error);
        }

        /* -----------------The end of Validation* ----------------- */



        /* -----------------The start of Button Design* ----------------- */


        .group button {
            position: relative;
            background: transparent;
            cursor: pointer;
        }

        .group button span {
            width: 100%;
            height: 100%;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-align: center;
            align-items: center;
            font-weight: 500;
            color: var(--color-primary);
            letter-spacing: 1px;
            background: transparent;
            border-radius: .6rem;
            z-index: 99;
        }

        .group button:hover span {
            background-color: var(--color-primary);
            color: #fff;
            transform: scale(1.1);
            transition: all .2s ease;
            transition-delay: .3s;

        }

        .group button::before {
            position: absolute;
            content: '';
            width: 1.5rem;
            height: 1.5rem;
            top: 1px;
            left: 1px;
            border-top: 2px solid var(--color-primary);
            border-left: 2px solid var(--color-primary);
            border-top-left-radius: .6rem;
            transition: all .3s ease;
            transition-delay: 0s;
        }

        .group button::after {
            position: absolute;
            content: '';
            width: 1.5rem;
            height: 1.5rem;
            bottom: 1px;
            right: 1px;
            border-bottom: 2px solid var(--color-primary);
            border-right: 2px solid var(--color-primary);
            border-bottom-right-radius: .6rem;
            transition: all .3s ease;
            transition-delay: 0s;
        }

        .group button:hover {
            box-shadow: 0 0 1.6rem var(--color-primary);
            transform: scale(1.1);
            transition: all .2s ease;
            transition-delay: .3s;
        }

        .group button:hover::before,
        .group button:hover::after {
            width: 99%;
            height: 96%;
            border-radius: .6rem;
        }


        /* -----------------The end of Button Design* ----------------- */


        footer {
            position: absolute;
            left: 50%;
            top: 50%;
            word-spacing: 1px;
            transform: translate(-50%, 19em);
        }

        footer p {
            font-size: var(--step--1);
            color: #fff;
        }

        footer p a {
            letter-spacing: 1px;
            color: #f7aa00;
        }

        footer p a:hover {
            text-decoration: underline;
        }

        .close-container {
            position: fixed;
            width: 100%;
            height: 100vh;
            background: transparent;
        }
    </style>
    <div class="loader">

    </div>


    <div class="container forms" id="container">
        <div class="close-container" onclick="closecontainer()"></div>
        <div class="form sign-up">

            <div class="header">Kayıt ol</div>
            <div class="social__media__container">

            </div>
            <span class="under__social">
                <a href="#" class="link signin-link">hesabın varsa giriş yap
                </a>
            </span>

            <div class="button-input-group">
                <div class="group input-group">
                    <input type="text" placeholder="Kullanıcı Adı" id="namesign" required>
                </div>
                <div class="group input-group">
                    <input type="email" placeholder="Email" id="emailsign" required>
                </div>
                <div class="group input-group">
                    <input type="password" placeholder="Şifre" id="passwordsign" required pattern=".{8,}">
                </div>
                <div class="alert-text signup__alert">
                    <span class="help__text">En az 8 karakter</span>
                </div>
                <div class="group button-group">
                    <button class="signup-btn" onclick="useraction('sign')">
                        <span>Kayıt ol</span>
                    </button>
                </div>
            </div>


        </div>


        <div class="form sign-in">

            <div class="header">Giriş yap</div>
            <div class="social__media__container">

            </div>
            <span class="under__social">
                <a href="#" class="link signup-link">Hesabın yoksa kayıt ol</a>
            </span>

            <div class="button-input-group">
                <div class="group input-group">
                    <input type="email" placeholder="Email" id="emaillogin" required>
                </div>
                <div class="group input-group">
                    <input type="password" placeholder="Şifre" id="passwordlogin" required pattern=".{8,}">
                </div>
                <div class="alert-text">
                    <span class="help__text">En az 8 karakter</span>
                </div>
                <div class="form-link forgot">

                </div>
                <div class="group button-group">
                    <button class="signup-btn" onclick="useraction('login')">
                        <span>Giriş yap</span>
                    </button>
                </div>
            </div>

        </div>

        <!--
			<div class="overlay-wrapper">
				<div class="overlay">
					<div class="overlay-panel overlay__left">
						<h1>Welcome Back!</h1>
						<p>Please login your personal info</p>
						
						<div class="group button-group">
						<button class="ghost" id="SignIn">
							<span>Sign in</span>
						</button>
					</div>
					</div>
					
					<div class="overlay-panel overlay__right">
						<h1>Hello, Friend!</h1>
            <p>Enter your personal details and start your journey with us</p>
						
						<div class="group button-group">
						<button class="ghost" id="SignUp">
							<span>Sign up</span>
						</button>
					</div>
					</div>
				</div>
			</div>
			-->

    </div>

    <script>
        const forms = document.querySelector(".forms"),
            links = document.querySelectorAll(".link");



        links.forEach(link => {
            link.addEventListener("click", e => {
                e.preventDefault();
                forms.classList.toggle("show-signup");
            })
        })
    </script>



    <div class="zoom-set">
        <div class="zoom-btn" onclick="zoom('+')">+</div>
        <div class="zoom-btn" onclick="zoom('-')">-</div>
    </div>



    <div id="s_db">
        <div class="db-table" id="db-table"></div>
    </div>

    <script>
        setInterval(function() {
            $("#db-table").load("db_box.php")
        }, 10000);
    </script>

    <div class="palet-out" id="palet-out" onclick="paletout()">


    </div>

    <div class="palet" id="paletbox">
        <input class="palet-color" type="color" name="" id="palet-chose-color">
        <button class="palet-color" onclick="palet()" id="add-btn">Ekle</button>


    </div>

    <script>
        var box = "";
        var zoomf = 1;
        var renk = "";
        var index = 15;




        function zoom(zoomid) {
            if (zoomid == "+") {
                zoomf = zoomf + 1;
                document.getElementById("db-table").style.zoom = zoomf;
            } else if (zoomid == "-") {
                zoomf = zoomf - 1;
                document.getElementById("db-table").style.zoom = zoomf;
            }


        }

        function useraction(useractionid) {
            
            if (useractionid == "login") {
                var usermail = document.getElementById('emaillogin').value;
                var userpassword = document.getElementById('passwordlogin').value;



                $.ajax({
                    url: "plugin/action/user_action.php",
                    type: "POST",
                    data: "action=login&usermail=" + usermail + "&userpassword=" + userpassword,
                    success: function(data) {

                        if (data == "userloginsuccess") {

                            document.getElementById('container').style.display = 'none';
                            Swal.fire(
                                'Giriş başarılı',
                                'Rplace türkiye\'ye hoşgeldiniz.',
                                'success'
                            )


                        } else if (data == "userloginfail") {
                            Swal.fire(
                                'Giriş başarısız !',
                                'E-posta veya şifrenizi hatalı girdiniz',
                                'warning'
                            )
                        }
                        else{
                            alert("HATA 890366");
                        }

                    }

                });
            } else if (useractionid == "sign") {
                var username = document.getElementById('namesign').value;
                var usermail = document.getElementById('emailsign').value;
                var userpassword = document.getElementById('passwordsign').value;

                

                $.ajax({
                    url: "plugin/action/user_action.php",
                    type: "POST",
                    data: "action=sign&username=" + username + "&usermail=" + usermail + "&userpassword=" + userpassword,
                    success: function(data) {

                        if (data == "usersignsuccess") {

                            document.getElementById('container').style.display = 'none';

                            Swal.fire(
                                'Kayıt başarılı',
                                'Rplace türkiye\'ye hoşgeldiniz.',
                                'success'
                            )


                        }else if(data == "usersignfail"){
                            Swal.fire(
                                'Kayıt başarısız !',
                                'Sistemde bir sorun oluştu lütfen daha sonra tekrar deneyiniz.',
                                'warning'
                            )
                        }
                        else if(data == "usersignfailpassword"){
                            Swal.fire(
                                'Kayıt başarısız !',
                                'Şifreniz 8 karakterden az olamaz !',
                                'warning'
                            )
                        }
                        else if(data == "usersignfailmail"){
                            Swal.fire(
                                'Kayıt başarısız !',
                                'Lütfen geçerli bir mail adresi giriniz.',
                                'warning'
                            )
                        }
                        else if(data == "usermailztn"){
                            Swal.fire(
                                'Kayıt başarısız !',
                                'Girdiğiniz e-posta hesabı zaten kayıtlı.',
                                'warning'
                            )
                        }
                        else if(data == "usernameztn"){
                            Swal.fire(
                                'Kayıt başarısız !',
                                'Girdiğiniz kullanıcı adı zaten kayıtlı.',
                                'warning'
                            )
                        }else{
                            alert("HATA 890366");
                        }

                    }

                });
            }
        }

        function closecontainer() {
            document.getElementById('container').style.display = 'none';
        }

        function paletout() {
            document.getElementById('paletbox').style.display = 'none';
            document.getElementById('palet-out').style.display = 'none';
        }

        function actionbox(actionboxid) {
            box = actionboxid;
            document.getElementById('paletbox').style.display = 'flex';
            document.getElementById('palet-out').style.display = 'block';
        }

        function palet() {
            renk = document.getElementById("palet-chose-color").value;
            document.getElementById(box).style.background = renk;
            document.getElementById('palet-out').style.display = 'none';

            document.getElementById('paletbox').style.display = 'none';
            document.getElementById('add-btn').disabled = true;




            $.ajax({
                url: "plugin/action/db_add.php",
                type: "POST",
                data: "coordinate=" + box + "&color=" + renk,
                success: function(data) {

                    if (data == "nouser") {

                        document.getElementById('container').style.display = 'flex';


                    } else {




                    }

                }

            });

            sayacsimdilik();
        }

        function sayacson() {
            alert("süre doldu");
        }

        function sayacsimdilik() {

            var deger = window.setInterval(function() {
                document.getElementById('add-btn').innerHTML = "00:" + index;

                if (index == 0) {
                    document.getElementById('add-btn').disabled = false;
                    document.getElementById('add-btn').innerHTML = "Ekle";
                    index = 15;
                    clearInterval(deger)

                }

                index = index - 1;

            }, 1000)






        }
    </script>

</body>

</html>