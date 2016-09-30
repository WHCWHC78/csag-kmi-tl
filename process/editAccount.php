<?php
session_start();
//เชื่อมต่อฐานข้อมูล
include('../config/sql.inc.php');
?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?

if ($_POST['firstname'] == "" || $_POST['lastname'] == "") {
    echo "<script>alert('กรุณาข้อมูลให้ครบ');document.location=document.referrer;</script>";
    exit();
}


$mysql->query("UPDATE member SET firstname=%s,lastname=%s,
nickname=%s, tel=%s,faculty=%s,
department=%s, last_update=now() WHERE id=%n", array(
    $_POST['firstname'],
    $_POST['lastname'], $_POST['nickname'], $_POST['tel'],
    $_POST['faculty'],
    $_POST['department'], $_SESSION['id']
));
$_SESSION['fullname'] = $_POST['firstname']." ".$_POST['lastname'];
echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');</script>";
echo "<script>document.location=document.referrer+'?c=success';</script>";
?>