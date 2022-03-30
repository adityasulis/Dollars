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
        display: none;
    }

    .form form .field i.active::before {
        color: #333;
        content: "\f070";
    }
</style>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>Dollars</header>
            <form action="#">
                <div class="error-txt"></div>
                <div class="field input">
                    <label>Email Addres</label>
                    <input type="text" name="email" placeholder="youremail@example.com">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Login">
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">Sign Up!</a></div>
        </section>
    </div>

    <script src="js/pass-show-hide.js"></script>
    <script src="js/login.js"></script>
</body>

</html>