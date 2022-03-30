<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dollars</title>

    <link rel="shortcut icon" href="img/Dollars.png" type="image/x-icon">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>
<style>
    .form form .error-txt {
        color: #721c24;
        background: #f8d7da;
        padding: 8px 10px;
        text-align: center;
        border-radius: 5px;
        margin-bottom: 10px;
        border: 1px solid #f5c6cb;
        display: none;
    }

    .form form .field i.active::before {
        color: #333;
        content: "\f070";
    }
</style>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Dollars</header>
            <form action="#" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>Nama Depan</label>
                        <input type="text" name="fname" placeholder="Nama Depan" required>
                    </div>
                    <div class="field input">
                        <label>Nama Belakang</label>
                        <input type="text" name="lname" placeholder="Nama Belakang" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="email" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Pilih Foto</label>
                    <input type="file" name="image" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Register">
                </div>
            </form>
            <div class="link">Sudah punya Akun? <a href="login.php">Login!</a></div>
        </section>
    </div>

    <script src="js/pass-show-hide.js"></script>
    <script src="js/signup.js"></script>
</body>

</html>