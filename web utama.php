<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>DALF Playstation</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Arial;
            list-style: none;
            text-decoration: none;
            scroll-behavior: smooth;
        }
        :root {
            --bg-color: #ffffff;
            --text-color: #111111;
            --main-color: #006fcd;
            --big-font: 4.5rem;
            --h2-font: 3rem;
            --h3-font: 2rem;
            --normal-font: 1rem;
        }
        body {
            background: var(--bg-color);
            color: var(--text-color);
        }
        header {
            width: 100%;
            top: 0;
            right: 0;
            z-index: 1000;
            position: fixed;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: transparent;
            padding: 20px 14%;
            transition: all .35s ease;
        }
        .logo {
            background-image: url(gambar/Logo\ Dalf.png);
            background-repeat: no-repeat;
            background-size: contain;
            width: 300px;
            height: 70px;
        }
        .navlist {
            display: flex;
        }
        .navlist a{
            color: var(--text-color);
            font-weight: 600;
            padding: 10px 25px;
            font-size: var(--normal-font);
            transition: all .36s ease;
            padding: 30px;
        }
        .navlist a:hover {
            color: var(--main-color);
        }
        section {
            padding: 100px 14%;
        }
        .home2 {
            min-height: 70vh;
            width: 100%;
            background: url(gambar/god\ of\ war.png);
            background-size: cover;
            background-position: center top;
            position: relative;
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            align-items: center;
        }
        .home2-text h1 {
            font-size: var(--big-font);
            font-weight: 800;
            line-height: 1.2;
            letter-spacing: .6rem;
            margin-bottom: 1.4rem;
            opacity: 0;
            animation: fade-in 1s ease-in-out forwards;
            color: white;
        }
        .home2-text span {
            font-size: var(--h2-font);
            opacity: 0;
            animation: fade-in 2s ease-in-out forwards;
        }
        .home2-text p {
            font-size: var(--normal-font);
            font-weight: 500;
            margin-bottom: 3rem;
            letter-spacing: .2rem;
            opacity: 0;
            animation: fade-in 3s ease-in-out forwards;
            color: white;
        }
        .home {
            min-height: 100vh;
            width: 100%;
            background: url(gambar/Background.jpg);
            background-size: cover;
            background-position: center top;
            position: relative;
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            align-items: center;
        }
        .home-text h1 {
            font-size: var(--big-font);
            font-weight: 800;
            line-height: 1.2;
            letter-spacing: .6rem;
            margin-bottom: 1.4rem;
            opacity: 0;
            animation: fade-in 1s ease-in-out forwards;
        }
        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .home-text span {
            font-size: var(--h2-font);
            opacity: 0;
            animation: fade-in 2s ease-in-out forwards;
        }
        .home-text p {
            font-size: var(--normal-font);
            font-weight: 500;
            margin-bottom: 3rem;
            letter-spacing: .2rem;
            opacity: 0;
            animation: fade-in 3s ease-in-out forwards;
        }
        .btn {
            display: inline-block;
            padding: 13px 25px;
            background: var(--main-color);
            color: var(--bg-color);
            font-size: 15px;
            letter-spacing: 1px;
            font-weight: 600;
            border-radius: 5px;
            transition: all .35s ease;
        }
        .btn:hover {
            transform: translateY(-5px);
            background: var(--text-color)
        }
        header.sticky {
            background: var(--bg-color);
            padding: 14px 14%;
            box-shadow: 0px 0px 10px rgb(0 0 0 / 10%);
        }
        .center-text {
            text-align: center;
        }
        .center-text h2 {
            font-size: var(--h3-font);
        }
        .featured-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, auto));
            gap: 1.3rem;
            align-items: center;
            margin-top: 4rem;
        }
        .row {
            position: relative;
            transition: all .35s ease;
        }
        .row img {
            width: 100%;
            height: auto;
        }
        .fea-text {
            top: 40px;
            left: 50px;
        }
        .fea-text h5 {
            font-size: 19px;
            letter-spacing: 2px;
            margin-bottom: 1rem;
        }
        .fea-text p {
            color: #555;
            font-size: 15px;
            letter-spacing: 1px;
            font-weight: 400;
        }
        .row .arrow {
            bottom: 40px;
            left: 50px;
        }

        .row .arrow i {
            height: 35px;
            width: 35px;
            background: var(--bg-color);
            border-radius: 50%;
            font-size: 20px;
            color: var(--text-color);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all .35 ease;
        }
        .row:hover {
            transform: scale(0.9) translateY(-5px);
            cursor: pointer;
        }
        .row:hover i {
            background: var(--main-color);
            color: var(--bg-color);
        }
        .cta {
            height: 60vh;
            width: 100%;
            background: url(gambar/ctaplaystation.png);
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
        }
        .cta-text h6 {
            font-size: 17px;
            font-weight: 500;
            letter-spacing: .6px;
            margin-bottom: 14px;
            color: white;
        }
        .cta-text h4 {
            font-size: 3.3rem;
            line-height: 1.2;
            letter-spacing: .6rem;
            margin-bottom: 30px;
            color: white;
        }
        .new-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, auto));
            gap: 1.3rem;
            align-items: center;
            margin-top: 4rem;
            text-align: center;
        }
        .box {
            position: relative;
            transition: all .40s ease;
        }
        .box img {
            width: 100%;
            height: auto;
            margin-bottom: 20px;
            border-radius: 10px;
        }
        .box h5 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .box h6 {
            font-size: 16px;
            font-weight: 700;
        }
        .sale {
            position: absolute;
            top: 0;
            left: 0;
            width: 60px;
            height: 30px;
            background-color: var(--main-color);
            color: var(--bg-color);
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .box:hover {
            transform: scale(0.9) translateY(-5px);
            cursor: pointer;
        }
        .contact {
            background-color: var(--text-color);
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, auto));
            gap: 2rem;
        }
        .main-contact h3 {
            font-size: 23px;
            margin-bottom: 1.6rem;
            color: var(--bg-color);
        }
        .main-contact h5 {
            font-size: 15px;
            font-weight: 600;
            color: #555;
        }
        .icons {
            display: flex;
            margin-top: 2rem;
        }
        .icons i{
            font-size: 25px;
            margin-right: 1rem;
            color: #555;
            transition: all .35s ease;
        }
        .icons i:hover {
            color: var(--bg-color);
            transform: scale(1.1) translateY(-5px);
        }
        .main-contact li {
            margin-bottom: 15px;
        }
        .main-contact li a {
            display: block;
            color: #555;
            font-size: var(--normal-font);
            font-weight: 600;
            transition: all .35s ease;
        }
        .main-contact li a:hover {
            transform: translateX(-8px);
            color: var(--bg-color);
        }
        .copyright {
            text-align: center;
            padding: 20px;
            background: var(--text-color);
        }
        .copyright p{
            color: #555;
            font-size: 14px;
            letter-spacing: 1px;
        }
        .top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
        }
        .top i {
            font-size: 22px;
            color: var(--bg-color);
            padding: 14px;
            background: var(--main-color);
            border-radius: 2rem;
        }
        .wrapper {
            width: 900px;
            margin: 5% auto;
        }
        .single-price {
            width: 33%;
            background-color: black;
            float: left;
            margin-top: 1%;
            box-shadow: 1px 1px 20px rgba(0,0,0,0.5);
            text-align: center;
            transition: 0.9s;
            margin-bottom: 15%;
            margin-right: 3px;
            border-radius: 25px;
        }
        .price {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 2px solid var(--main-color);
            margin: 5% auto 0 auto;
            text-align: center;
        }
        .deals {
            margin-top: 10%;
        }
        .single-price h1 {
            font-size: 18px;
            color: #fff;
            line-height: 3;
            text-transform: uppercase;
        }
        .price h2 {
            font-size: 38px;
            color: #fff;
            margin-top: 30%;
        }
        .deals h4 {
            font-size: 14px;
            font-weight: normal;
            text-align: center;
            color: #fff;
            line-height: 3;
        }
        .single-price:hover {
            background: var(--main-color);
            color: #fff;
            box-shadow: 0 0 15px rgba(0,0,0,1);
            transform: scale(1.1);
            z-index: 1;
            border-radius: 25px;
        }
        .single-price:hover .price {
            border-color: #fff;
        }
        .single-price a {
            text-decoration: none;
            background: var(--main-color);
            color: #fff;
            padding: 10px 60px;
            display: inline-block;
            margin: 10% auto;
            text-transform: uppercase;
            font-weight: bold;
            border-radius: 25px;
        }
        .single-price:hover a {
            background: #262626;
            color: #fff;
        }
        .card {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .card .box{
            position: relative;
            width: 320px;
            padding: 40px;
            background: #fff;
            box-shadow: 0 5px 15px rgba(0,0,0,.1);
            border-radius: 4px;
            margin: 20px;
            box-sizing: border-box;
            overflow: hidden;
            text-align: center;
        }
        .card .box .icon {
            position: relative;
            width: 70px;
            height: 70px;
            color: #fff;
            background: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            border-radius: 50%;
            font-size: 40px;
            font-weight: 700;
            transition: 1s;
        }
        .btnLogin-popup {
            width: 130px;
            height: 50px;
            background: black;
            border: 2px solid black;
            outline: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1.1em;
            color: #fff;
            font-weight: 500;
            margin-left: 40px;
            transition: .5s;
        }
        .btnLogin-popup:hover {
            background: var(--main-color);
            color: #fff;
            border: 2px solid var(--main-color);
        }
        .user {
            display: flex;
            align-items: center;
        }
        .user i {
            color: var(--main-color);
            font-size: 28px;
            margin-right: 7px;
        }
        #menu-icons {
            font-size: 35px;
            color: var(--text-color);
            cursor: pointer;
            z-index: 10001;
            display: none;
        }
        .login-wrapper {
            position: fixed;
            top: 25%;
            right: 35%;
            width: 400px;
            height: 440px;
            background: white;
            border: 2px solid rgba(255,255,255,.5);
            border-radius: 20px;
            backdrop-filter: blur(20px);
            box-shadow: 0 0 30px rgba(0,0,0,.5);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            transform: scale(0);
            transition: transform .5s ease, height .2s ease;
            z-index: 999;
        }
        .login-wrapper.active-popup {
            transform: scale(1);
        }
        .login-wrapper .form-box {
            width: 100%;
            padding: 40px;
        }
        .form-box h2 {
            font-size: 2em;
            color: #000;
            text-align: center;
        }
        .input-box {
            position: relative;
            width: 100%;
            height: 50px;
            border-bottom: 2px solid #000;
            margin: 30px 0;
        }
        .input-box label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            font-size: 1em;
            color: #000;
            font-weight: 500;
            pointer-events: none;
            transition: .5s;
        }
        .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            color: #000;
            font-weight: 600;
            padding: 0 35px 0 5px;
        }
        .input-box .icons-login {
            position: absolute;
            right: 8px;
            font-size: 1.2em;
            color: #000;
            line-height: 57px;
        }
        .input-box input:focus~label,
        .input-box input:valid~label {
            top: -5px;
        }
        .remember-forgot {
            font-size: .9em;
            color: #000;
            font-weight: 500;
            margin: -15px 0 15px;
            display: flex;
            justify-content: space-between;
        }
        .remember-forgot label input {
            accent-color: var(--main-color);
            margin-right: 3px;
        }
        .remember-forgot a {
            color: #000;
            text-decoration: none;
        }
        .remember-forgot a:hover {
            text-decoration: underline;
        }
        .btn-login {
            width: 100%;
            height: 45px;
            background: var(--main-color);
            border: none;
            outline: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1em;
            color: #fff;
            font-weight: 500;
        }
        .login-register {
            font-size: .9em;
            color: #000;
            text-align: center;
            font-weight: 500;
            margin: 25px 0 10px;
        }
        .login-register p a {
            color: #000;
            text-decoration: none;
            font-weight: 500;
        }
        .login-register p a:hover {
            text-decoration: underline;
        }
        .login-wrapper .icon-close {
            position: absolute;
            top: 0;
            right: 0;
            width: 45px;
            height: 45px;
            background: #000;
            font-size: 2em;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom-left-radius: 20px;
            cursor: pointer;
            z-index: 1;
        }
        .login-wrapper .form-box.login {
            transition: transform .18s ease;
            transform: translateX(0);
        }
        .login-wrapper.active .form-box.login {
            transition: none;
            transform: translateX(-400px);
        }
        .login-wrapper .form-box.register {
            position: absolute;
            transition: none;
            transform: translateX(400px);
        }
        .login-wrapper.active .form-box.register {
            transition: transform .18s ease;
            transform: translateX(0);
        }
        .login-wrapper.active {
            height: 520px;
        }
    </style>
