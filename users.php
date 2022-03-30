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
    .users .search input {
        position: absolute;
        height: 42px;
        width: calc(100% - 50px);
        border: 1px solid #ccc;
        padding: 0 13px;
        font-size: 16px;
        border-radius: 5px 0 0 5px;
        outline: none;
        opacity: 0;
        pointer-events: none;
        transition: all 0.3s ease;
    }

    .users .search input.active {
        opacity: 1;
        pointer-events: auto;
    }

    .users .search button {
        width: 47px;
        height: 42px;
        border: none;
        outline: none;
        color: #333;
        background: #fff;
        cursor: pointer;
        border-radius: 0 5px 5px 0;
        transition: all 0.2s ease;
    }

    .users .search button.active {
        color: #fff;
        background: #333;
    }

    .users .search button.active i::before {
        content: "\f00d";
    }
</style>

<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <div class="content">
                    <img src="img/3.jpg" alt="photo" style="height: 50px;">
                    <div class="details">
                        <span>Aditya Sulis</span>
                        <p>Active Now</p>
                    </div>
                </div>
                <a href="#" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select an user to start chat</span>
                <input type="text" placeholder="Enter name to search ...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
                <a href="#">
                    <div class="content">
                        <img src="img/3.jpg" alt="">
                        <div class="details">
                            <span>Riugamine Mikado</span>
                            <p>Test Message</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <i class="fas fa-circle"></i>
                    </div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="img/3.jpg" alt="">
                        <div class="details">
                            <span>Orihaya Izaya</span>
                            <p>Test Message</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <i class="fas fa-circle"></i>
                    </div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="img/3.jpg" alt="">
                        <div class="details">
                            <span>Kida Masaomi</span>
                            <p>Test Message</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <i class="fas fa-circle"></i>
                    </div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="img/2.jpg" alt="">
                        <div class="details">
                            <span>Anri Sonohara</span>
                            <p>Test Message</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <i class="fas fa-circle"></i>
                    </div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="img/3.jpg" alt="">
                        <div class="details">
                            <span>Hewazima Sizhou</span>
                            <p>Test Message</p>
                        </div>
                    </div>
                    <div class="status-dot">
                        <i class="fas fa-circle"></i>
                    </div>
                </a>
            </div>
        </section>
    </div>

    <script src="js/users.js"></script>
</body>

</html>