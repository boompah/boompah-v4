<?
include 'inc/header.php';
$page = $_GET['page'];
if(!$page) { $page = "home"; }
include("inc/page.$page.php");
include 'inc/footer.php';
?>