</head>
<body>
    <!---header-->
    <header>
        <a href="web utama.php" class="logo"></a>

        <ul class="navlist">
            <li><a href="">Home</a></li>
            <li><a href="" onclick="showAlert()">Berita</a></li>
            <li><a href="kupon.php">Voucher</a></li>
            <li><a href="" onclick="showAlert()">Kontak</a></li>
        </ul>

        <button class="btnLogin-popup">Login</button>
    </header>

    <!---home-->
    <section class="home" id="home">
        <div class="home-text">
            <h1>PlayStation 5 <br><span>New Arrival</span></h1>
            <p>New Performance, now also available.</p>
            <a href="" class="btn" onclick="showAlert()">View Collection</a>
        </div>
    </section>

    <!---login wrapper-->
    <div class="login-wrapper">
        <span class="icon-close">
            <i class='bx bx-x' ></i>
        </span>

        <div class="form-box login">
            <h2>Login</h2>
            <form action="login.php" method="POST" onsubmit="showAlertsLogin(event)">
                <div class="input-box">
                    <span class="icons-login"><i class='bx bxs-envelope' ></i></span>
                    <input type="usernames" name="usernames" id="usernames" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icons-login"><i class='bx bxs-lock-alt' ></i></span>
                    <input type="password" name="password" id="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" name="remember" id="remember">Remember me</label>
                    <a href="forgot-password.php">Forgot Password?</a>
                </div>
                <button type="submit" class="btn-login">Login</button>
                <div class="login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <form action="register.php" method="POST" onsubmit="showAlerts(event)">
                <div class="input-box">
                    <span class="icons-login"><i class='bx bxs-user'></i></span>
                    <input type="text" name="usernames" id="usernames" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icons-login"><i class='bx bxs-envelope'></i></span>
                    <input type="email" name="email" id="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icons-login"><i class='bx bxs-lock-alt'></i></span>
                    <input type="password" name="passwords" id="passwords" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">I agree to the terms & conditions</label>
                </div>
                <input type="submit" class="btn-login" value="Register">
                <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <!---fitur-->
    <section class="featured" id="featured">
        <div class="center-text">
            <h2>Kategori</h2>
        </div>

        <div class="featured-content">
            <div class="row">
				<img src="gambar/headset.png">
				<div class="fea-text">
					<h5>Headset</h5>
					<p>3 items</p>
				</div>
				<div class="arrow">
					<a href="" onclick="showAlert()"><i class='bx bx-right-arrow-alt' ></i></a>
				</div>
			</div>
            
            <div class="row">
				<img src="gambar/dualsense.png">
				<div class="fea-text">
					<h5>Controller</h5>
					<p>5 items</p>
				</div>
				<div class="arrow">
					<a href="" onclick="showAlert()"><i class='bx bx-right-arrow-alt' ></i></a>
				</div>
			</div>

            <div class="row">
				<img src="gambar/console.png">
				<div class="fea-text">
					<h5>Console</h5>
					<p>5 items</p>
				</div>
				<div class="arrow">
					<a href="" onclick="showAlert()"><i class='bx bx-right-arrow-alt' ></i></a>
				</div>
			</div>

            <div class="row">
				<img src="gambar/vr.png">
				<div class="fea-text">
					<h5>PlayStation VR</h5>
					<p>2 items</p>
				</div>
				<div class="arrow">
					<a href="" onclick="showAlert()"><i class='bx bx-right-arrow-alt' ></i></a>
				</div>
			</div>

            <div class="row">
				<img src="gambar/games.png">
				<div class="fea-text">
					<h5>Games</h5>
					<p>6 items</p>
				</div>
				<div class="arrow">
					<a href="" onclick="showAlert()"><i class='bx bx-right-arrow-alt' ></i></a>
				</div>
			</div>

            <div class="row">
				<img src="gambar/psplus.png">
				<div class="fea-text">
					<h5>PlayStation Plus</h5>
					<p>3 items</p>
				</div>
				<div class="arrow">
					<a href="" onclick="showAlert()"><i class='bx bx-right-arrow-alt' ></i></a>
				</div>
			</div>
        </div>
    </section>

    <!---cta-->
    <section class="cta">
        <div class="cta-text">
            <h6>GAME FESTIVAL SALE</h6>
            <h4>20% OFF <BR> NEW ARRIVAL</h4>
            <a href="" class="btn" onclick="showAlert()">Shop Now</a>
        </div>
    </section>

    <!---NEW-->
    <section class="new" id="new">
        <div class="center-text">
            <h2>New Arrivals</h2>
        </div>

        <div class="new-content">
            <div class="box">
                <img src="gambar/playstation4-new.png" alt="playstation4-new">
                <h5>PlayStation 4 Pro</h5>
                <h6>Rp3.860.000</h6>
                <div class="sale">
                    <h4>Sale</h4>
                </div>
            </div>

            <div class="box">
                <img src="gambar/charging-new.png" alt="playstation4-new">
                <h5>Dualsense Charging Station</h5>
                <h6>Rp485.000</h6>
                <div class="sale">
                    <h4>Sale</h4>
                </div>
            </div>

            <div class="box">
                <img src="gambar/steeringwheel.png" alt="playstation4-new">
                <h5>Logitech G29 Steering Wheel</h5>
                <h6>Rp3.799.000</h6>
                <div class="sale">
                    <h4>Sale</h4>
                </div>
            </div>

            <div class="box">
                <img src="gambar/pscamera.png" alt="playstation4-new">
                <h5>Sony Playstation Camera</h5>
                <h6>Rp1.299.000</h6>
                <div class="sale">
                    <h4>Sale</h4>
                </div>
            </div>
        </div>
    </section>

    <!---home2-->
    <section class="home2" id="home2">
        <div class="home2-text">
            <h1>Play Online<br><span>With Anyone</span></h1>
            <p>Bermain tanpa batas dengan siapapun secara online.</p>
            <a href="" class="btn" onclick="showAlert()" style="background-color: white; color: black;">Upgrade</a>
        </div>
    </section>

    <!---wrapper-->
    <section class="wrappers" id="wrappers">
        <div class="center-text">
            <h2>Sewa Console Playstation 5</h2>
        </div>
    
        <div class="wrapper">
            <div class="single-price">
                <h1>Basic</h1>
                <div class="price">
                    <h2>50K</h2>
                </div>
                <div class="deals">
                    <h4>Peminjaman 1 hari</h4>
                    <h4>Kabel HDMI</h4>
                    <h4>Kabel Power</h4>
                    <h4>2 Stik PS 5</h4>
                    <h4>Game Digital</h4>
                </div>
                <a href="" onclick="showAlert()">select</a>
            </div>
    
            <div class="single-price">
                <h1>Standard</h1>
                <div class="price">
                    <h2>80K</h2>
                </div>
                <div class="deals">
                    <h4>Peminjaman 2 hari</h4>
                    <h4>Kabel HDMI</h4>
                    <h4>Kabel Power</h4>
                    <h4>2 Stik PS 5</h4>
                    <h4>Game Digital</h4>
                </div>
                <a href="" onclick="showAlert()">select</a>
            </div>
    
            <div class="single-price">
                <h1>Premium</h1>
                <div class="price">
                    <h2>100K</h2>
                </div>
                <div class="deals">
                    <h4>Peminjaman 3 hari</h4>
                    <h4>Kabel HDMI</h4>
                    <h4>Kabel Power</h4>
                    <h4>2 Stik PS 5</h4>
                    <h4>Game Digital</h4>
                </div>
                <a href="" onclick="showAlert()">select</a>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!---elementor card-->
    <section class="carding" id="carding">
        <div class="center-text">
            <h2>Kenapa Harus Memilih Kami</h2>
        </div>
        <br><br>
        <div class="card">
            <div class="box">
                <div class="icon">01</div>
                <div class="icon-content">
                    <h3>Harga Murah</h3>
                    <p>DALF Playstation Menawarkan harga murah bagi kalian yang menyewa PlayStation 5 dengan harga murah dan terjangkau</p>
                </div>
            </div>

            <div class="box">
                <div class="icon">02</div>
                <div class="icon-content">
                    <h3>Respon Cepat</h3>
                    <p>Kami berkomitmen untuk selalu cepat dan tanggap untuk melayani setiap customer yang menyewa PlayStation 5 di DALF Playstation</p>
                </div>
            </div>

            <div class="box">
                <div class="icon">03</div>
                <div class="icon-content">
                    <h3>Game Update</h3>
                    <p>Setiap Penyewan PlayStation 5 Kami, anda akan mendapatkan 1 bundle game yang dimana berisi berbagai macam game terbaru</p>
                </div>
            </div>
        </div>
    </section>
    
    <!---contact--->
    <section class="contact" id="contact">
        <div class="main-contact">
            <h3>DALF Playstation</h3>
            <h5>Bergabung Bersama Kami</h5>
            <div class="icons">
                <a href="https://www.instagram.com/dalfplaystation/"><i class='bx bxl-instagram-alt'></i></a>
                <a href="https://www.facebook.com/profile.php?id=100093389473048"><i class='bx bxl-facebook-square' ></i></a>
                <a href="https://twitter.com/DalfPlaystation"><i class='bx bxl-twitter' ></i></a>
            </div>
        </div>

        <div class="main-contact">
            <h3>Explore</h3>
            <li><a href="https://blog.playstation.com/">Berita</a></li>
            <li><a href="kupon.php">Voucher</a></li>
            <li><a href="" onclick="showAlert()">Kontak</a></li>
        </div>

        <div class="main-contact">
            <h3>Pelayanan</h3>
            <li><a href="" onclick="showAlert()">Sewa Console</a></li>
            <li><a href="about.php">Tentang Kami</a></li>
        </div>
    </section>

    <div class="copyright">
        <p>Copyright © 2023 All rights reserved | DALF Playstation</p>
    </div>

    <!---scroll ke atas-->
    <a href="#" class="top"><i class='bx bx-up-arrow-alt' ></i></a>

    <!---- Syntax Buat JavaScript-->
    <script>
        const header = document.querySelector("header");

        window.addEventListener("scroll", function() {
            header.classList.toggle ("sticky", window.scrollY > 0);
        });

        const wrapper = document.querySelector('.login-wrapper');
        const loginLink = document.querySelector('.login-link');
        const registerLink = document.querySelector('.register-link');
        const btnPopup = document.querySelector('.btnLogin-popup');
        const iconClose = document.querySelector('.icon-close');

        registerLink.addEventListener('click', ()=> {
            wrapper.classList.add('active');
        });

        loginLink.addEventListener('click', ()=> {
            wrapper.classList.remove('active');
        });

        btnPopup.addEventListener('click', ()=> {
            wrapper.classList.add('active-popup');
        });

        iconClose.addEventListener('click', ()=> {
            wrapper.classList.remove('active-popup');
        });

        function showAlert() {
            alert("Anda harus login terlebih dahulu");
        }
        function showAlerts(event) {
            alert("Selamat akun kamu berhasil dibuat, silahkan login!");
            event.exit(); // Prevent form submission
        }
    </script>
</body>
</html>