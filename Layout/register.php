    <?php


include"../Service/database.php";



     $database_name = "phplearn";
     mysqli_select_db($conn , $database_name);

     if (!$conn){
        echo "Error";
     };



     try {
        if (isset($_POST["register"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
    
            
    
            $sql = "INSERT INTO users (username,password) VALUES  ('$username','$password')";
    
            if($conn->query($sql)){
    
                echo "Success";
        
            }else{
                echo "Data Ridak Terkirim";
            }
        }



      } catch (Exception ) {
        echo "Error Brooo Akun Sudah Terdaftar";
      }
      mysqli_close($conn);

   
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Register</h1>
    <form action="register.php" method="POST">
        <input type="text" placeholder="username" name="username"/>
        <input type="password" placeholder="password" name="password"/>
        <button type="submit" name="register">Daftar</button>
    </form>
</body>
</html>