<!-- views/content/email.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Password Request</title>
    <style>
        /* Inline CSS */
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        
        <p>Halo <?php echo $nama_depan ; ?> baru-baru ini saya menerima laporan permintaan password baru, silahkan klik tombol di bawah ini untuk membuat password baru</p>

        <div style="text-align: center;margin-bottom: 40px; margin-top: 40px;">
        	<a href="<?php echo make_url() ; ?>account/password/reset/<?php echo $token ; ?>?email=<?php echo $email ; ?>&&code=<?php echo $token ; ?>" style="background-color: #007bff; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px; transition: background-color 0.3s;">Reset Password</a>
        </div>

        <p>
        	Jika anda merasa tidak pernah mengajukan permintaan ini, silahkan abaikan email ini.
        </p>


    </div>
</body>
</html>
