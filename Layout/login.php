
<?php


include __DIR__ . '/../Service/database.php';





    $database_name = "phplearn";
    mysqli_select_db($conn , $database_name);

    if(!$database_name){
        echo "Error";
    }

    if (isset($_POST['login'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            header("Location: dashboard.php"); 
          } else {
            echo "error";
          }

        // echo  $username . " " . $password;

        // echo "Ini Adalah Username"   $username; 
        // echo "\r\n";
        // echo " Ini Adalah Password", $password;

        // echo "Login";

        mysqli_close($conn);

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Login</h1>

    <header>
        <form action="login.php" method="POST">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <button type="submit" name="login" >Login !</button>
        </form>
    </header>

</body>
</html>