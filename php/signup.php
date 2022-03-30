<?php

session_start();
include_once "config.php";
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //email valid cek di db
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
        if (mysqli_num_rows($sql) > 0) { //if email  already exist
            echo "$email - already exist";
        } else {
            //check file upload
            if (isset($_FILES['image'])) { //file is uploaded
                $img_name = $_FILES['image']['name']; //set image name
                // $img_type = $_FILES['image']['type']; //set image type
                $tmp_name = $_FILES['image']['tmp_name']; //temp for save file

                //explode image and get extension jpg,png
                $img_explode = explode('.', $img_name);
                $img_ext = end($img_explode); //extension from user upload

                $extensions = ['png', 'jpeg', 'jpg']; //valid extension
                if (in_array($img_ext, $extensions) === true) { //img ext match
                    $time = time();
                    $new_img_name = $time . $img_name;

                    if (move_uploaded_file($tmp_name, "images/" . $new_img_name)) {
                        $status = "Active now";
                        $random_id = rand(time(), 10000000);

                        //insert data
                        $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status) VALUES ({$random_id}, '{$fname}','{$lname}','{$email}','{$password}','{$new_img_name}','{$status}')");

                        if ($sql2) { //if data inserted
                            $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                            if (mysqli_num_rows($sql3) > 0) {
                                $row = mysqli_fetch_assoc($sql3);
                                $_SESSION['unique_id'] = $row['unique_id']; //session dengan unique id
                                echo "success";
                            }
                        } else {
                            echo "Something wrong I can feel it!";
                        }
                    }
                } else {
                    echo "Please select an Image - jpeg, jpg, png!";
                }
            } else {
                echo "Please select an Image!";
            }
        }
    } else {
        echo "$email - This is not a valid email";
    }
} else {
    echo "All input field are required!";
}
