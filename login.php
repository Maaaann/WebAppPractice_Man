<?php include __DIR__."/inc/header.php";?>
<?php
if(isset($_SESSION["auth"])){
    header("location:index.php");
    die;
}
?>
<?php include __DIR__."/inc/nav.php";?>
    <h1>Login Page</h1>

<?php include __DIR__."/inc/footer.php";?>



