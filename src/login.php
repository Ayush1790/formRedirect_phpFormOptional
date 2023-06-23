<?php
if($_GET['email']=='admin@admin.com' && $_GET['pswd']=='1'){
    header('location:dashboard.php');
}else{
    header('location:index.php');
}