<?php 

include 'db/connection.php';

session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
}

?>
<!--doctype html-->
<html>
<head>
<?php require_once ("component/meta.php"); ?>
</head>
<body>

    <?php require_once ("component/header.php"); ?>
    <?php require_once ("component/checkout.php"); ?>
    <?php require_once ("component/footer.php"); ?>
</section>
<?php require_once ("component/script.php"); ?>
</body>
</html>
