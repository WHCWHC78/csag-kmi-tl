<? session_start(); ?>
<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
<?
unset($_SESSION['member']);
unset($_SESSION['email']);
unset($_SESSION['fullname']);
unset($_SESSION['id']);
echo "<script>document.location='../index.php';</script>";
?>
</body>
</html>