<?php
session_start();
//เชื่อมต่อฐานข้อมูล
include('../config/sql.inc.php');
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php

if ($_POST['firstname'] == "" 
    || $_POST['lastname'] == ""
    || $_POST['email'] == "" 
    || $_POST['password'] == ""
    || $_POST['repassword'] == "") {
    echo "<script>alert('กรุณาข้อมูลให้ครบ');document.location=document.referrer;</script>";
    exit();
}

if(strlen($_POST['password'])<6){
    echo "<script>alert('รหัสผ่านต้องมีความยาวตั้งแต่ 6 ตัวอักษรขึ้นไป');document.location=document.referrer;</script>";
    exit();
}
if($_POST['password']!=$_POST['repassword']){
    echo "<script>alert('รหัสผ่านทั้งสองช่องไม่ตรงกัน');document.location=document.referrer;</script>";
    exit();
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('รูปแบบอีเมลไม่ถูกต้อง');document.location=document.referrer;</script>";
    exit();
}


$mysql->query("INSERT INTO member(firstname, lastname, nickname, tel, email, password, faculty, department, insert_date, last_update) VALUES(%s,%s,%s,%s,%s,%s,%s,%s, now(),now())", array(
    $_POST['firstname'],
    $_POST['lastname'], $_POST['nickname'],$_POST['tel'],$_POST['email'],
    md5(sha1(trim($_POST['password']))),$_POST['faculty'],$_POST['department']
));
echo "<script>alert('การลงทะเบียนเสร็จสิ้นแล้ว สามารถเข้าสู่ระบบได้เลย');document.location=document.referrer;</script>";
echo "<script>document.location=document.referrer+'?c=success';</script>";
?>
