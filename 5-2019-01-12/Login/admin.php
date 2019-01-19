<?php
    if (!isset($_SESSION['loged'])){
        setcookie("error", "Bạn chưa đăng nhập");
    }
    else echo "Chào mừng đến với Thế giới game";