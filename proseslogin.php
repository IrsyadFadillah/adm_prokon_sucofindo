<?php
    session_start();
    include("koneksi.php");

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query  = "select count(id_user) from user WHERE username = \"".$user."\" AND password = \"".$pass."\"";
    $result = mysqli_query($koneksi, $query);
    $jml    = mysqli_fetch_row($result);
    if( ($jml[0] < 1) && (!isset($_SESSION["username"]) && !isset($_SESSION["password"])))
    {
        echo"<script>alert('Silahkan Login')</script>";
        header("location:login.php");
    }
    if($jml[0] >= 1){
            $_SESSION["username"] = $user;
            $_SESSION["password"] = $pass;
            header("location: dasprokon.php");
    }
    elseif ($jml[0] < 1){
        header("location:login.php?alert=gagal");
    }
?>

<?php
    require ('../config.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users where email = '$email'";
    $query = mysqli_query($con,$sql);

    if(mysqli_num_rows($query) == 0 ){
        echo "EMAIL TIDAK DITEMUKAN";
    }else {
        $user = mysqli_fetch_assoc($query);
        if(password_verify($password,$user['password'])){
            if($user['is_verified']==1){
                session_start();
                $_SESSION['isLogin'] = true;
                $_SESSION['user'] = $user;
    
                header("location: ../home.php");
            }else {
                echo "VERIF EMAIL DULU GAN !";
            }
        }else {
            echo "PASSWORD SALAH !";
        }
    }
?>