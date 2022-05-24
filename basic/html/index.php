<?php
$servername = "db";
$username = "root";
$password = "password";
$db = "vulns";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
?>

<html>
<head>
</head>
<body>
    <?if (isset($_POST['submit'])) {?>
        <?php
        $username = $_POST['username'];
        $password = $_POST['password'];

        $q = "SELECT id FROM users WHERE username = '$username' AND password = '$password'";
        echo $q;
        
        $results = $conn->query($q);
        if ($results->num_rows == 1) {
            echo "<h1>Welcome, $username</h1>";
        } else {
            echo "<p>Incorrect username/password!</p>";
        }
        ?>
    <?}?>
    <form action="<?=$_SELF?>" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username">
        <label for="password">Password:</label>
        <input type="text" name="password">
        <input type="submit" name="submit">
    </form>
</body>
</html>