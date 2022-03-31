<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");
}
?>
<?php include_once "header.php"; ?>
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
                <?php
                include_once "php/config.php";
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");

                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                }
                ?>
                <div class="content">
                    <img src="php/images/<?= $row['img'] ?>" alt="photo" style="height: 50px;">
                    <div class="details">
                        <span><?= $row['fname'] . " " . $row['lname'] ?></span>
                        <p><?= $row['status'] ?></p>
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

            </div>
        </section>
    </div>

    <script src="js/users.js"></script>
</body>

</html>