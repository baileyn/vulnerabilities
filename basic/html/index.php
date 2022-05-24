<html>
<head>
</head>
<body>
    <?if (isset($_POST['submit'])) {?>
        <p>Hello, <?=$_POST['username']?></p>
    <?} else {?>
        <?include('login-form.php')?>
    <?}?>
</body>
</html>