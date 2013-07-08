<?
$test =1;
$page = $_GET['page'];
if(!$page) { $page = "home"; }
include ("inc/header.php");
include("inc/page.$page.php");
include 'inc/footer.php';
?>