<?php
session_start();
//เชื่อมต่อฐานข้อมูล
include('../config/sql.inc.php');
?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php

if ($_POST['fullname'] == ""
    || $_POST['tel'] == ""
    || $_POST['faculty'] == "0") {
    echo "<script>alert('กรุณาข้อมูลให้ครบ');document.location=document.referrer;</script>";
    exit();
}


$mysql->query("UPDATE member SET fullname=%s,
tel=%s,faculty=%s,
sex=%s, last_update=now() WHERE id=%n", array(
    $_POST['fullname'],
    $_POST['tel'],
    $_POST['faculty'],
    $_POST['sex'],
    $_SESSION['id']
));
$_SESSION['fullname'] = $_POST['fullname'];
echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');</script>";
echo "<script>document.location=document.referrer+'?c=success';</script>";
?>