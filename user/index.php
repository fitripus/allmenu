<?php
session_start();
if($_SESSION['login']==0){
	header("location:login.php");
}else{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="ckeditor/ckeditor.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tainan Enterprises</title>
<link href="../css/reset.css" rel="stylesheet" />
<link href="../css/admin.css" rel="stylesheet" />
</head>

<body>
    <div id="back">
        <img src="../img/Wallpaper_by_El_Felipe.jpg" />
    </div>
        <?php
        include 'menu.php';
        ?>
    <div class="container">
        <div id="data">
            <div class="padding20">
        <?php
        include 'content.php';
        ?>
            </div>
        </div>
    </div>
</body>
</html>
<?php
}
?>