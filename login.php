<?php
session_start();
if (isset($_SESSION['unique_id'])) { //if user is logged in
    header("location: users.php");
}
?>
<?php include_once "header.php"; ?>
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