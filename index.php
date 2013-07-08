<?
$page = strtolower( preg_replace( '/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $_GET['page'] ) );
$page = str_replace("%20", "+", $page);
if(!$page) { $page = "home"; }
include ("inc/header.php");
include("inc/page.$page.php");
include 'inc/footer.php';
?>