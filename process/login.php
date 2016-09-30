<? session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?

if ($_POST['email'] == "") {
    echo "<script>alert('กรุณากรอกอีเมล');history.back();</script>";
    exit();
} else if ($_POST["password"] == "") {
    echo "<script>alert('กรุณากรอกรหัสผ่าน');history.back();</script>";
    exit();
}
//รับค่า
$email = trim($_POST['email']);
$password = md5(sha1(trim($_POST['password'])));
//เชื่อมต่อฐานข้อมูล
include('../config/sql.inc.php');
$row = $mysql->queryAndFetch("SELECT * FROM member WHERE email=%s AND password=%s", array($email,$password));
if (!$row) {
    echo "<script>alert('อีเมล หรือ รหัสผ่านของคุณไม่ถูกต้อง');history.back();</script>";
    exit();
}
$_SESSION['email'] = $email;
$_SESSION['member'] = $row['firstname'];
$_SESSION['id'] = $row['id'];
$_SESSION['fullname'] = $row['firstname'] . " " . $row['lastname'];
echo "<script>document.location=document.referrer;</script>";


?>
</body>
</html>