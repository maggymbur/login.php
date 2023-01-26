<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
    <form action="login.php" method="post">
        <h2></h2>
        <?php if(isset($_GET['error'])) {?>
            <p cass="error"> <?php echo $_GET['error'];?></p>
        <?php } ?>
        <label> User Name </label>
        <input type="text" name="uname" placeholder="User Nmame"><br>
        <label> password </label>
        <input type="password" name="password" placeholder="password"
        
        <button type="submit">login</button>

        </form>
    
</body>
</html>