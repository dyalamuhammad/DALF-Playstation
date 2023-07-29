<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Metode Pembayaran</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        /* CSS Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .payment-method {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .payment-title {
            text-align: center;
            font-size: 32px;
            margin-bottom: 30px;
            color: #333;
        }

        .payment-options {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }

        .payment-option {
            width: 200px;
            height: 100px;
            margin: 10px;
            border-radius: 8px;
            background-color: #f1f1f1;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .payment-option:hover {
            background-color: var(--main-color);
        }

        .payment-option img {
            width: 80%;
            height: auto;
            object-fit: contain;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 18px;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .submit-btn {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .submit-btn button {
            padding: 12px 24px;
            font-size: 18px;
            background-color: var(--main-color);
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn button:hover {
            background-color: var(--main-color);
        }

        /* Tambahan untuk mengubah warna latar belakang metode pembayaran saat dipilih */
        .payment-option input[type="radio"] {
            display: none;
        }

        .payment-option input[type="radio"]:checked + .payment-option-label {
            background-color: var(--main-color);
        }

        .payment-option input[type="radio"]:checked + .payment-option-label img {
            opacity: 0.7;
        }

        /* Gaya untuk label metode pembayaran */
        .payment-option-label {
            position: relative;
            display: block;
            width: 100%;
            height: 100%;
            border-radius: 8px;
            overflow: hidden;
        }

        /* Gaya untuk ikon metode pembayaran */
        .payment-option-label img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60%;
            height: auto;
            object-fit: contain;
            opacity: 1;
            transition: opacity 0.3s ease;
        }
        #couponStatus {
            display: inline-block;
            margin-left: 10px;
            vertical-align: middle;
            font-size: 20px;
        }

        #couponStatus i {
            color: #32CD32; /* Warna hijau untuk ceklis */
        }
        
        #couponStatus i.fa-times {
            color: red;
        }
        #apply-coupon-btn {
            background-color: var(--main-color);
            color: #fff;
            border: none;
            padding: 8px 16px;
            font-size: 14px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        #apply-coupon-btn:hover {
            background-color: var(--main-color);
        }

        #apply-coupon-btn:active {
            background-color: black;
        }

        #apply-coupon-btn:focus {
            outline: none;
            box-shadow: 0 0 0 2px var(--main-color);
        }



    </style>
</head>
<body>
<div class="container">
    <h2 class="payment-title">Checkout</h2>
    <form>
        <div class="payment-method">
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Nomor Telepon:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat Pengiriman:</label>
                <textarea id="address" name="address" rows="4" cols="97" required></textarea>
            </div>
            <div class="form-group">
                <label for="coupon">Kode Voucher:</label>
                <input type="text" id="coupon" name="coupon">
                <button type="button" id="apply-coupon-btn">Gunakan</button>
                <span id="couponStatus"></span>
            </div>
            <div class="payment-options">
                <label class="payment-option">
                    <input type="radio" name="payment-method" value="bank_transfer" required>
                    <span class="payment-option-label">
                        <img src="gambar/gopay.png" alt="Bank Transfer">
                    </span>
                </label>
                <label class="payment-option">
                    <input type="radio" name="payment-method" value="credit_card" required>
                    <span class="payment-option-label">
                        <img src="gambar/ovo.png" alt="Credit Card">
                    </span>
                </label>
                <label class="payment-option">
                    <input type="radio" name="payment-method" value="credit_card" required>
                    <span class="payment-option-label">
                        <img src="gambar/shopeepay.png" alt="Credit Card">
                    </span>
                </label>
                <label class="payment-option">
                    <input type="radio" name="payment-method" value="credit_card" required>
                    <span class="payment-option-label">
                        <img src="gambar/dana.png" alt="Credit Card">
                    </span>
                </label>
                <label class="payment-option">
                    <input type="radio" name="payment-method" value="credit_card" required>
                    <span class="payment-option-label">
                        <img src="gambar/mastercard.png" alt="Credit Card">
                    </span>
                </label>
                <label class="payment-option">
                    <input type="radio" name="payment-method" value="credit_card" required>
                    <span class="payment-option-label">
                        <img src="gambar/visa.png" alt="Credit Card">
                    </span>
                </label>
            </div>
            <div class="submit-btn">
                <button type="submit">Proses Pembayaran</button>
            </div>
        </div>
    </form>
</div>

<script>
    document.getElementById('apply-coupon-btn').addEventListener('click', function() {
        var couponCode = document.getElementById('coupon').value;
        var validCoupons = ["DALFSALE15", "DALFSALE10"];
        var discountRate = 0;
    
        if (validCoupons.includes(couponCode)) {
            // Kode kupon benar, tentukan persentase diskon sesuai kode kupon
            if (couponCode === "DALFSALE15") {
                discountRate = 15;
            } else if (couponCode === "DALFSALE10") {
                discountRate = 10;
            }

            // Tampilkan ceklis
            document.getElementById('couponStatus').innerHTML = '<i class="fas fa-check"></i>';
            // Set harga baru setelah diskon
            // Ubah sesuai kebutuhan Anda
            var totalPrice = 100; // Harga sebelum diskon
            var discountedPrice = totalPrice - (totalPrice * (discountRate / 100));
            document.getElementById('totalPrice').innerText = discountedPrice; // Harga setelah diskon
        } else {
            // Kode kupon salah, tampilkan silang
            document.getElementById('couponStatus').innerHTML = '<i class="fas fa-times"></i>';
            // Hapus harga diskon
            document.getElementById('totalPrice').innerText = ''; // Harga tanpa diskon
        }
    });

    document.querySelector('form').addEventListener('submit', function(event) {
        event.preventDefault();
        var paymentOptions = document.querySelectorAll('.payment-option');
        paymentOptions.forEach(function(option) {
            option.classList.add('disabled');
        });
        window.location.href = 'payment done.php?payment=true';
    });
</script>

</body>
</html>
