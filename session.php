<?php
        include 'config.php';
        // Nếu click vào nút Lưu mật khẩu
        if (isset($_POST['save']))
        {
            // Lưu Session
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['password'];
        }
        //truy vấn dữ liệu
        $sql = "SELECT * FROM user WHERE email = '$email' and password ='$password'";
        $query = mysqli_query($conn, $sql);

        //kiểm tra đã đăng nhập chưa, lưu vào session
        //if($_SERVER['REQUEST_METHOD']== 'POST'){
            //if(isset($_POST['email'])){
                //$email = $_POST['email'];
                //$password = $_POST['password'];    
                //if ($email ==$_POST['email'] && $password == $_POST['password']){
                //$_SESSION['email'] = $email;
                //$_SESSION['password'] = $password;
            //}
        //}
        //} 
?>
