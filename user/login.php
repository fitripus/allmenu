<html>
<head>
	<link href="../css/reset.css" rel="stylesheet">
	<link href="../css/admin.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div id="back">
        <img src="../img/Wallpaper_by_El_Felipe.jpg">
    </div>

	<div id="atas">
    	<h2>Tainan Enterprises</h2>
    </div>    
    <div id="login">
        <h1><i class="icon-user"></i> login </h1>
        <?php
            echo"
            <form action='ceklogin.php' method='post'>
                <p>
                    <input type='text' name='username' placeholder='Username'>
                </p>
                <p>
                    <input type='password' name='password' placeholder='Password'>
                </p>
                <p>
                    <input type='submit' value='login'>
                    <input type='reset' value='cancel'>
                </p>
            </form>
                ";
        ?>
    </div>
</body>
</html>