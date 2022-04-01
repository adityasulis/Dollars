<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");
}
?>

<?php include_once "header.php"; ?>
<style>
    .chat-box::-webkit-scrollbar {
        width: 0px;
    }

    .chat-box .chat {
        margin: 15px 0;
    }

    .chat-box .chat p {
        word-wrap: break-word;
        padding: 8px 16px;
        box-shadow: 0 0 32px rgb(0 0 0 / 8%),
            0 16px 16px -16px rgb(0 0 0 / 10%);
    }

    .outgoing .details {
        margin-left: auto;
        max-width: calc(100% - 130px);
    }

    .outgoing .details p {
        background: #333;
        color: #fff;
        border-radius: 18px 18px 0 18px;
    }

    .chat-box .incoming {
        display: flex;
        align-items: flex-end;
    }

    .chat-box .incoming img {
        height: 35px;
        width: 35px;
    }

    .incoming .details {
        margin-left: 10px;
        margin-right: auto;
        max-width: calc(100% - 130px);
    }

    .incoming .details p {
        color: #333;
        background: #fff;
        border-radius: 18px 18px 18px 0;
    }

    .chat .typing-area {
        padding: 18px 30px;
        display: flex;
        justify-content: space-between;
    }

    .typing-area input {
        height: 45px;
        width: calc(100% - 58px);
        font-size: 17px;
        border: 1px solid #ccc;
        padding: 0 13px;
        border-radius: 5px 0 0 5px;
        outline: none;
    }

    .typing-area button {
        width: 55px;
        border: none;
        outline: none;
        background: #333;
        color: #fff;
        font-size: 19px;
        cursor: pointer;
        border-radius: 0 5px 5px 0;
    }
</style>

<body>
    <div class="wrapper">
        <section class="chat">
            <header style="display: flex;align-items:center;padding:18px 30px;">
                <?php
                include_once "php/config.php";
                $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");

                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                }
                ?>
                <a href="users.php" class="back-icon" style="font-size: 18px;color:#333;"><i class="fas fa-arrow-left"></i></a>
                <img src="php/images/<?= $row['img'] ?>" alt="" style="height: 45px;margin:0 15px;">
                <div class="details">
                    <span style="font-size: 17px;font: weight 500px;"><?= $row['fname'] . " " . $row['lname'] ?></span>
                    <p><?= $row['status'] ?></p>
                </div>
            </header>
            <div class="chat-box" style="height: 500px;background:#f7f7f7;padding:10px 30px 20px 30px;box-shadow :inset 0 32px 32px -32px rgb(0 0 0 / 5%),inset 0 -32px 32px -32px rgb(0 0 0 / 5%);overflow-y:auto;">

            </div>
            <form action="#" class="typing-area">
                <input type="text" name="outgoing_id" value="<?= $_SESSION['unique_id']; ?>" hidden>
                <input type="text" name="incoming_id" value="<?= $user_id; ?>" hidden>
                <input type="text" name="message" class="input-field" placeholder="Type a message ...">
                <button>
                    <i class="fab fa-telegram-plane"></i>
                </button>
            </form>
        </section>
    </div>

    <script type="text/javascript" src="js/chat.js"></script>
</body>

</html>