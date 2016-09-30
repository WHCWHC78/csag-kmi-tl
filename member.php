<?php
session_start();
$title = 'member';
include_once("config/sql.inc.php");
include("function.php");
include("header.php");
include("nav.php");
include("template/member_template.php");
include("footer.php");

?>
