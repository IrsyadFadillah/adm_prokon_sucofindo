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