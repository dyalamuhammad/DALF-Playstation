<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Coupon</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <style>
            *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'poppins', sans-serif;
            }
            .container{
                width: 100%;
                height: 30vh;
                background: white;
                display: flex;
                align-items: center;
                justify-content: center;

            }
            .coupon-card{
                background: linear-gradient(135deg, #006fcd, #1E90FF);
                color: #fff;
                text-align: center;
                padding: 40px 80px;
                border-radius: 15px;
                box-shadow: 0 10px 10px 0 rgba(0,0,0,0.15);
                position: relative;

            }
            .logo{
                width: 80px;
                border-radius: 8px;
                margin-bottom: 20px;

            }
            .coupon-card h3{
                font-size: 20px;
                font-weight: 400;
                line-height: 40px;
            }
            .coupon-card p{
                font-size: 15px;

            }
            .coupon-row{
                display: flex;
                align-items: center;
                margin: 25px auto;
                width: fit-content;

            }
            #cpnCode{
                border: 1px dashed #fff;
                padding: 10px 20px;
                border-right: 0;

            }
            #cpnBtn{
                border: 1px solid #fff;
                background: #fff;
                padding: 10px 20px;
                color: #7158fe;
                cursor: pointer;
            }
            .circle1, .circle2{
                background: #f0fff3;
                width: 50px;
                height: 50px;
                border-radius: 50%;
                position: absolute;
                top: 50%;
                transform: translateY(-50%);

            }
            .circle1{
                left: -25px;
            }
            .circle2{
                right: -25px;
            }
            .coupon-card2{
                background: linear-gradient(135deg, #006fcd, #1E90FF);
                color: #fff;
                text-align: center;
                padding: 40px 80px;
                border-radius: 15px;
                box-shadow: 0 10px 10px 0 rgba(0,0,0,0.15);
                position: relative;

            }
            .logo2{
                width: 80px;
                border-radius: 8px;
                margin-bottom: 20px;

            }
            .coupon-card2 h3{
                font-size: 20px;
                font-weight: 400;
                line-height: 40px;
            }
            .coupon-card2 p{
                font-size: 15px;

            }
            .coupon-row2{
                display: flex;
                align-items: center;
                margin: 25px auto;
                width: fit-content;

            }
            #cpnCode2{
                border: 1px dashed #fff;
                padding: 10px 20px;
                border-right: 0;

            }
            #cpnBtn2{
                border: 1px solid #fff;
                background: #fff;
                padding: 10px 20px;
                color: #7158fe;
                cursor: pointer;
            }
            .circle12, .circle22{
                background: #f0fff3;
                width: 50px;
                height: 50px;
                border-radius: 50%;
                position: absolute;
                top: 50%;
                transform: translateY(-50%);

            }
            .circle12{
                left: -25px;
            }
            .circle22{
                right: -25px;
            }
            
        </style>
    </head>
    <body>
        <br><br><br><br><br>
        <h1 align="center">Ambil Kode Voucher</h1>
        <div class="container">
            <div class="coupon-card">
                <h1>Discount 15%</h1>
                <h3>Minimal Pembelian Rp900.000</h3>
                <di class="coupon-row">
                    <span id="cpnCode">DALFSALE15</span>
                    <span id="cpnBtn">Copy</span>
                </di>
                <div class="circle1"></div>
                <div class="circle2"></div>
            </div>
        </div>
        <div class="container">
            <div class="coupon-card2">
                <h1>Discount 10%</h1>
                <h3>Minimal Pembelian Rp500.000</h3>
                <di class="coupon-row2">
                    <span id="cpnCode2">DALFSALE10</span>
                    <span id="cpnBtn2">Copy</span>
                </di>
                <div class="circle12"></div>
                <div class="circle22"></div>
            </div>
        </div>
    </body>
    <script>
         var cpnBtn = document.getElementById("cpnBtn");
            var cpnCode = document.getElementById("cpnCode");

            cpnBtn.onclick = function(){
                navigator.clipboard.writeText(cpnCode.innerHTML);
                cpnBtn.innerHTML ="Copied";
                setTimeout(function(){
                    cpnBtn.innerHTML="Copy";
                }, 3000);
            }

        var cpnBtn2 = document.getElementById("cpnBtn2");
            var cpnCode2 = document.getElementById("cpnCode2");

            cpnBtn2.onclick = function(){
                navigator.clipboard.writeText(cpnCode2.innerHTML);
                cpnBtn2.innerHTML ="Copied";
                setTimeout(function(){
                    cpnBtn2.innerHTML="Copy";
                }, 3000);
            }
    </script>
</html>